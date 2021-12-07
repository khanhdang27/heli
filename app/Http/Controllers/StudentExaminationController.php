<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Examination;
use App\Models\Notification;
use App\Models\Question;
use App\Models\StudentCourses;
use App\Models\Quiz;
use App\Models\StudentExamination;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class StudentExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        DB::enableQueryLog();
        $exam_details = StudentExamination::with([
            'studentCourse', 'studentCourse.student'
        ])->select('student_course_id', 'exam_id', 'quiz_id', 'reviewed')
            ->orderBy('reviewed')
            ->distinct()
            ->get();
        $data = $this->paginate($exam_details, 15);
        return view('admin.student-examination.index', [
            'exam_details' => $data,
        ]);
    }


    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, ['path' => URL::current()]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student-examination.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            StudentExamination::create([
                'student_id' => $input['student_id'],
                'course_id' => $input['course_id'],
                'exam_id' => $input['exam_id'],
                'quiz_id' => $input['quiz_id'],
                'question_id' => $input['question_id'],
                'time' => $input['time'],
                'answer' => $input['answer'],
                'answer_type' => $input['answer_type'],
            ]);
            DB::commit();
            return back()->with('success', 'Create success');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors($th->getMessage());
        }
    }

    public function grade(StudentCourses $student_course, Examination $exam, Quiz $quiz)
    {
        $exam_details = StudentExamination::where([
            'student_course_id' => $student_course->id,
            'exam_id' => $exam->id,
            'quiz_id' => $quiz->id,
        ])
            ->with('question')
            ->whereHas('question', function ($query) {
                return $query->orderBy('type');
            })
            ->orderBy('reviewed', 'asc')
            ->orderBy('created_at', 'desc')
            ->get();

        $reading = 0;
        $writing = 0;
        $listening = 0;
        $speaking = 0;
        foreach ($exam_details as $detail) {
            switch ($detail->question->type) {
                case \Constants::COURSE_READING:
                    $reading += $detail->time;
                    break;

                case \Constants::COURSE_WRITING:
                    $writing += $detail->time;
                    break;

                case \Constants::COURSE_LISTENING:
                    $listening += $detail->time;
                    break;

                case \Constants::COURSE_SPEAKING:
                    $speaking += $detail->time;
                    break;

                default:
                    # code...
                    break;
            }
        }

        return view('admin.student-examination.grade', [
            'exam_details' => $exam_details,
            'reading' => $reading,
            'writing' => $writing,
            'listening' => $listening,
            'speaking' => $speaking,
        ]);
    }

    public function handleGrade(Request $request, StudentCourses $student_course, Examination $exam, Quiz $quiz)
    {

        $input = $request->input();
        DB::beginTransaction();
        try {
            $exam_details = StudentExamination::where([
                'student_course_id' => $student_course->id,
                'exam_id' => $exam->id,
                'quiz_id' => $quiz->id,
            ])->update(['reviewed' => false]);

            $exam_ids = $input['is_review'];
            foreach ($exam_ids as $id) {
                StudentExamination::find($id)->update([
                    'reviewed' => true,
                ]);
            }
            DB::commit();
            return back()->with('success', 'Create success');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors($th->getMessage());
        }
    }

    public function handleSubmitAnswer(Request $request)
    {
        $input = $request->input();

        DB::beginTransaction();
        try {
            $courseId = $input['courseID'];
            $quizId = $input['quizID'];

            $exams = Examination::find($input['examID']);

            $student_course = StudentCourses::where([
                'student_id' => Auth::user()->id,
                'course_id' => $courseId,
            ])->first();

            $studentCourseId = $student_course->id;

            $quiz = Quiz::find($quizId)->load('questions');
            if ($exams->type == \Constants::EXAMINATION_ASSESSMENT) {
                [$result, $score, $_] = $this->doGrade($quiz->questions, $input['questions'], $studentCourseId, $quizId, $exams->id);

                $question = Question::find($input['questions'][0]['questionID']);
                if ($question->type == \Constants::COURSE_SPEAKING) {
                    $scoreGrade = $this->assessment($studentCourseId, $quizId, $exams->id);
                    DB::commit();
                    return response()->json(['passgrade' => $scoreGrade]);
                }
                DB::commit();
                return response()->json(['quiz_result' => $result, 'score' => $score]);
            } elseif ($exams->type == \Constants::EXAMINATION_EXERCISES) {
                if ($input['questions'][0]['answerType'] == \Constants::ANSWER_MC) {
                    [$result, $score, $_] = $this->doGrade($quiz->questions, $input['questions'], $studentCourseId, $quizId, $exams->id, true);
                    DB::commit();
                    return response()->json(['quiz_result' => $result, 'score' => $score]);
                } else {
                    $this->saveAnswer($input['questions'], $studentCourseId, $quizId, $exams->id);
                    DB::commit();
                    return response()->json(['message' => 'grading']);
                }
            } else {
                // Quiz Type
                if ($input['questions'][0]['answerType'] == \Constants::ANSWER_MC) {
                    [$result, $score, $questionType] = $this->doGrade($quiz->questions, $input['questions'], $studentCourseId, $quizId, $exams->id);
                    $studentInfo = User::find($student_course->student_id)->student;

                    if ($score / count($result) > 0.8) {
                        $this->upLevel($studentInfo, $student_course, $questionType);
                    } else {
                        $this->resetLevel($studentInfo, $student_course, $questionType);
                    }
                    DB::commit();
                    return response()->json(['quiz_result' => $result, 'score' => $score]);
                } else {
                    $student_course->update(['await' => true]);
                    $this->saveAnswer($input['questions'], $studentCourseId, $quizId, $exams->id);
                    DB::commit();
                    return response()->json(['message' => 'grading']);
                }
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(
                [
                    'message' => $th->getMessage(),
                ],
                400,
            );
        }
    }

    public function saveAnswer(array $answer, $studentCourseId, $quizId, $examId)
    {
        $answerRecord = StudentExamination::where([
            'student_course_id' => $studentCourseId,
            'quiz_id' => $quizId,
            'exam_id' => $examId,
            'question_id' => $answer[0]['questionID'],
        ])->first();

        if (empty($answerRecord)) {
            foreach ($answer as $item) {
                StudentExamination::create([
                    'student_course_id' => $studentCourseId,
                    'quiz_id' => $quizId,
                    'exam_id' => $examId,
                    'question_id' => $item['questionID'],
                    'answer_type' => $item['answerType'],
                    'answer' => !empty($item['answerID']) ? $item['answerID'] : "",
                    'time' => $item['time'],
                    'reviewed' => false,
                ]);
            }
        }
    }

    public function doGrade($question, array $answer, $studentCourseId, $quizId, $examId, $excises = false)
    {
        $result = [];
        $score = 0;
        $questionType = 0;
        foreach ($answer as $item) {
            $answerRecord = StudentExamination::where([
                'student_course_id' => $studentCourseId,
                'quiz_id' => $quizId,
                'exam_id' => $examId,
                'question_id' => $item['questionID'],
            ])->with('question')->first();
            if (empty($answerRecord)) {
                $_question = $question->where('id', $item['questionID'])->first();
                $_answer = $_question
                    ->questionContent()
                    ->answers->where('id', $item['answerID'])
                    ->first();

                $_answer_id_correct = false;
                if (!empty($_answer)) {
                    $_answer_id_correct = $_answer->is_correct;
                }
                array_push($result, [
                    'is_correct' => $_answer_id_correct,
                    'question' => $_question->id,
                ]);
                if ($_answer_id_correct) {
                    $score += \Constants::BASE_SCORE_MC;
                }

                $_answerRecord = StudentExamination::create([
                    'student_course_id' => $studentCourseId,
                    'quiz_id' => $quizId,
                    'exam_id' => $examId,
                    'question_id' => $item['questionID'],
                    'answer_type' => \Constants::ANSWER_MC,
                    'answer' => $item['answerID'],
                    'time' => $item['time'],
                    'reviewed' => true,
                    'score' => $_answer_id_correct ? \Constants::BASE_SCORE_MC : 0,
                ]);

                if ($questionType == 0) {
                    $_answerRecord->load('question');
                    $questionType = $_answerRecord->question->type;
                }

                $_answerRecord->update([
                    'had_update' => true,
                ]);
            } else {
                if ($excises) {
                    $_question = $question->where('id', $item['questionID'])->first();
                    $_answer = $_question
                        ->questionContent()
                        ->answers->where('id', $item['answerID'])
                        ->first();

                    $_answer_id_correct = false;
                    if (!empty($_answer)) {
                        $_answer_id_correct = $_answer->is_correct;
                    }
                    array_push($result, [
                        'is_correct' => $_answer_id_correct,
                        'question' => $_question->id,
                    ]);
                    if ($_answer_id_correct) {
                        $score += \Constants::BASE_SCORE_MC;
                    }

                    $_answerRecord = StudentExamination::where([
                        'student_course_id' => $studentCourseId,
                        'quiz_id' => $quizId,
                        'exam_id' => $examId,
                        'question_id' => $item['questionID'],
                    ])->first();

                    $_answerRecord->update([
                        'student_course_id' => $studentCourseId,
                        'quiz_id' => $quizId,
                        'exam_id' => $examId,
                        'question_id' => $item['questionID'],
                        'answer_type' => \Constants::ANSWER_MC,
                        'answer' => $item['answerID'],
                        'time' => $item['time'],
                        'reviewed' => true,
                        'score' => $_answer_id_correct ? \Constants::BASE_SCORE_MC : 0,
                    ]);

                    $_answerRecord->update([
                        'had_update' => true,
                    ]);
                } else {
                    $score += $answerRecord->score;
                    if ($questionType == 0) {
                        $answerRecord->load('question');
                        $questionType = $answerRecord->question->type;
                    }
                    array_push($result, [
                        'is_correct' => $answerRecord->score != 0 ? true : false,
                        'question' => $answerRecord->question_id,
                    ]);
                }
            }
        }

        return [$result, $score, $questionType];
    }

    public function assessment($studentCourseId, $quizId, $examId)
    {
        $answerRecords = StudentExamination::where([
            'student_course_id' => $studentCourseId,
            'quiz_id' => $quizId,
            'exam_id' => $examId,
        ])->with('question');

        $studentInfo = Auth::user()->student;

        $answerRecordsReading = clone $answerRecords;
        $answerRecordsSpeaking = clone $answerRecords;
        $answerRecordsListening = clone $answerRecords;
        $answerRecordsWriting = clone $answerRecords;

        $answerRecordsReading = $answerRecordsReading
            ->whereHas('question', function ($query) {
                return $query->where('type', '=', \Constants::COURSE_READING);
            })
            ->get();
        $answerRecordsSpeaking = $answerRecordsSpeaking
            ->whereHas('question', function ($query) {
                return $query->where('type', '=', \Constants::COURSE_SPEAKING);
            })
            ->get();
        $answerRecordsListening = $answerRecordsListening
            ->whereHas('question', function ($query) {
                return $query->where('type', '=', \Constants::COURSE_LISTENING);
            })
            ->get();
        $answerRecordsWriting = $answerRecordsWriting
            ->whereHas('question', function ($query) {
                return $query->where('type', '=', \Constants::COURSE_WRITING);
            })
            ->get();

        $scoreReading = $this->scoreGrade($answerRecordsReading, \Constants::COURSE_READING);
        $scoreWriting = $this->scoreGrade($answerRecordsWriting, \Constants::COURSE_WRITING);
        $scoreListening = $this->scoreGrade($answerRecordsListening, \Constants::COURSE_LISTENING);
        $scoreSpeaking = $this->scoreGrade($answerRecordsSpeaking, \Constants::COURSE_SPEAKING);

        $summaryScore = ($scoreReading + $scoreWriting + $scoreListening + $scoreSpeaking) / 4;

        $summaryScore = round($summaryScore * 2) / 2;

        $studentCourse = StudentCourses::find($studentCourseId);

        if ($summaryScore == 5) {
            $studentInfo->update([
                'level_read' => 5.0,
                'level_write' => 5.0,
                'level_speak' => 5.0,
                'level_listen' => 5.0,
            ]);
        } elseif ($summaryScore == 5.5) {
            $studentInfo->update([
                'level_read' => 5.5,
                'level_write' => 5.5,
                'level_speak' => 5.5,
                'level_listen' => 5.5,
            ]);
        } elseif ($summaryScore == 6) {
            $studentInfo->update([
                'level_read' => 6.0,
                'level_write' => 6.0,
                'level_speak' => 6.0,
                'level_listen' => 6.0,
            ]);
        } else {
            $studentInfo->update([
                'level_read' => 6.5,
                'level_write' => 6.5,
                'level_speak' => 6.5,
                'level_listen' => 6.5,
            ]);
        }
        $studentCourse->update([
            'watched_list' => '0,1,',
            'lecture_study' => 1,
        ]);

        return $summaryScore;
    }

    public function scoreGrade($answers, $questionType)
    {
        $correctAnswer = 0;

        foreach ($answers as $item) {
            if ($item->score != 0) {
                $correctAnswer += $item->score;
            }
        }
        switch ($questionType) {
            case \Constants::COURSE_READING:
                if ($correctAnswer < 8) {
                    return 5.0;
                } elseif ($correctAnswer > 7 && $correctAnswer < 9) {
                    return 5.5;
                } elseif ($correctAnswer > 8 && $correctAnswer < 11) {
                    return 6.0;
                } else {
                    return 6.5;
                }
            case \Constants::COURSE_WRITING:
                if ($correctAnswer < 12) {
                    return 5.0;
                } elseif ($correctAnswer > 12 && $correctAnswer < 17) {
                    return 5.5;
                } elseif ($correctAnswer > 16 && $correctAnswer < 20) {
                    return 6.0;
                } else {
                    return 6.5;
                }
            case \Constants::COURSE_LISTENING:
                if ($correctAnswer < 5) {
                    return 5.0;
                } elseif ($correctAnswer > 4 && $correctAnswer < 6) {
                    return 5.5;
                } elseif ($correctAnswer > 5 && $correctAnswer < 7) {
                    return 6.0;
                } else {
                    return 6.5;
                }
            case \Constants::COURSE_SPEAKING:
                if ($correctAnswer < 15) {
                    return 5.0;
                } elseif ($correctAnswer > 14 && $correctAnswer < 18) {
                    return 5.5;
                } elseif ($correctAnswer > 17 && $correctAnswer < 22) {
                    return 6.0;
                } else {
                    return 6.5;
                }
            default:
                return null;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentExamination  $studentExamination
     * @return \Illuminate\Http\Response
     */
    public function show(StudentExamination $studentExamination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentExamination  $studentExamination
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentExamination $studentExamination)
    {
        return view('admin.student-examination.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentExamination  $studentExamination
     * @return \Illuminate\Http\Response
     */
    public function comment(Request $request, StudentExamination $studentExam)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            $studentExam->load(['quiz', 'question', 'studentCourse', 'quiz.studentExaminations', 'quiz.questions']);
            $studentExam->update([
                'comment' => $input['comment'],
                'reviewed' => true,
                'score' => $input['score'],
                'had_update' => true,
            ]);
            $student_course = $studentExam->studentCourse;

            $routeRelate = route('site.showExam', [
                'course' => $studentExam->student_course_id,
                'exam' => $studentExam->exam_id,
                'quiz' => $studentExam->quiz_id
            ]);
            if ($studentExam->answer_type === \Constants::ANSWER_TEXT) {
                $content_noti = 'Result for writing part';
            } elseif ($studentExam->answer_type === \Constants::ANSWER_VIDEO) {
                $content_noti = 'Result for speaking part';
            }
            $noti = new Notification();

            $noti->createNotify(
                $student_course->student_id,
                trans('keywords.hasCommentsForExam'),
                $content_noti,
                $routeRelate
            );
            $noti->saveNotify();

            // $allQuestions = count($studentExam->quiz->studentExaminations);
            $allQuestions = $studentExam->question->type === \Constants::COURSE_WRITING ? 2 : 6;

            if (count($studentExam->quiz->questions) === $allQuestions) {
                $answersSubmit = $studentExam->quiz->studentExaminations;

                $scoreAvg = 0;
                foreach ($answersSubmit as $answer) {
                    $scoreAvg += $answer->score;
                }
                $allQuestions = round($scoreAvg / $allQuestions);
                $studentInfo = User::find($student_course->student_id)->student;

                if ((int) $allQuestions >= \Constants::BASE_SCORE_PASS) {
                    $this->upLevel($studentInfo, $student_course, $studentExam->question->type);
                    $student_course->update(['await' => false]);
                } else {
                    $this->resetLevel($studentInfo, $student_course, $studentExam->question->type);
                    $student_course->update(['await' => false]);
                }
            }

            DB::commit();
            return response()->json(['message' => 'success']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['message' => $th->getMessage()]);
        }
    }

    public function resetLevel($studentInfo, $student_course, $type)
    {
        switch ($type) {
            case \Constants::COURSE_READING:
                if (empty($student_course->set_exam)) {
                    $student_course->update(['set_exam' => 1]);
                }
                if ($student_course->set_exam < 4) {
                    $student_course->update(['set_exam' => $student_course->set_exam + 1]);
                } else {
                    if ($studentInfo->exam_buy_read) {
                        $studentInfo->update(['exam_buy_read' => null]);
                        $student_course->update(['failed' => Carbon::parse(time())->format('Y-m-d H:i:s'), 'set_exam' => 1]);
                    } else {
                        $student_course->update(['set_exam' => 1]);
                    }
                }
                break;
            case \Constants::COURSE_WRITING:
                if (empty($student_course->set_exam)) {
                    $student_course->update(['set_exam' => 1]);
                }
                if ($student_course->set_exam < 4) {
                    $student_course->update(['set_exam' => $student_course->set_exam + 1]);
                } else {
                    if ($studentInfo->exam_buy_write) {
                        $studentInfo->update(['exam_buy_write' => null]);
                        $student_course->update(['failed' => Carbon::parse(time())->format('Y-m-d H:i:s'), 'set_exam' => 1]);
                    } else {
                        $student_course->update(['set_exam' => 1]);
                    }
                }
                break;
            case \Constants::COURSE_LISTENING:
                if (empty($student_course->set_exam)) {
                    $student_course->update(['set_exam' => 1]);
                }
                if ($student_course->set_exam < 4) {
                    $student_course->update(['set_exam' => $student_course->set_exam + 1]);
                } else {
                    if ($studentInfo->exam_buy_listen) {
                        $studentInfo->update(['exam_buy_listen' => null]);
                        $student_course->update(['failed' => Carbon::parse(time())->format('Y-m-d H:i:s'), 'set_exam' => 1]);
                    } else {
                        $student_course->update(['set_exam' => 1]);
                    }
                }
                break;
            case \Constants::COURSE_SPEAKING:
                if (empty($student_course->set_exam)) {
                    $student_course->update(['set_exam' => 1]);
                }
                if ($student_course->set_exam < 4) {
                    $student_course->update(['set_exam' => $student_course->set_exam + 1]);
                } else {
                    if ($studentInfo->exam_buy_speak) {
                        $studentInfo->update(['exam_buy_speak' => null]);
                        $student_course->update(['failed' => Carbon::parse(time())->format('Y-m-d H:i:s'), 'set_exam' => 1]);
                    } else {
                        $student_course->update(['set_exam' => 1]);
                    }
                }
                break;
            default:
                // code...
                break;
        }
    }

    public function upLevel($studentInfo, $student_course, $type)
    {
        switch ($type) {
            case \Constants::COURSE_READING:
                if ($studentInfo->exam_buy_read) {
                    $studentInfo->update(['level_read' => $studentInfo->exam_buy_read + 0.5]);
                } else {
                    $studentInfo->update(['level_read' => $studentInfo->level_read + 0.5]);
                }
                $studentInfo->update(['exam_buy_read' => null]);
                break;
            case \Constants::COURSE_WRITING:
                if ($studentInfo->exam_buy_write) {
                    $studentInfo->update(['level_write' => $studentInfo->exam_buy_write + 0.5]);
                } else {
                    $studentInfo->update(['level_write' => $studentInfo->level_write + 0.5]);
                }
                $studentInfo->update(['exam_buy_write' => null]);
                break;
            case \Constants::COURSE_LISTENING:
                if ($studentInfo->exam_buy_listen) {
                    $studentInfo->update(['level_listen' => $studentInfo->exam_buy_listen + 0.5]);
                } else {
                    $studentInfo->update(['level_listen' => $studentInfo->level_listen + 0.5]);
                }
                $studentInfo->update(['exam_buy_listen' => null]);
                break;
            case \Constants::COURSE_SPEAKING:
                if ($studentInfo->exam_buy_speak) {
                    $studentInfo->update(['level_speak' => $studentInfo->exam_buy_speak + 0.5]);
                } else {
                    $studentInfo->update(['level_speak' => $studentInfo->level_speak + 0.5]);
                }
                $studentInfo->update(['exam_buy_speak' => null]);
                break;
            default:
                // code...
                break;
        }
        $student_course->update(['passed' => true]);
    }

    public function viewedExam(StudentExamination $studentExam)
    {
        $studentExam->update(['had_update' => false]);
        return redirect(route('site.showExam', ['course' => $studentExam->student_course_id, 'exam' => $studentExam->exam_id, 'quiz' => $studentExam->quiz_id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentExamination  $studentExamination
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentExamination $studentExamination)
    {
        //
    }
}
