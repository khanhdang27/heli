<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Examination;
use App\Models\Question;
use App\Models\StudentCourses;
use App\Models\Quiz;
use App\Models\StudentExamination;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $exam_details = StudentExamination::select('student_id', 'course_id', 'exam_id', 'quiz_id', 'reviewed')
            ->distinct()
            ->orderBy('reviewed')
            ->paginate(15);
        return view('admin.student-examination.index', [
            'exam_details' => $exam_details,
        ]);
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
            return back()->withErrors('Create error');
        }
    }

    public function grade(User $student, Course $course, Examination $exam, Quiz $quiz)
    {
        $exam_details = StudentExamination::where([
            'student_id' => $student->id,
            'course_id' => $course->id,
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
                case Question::READING:
                    $reading += $detail->time;
                    break;

                case Question::WRITING:
                    $writing += $detail->time;
                    break;

                case Question::LISTENING:
                    $listening += $detail->time;
                    break;

                case Question::SPEAKING:
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

    public function handleGrade(Request $request, User $student, Course $course, Examination $exam, Quiz $quiz)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            $exam_details = StudentExamination::where([
                'student_id' => $student->id,
                'course_id' => $course->id,
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
            return back()->withErrors('Create error');
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

            $quiz = Quiz::find($quizId)->load('question');
            if ($exams->type == Examination::ASSESSMENT) {
                [$result, $score, $_] = $this->doGrade($quiz->question, $input['questions'], $courseId, $quizId, $exams->id);

                $question = Question::find($input['questions'][0]['questionID']);
                if ($question->type == Question::SPEAKING) {
                    $scoreGrade = $this->assessment($courseId, $quizId, $exams->id);
                    DB::commit();
                    return response()->json(['passgrade' => $scoreGrade]);
                }
                DB::commit();
                return response()->json(['quiz_result' => $result, 'score' => $score]);
            }
            elseif ($exams->type == Examination::EXERCISES) {
                if ($input['questions'][0]['answerType'] == StudentExamination::ANSWER_MC) {
                    [$result, $score,  $_] = $this->doGrade($quiz->question, $input['questions'], $courseId, $quizId, $exams->id);
                    DB::commit();
                    return response()->json(['quiz_result' => $result, 'score' => $score]);
                } else {
                    $this->saveAnswer($input['questions'], $courseId, $quizId, $exams->id);
                    DB::commit();
                    return response()->json(['message' => 'grading']);
                }
            }
            else {
                // Quiz Type
                if ($input['questions'][0]['answerType'] == StudentExamination::ANSWER_MC) {
                    [$result, $score, $questionType] = $this->doGrade($quiz->question, $input['questions'], $courseId, $quizId, $exams->id);

                    if ($score / count($result) > 0.8) {
                        $this->upLevel($student_course, $questionType);
                    } else {
                        $this->resetLevel($student_course, $questionType);
                    }
                    DB::commit();
                    return response()->json(['quiz_result' => $result, 'score' => $score]);
                } else {
                    $this->saveAnswer($input['questions'], $courseId, $quizId, $exams->id);
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

    public function saveAnswer(array $answer, $courseId, $quizId, $examId)
    {
        $answerRecord = StudentExamination::where([
            'student_id' => Auth::user()->id,
            'course_id' => $courseId,
            'quiz_id' => $quizId,
            'exam_id' => $examId,
            'question_id' => $answer[0]['questionID'],
        ])->first();

        if (empty($answerRecord)) {
            foreach ($answer as $item) {
                StudentExamination::create([
                    'student_id' => Auth::user()->id,
                    'course_id' => $courseId,
                    'quiz_id' => $quizId,
                    'exam_id' => $examId,
                    'question_id' => $item['questionID'],
                    'answer_type' => $item['answerType'],
                    'answer' => $item['answerID'],
                    'time' => $item['time'],
                    'reviewed' => false,
                ]);
            }
        }
    }

    public function doGrade($question, array $answer, $courseId, $quizId, $examId)
    {
        $result = [];
        $score = 0;
        $questionType = 0;
        foreach ($answer as $item) {
            $answerRecord = StudentExamination::where([
                'student_id' => Auth::user()->id,
                'course_id' => $courseId,
                'quiz_id' => $quizId,
                'exam_id' => $examId,
                'question_id' => $item['questionID'],
            ])->first();
            if (empty($answerRecord)) {
                $_question = $question->where('id', $item['questionID'])->first();
                $_answer = $_question
                    ->questionContent()
                    ->answers->where('id', $item['answerID'])
                    ->first();

                array_push($result, [
                    'is_correct' => $_answer->is_correct,
                    'question' => $_question->id,
                ]);

                if ($_answer->is_correct) {
                    $score += Examination::BASE_SCORE_MC;
                }

                $_answerRecord = StudentExamination::create([
                    'student_id' => Auth::user()->id,
                    'course_id' => $courseId,
                    'quiz_id' => $quizId,
                    'exam_id' => $examId,
                    'question_id' => $item['questionID'],
                    'answer_type' => StudentExamination::ANSWER_MC,
                    'answer' => $item['answerID'],
                    'time' => $item['time'],
                    'reviewed' => true,
                    'score' => $_answer->is_correct ? Examination::BASE_SCORE_MC : 0,
                ]);

                if ( $questionType == 0) {
                    $_answerRecord->load('question');
                    $questionType = $_answerRecord->question->type;
                }

                $_answerRecord->update([
                    'had_update' => true,
                ]);
            } else {
                $score += $answerRecord->score;
                array_push($result, [
                    'is_correct' => $answerRecord->score != 0 ? true : false,
                    'question' => $answerRecord->question_id,
                ]);
            }
        }

        return [$result, $score, $questionType];
    }

    public function assessment($courseId, $quizId, $examId)
    {
        $answerRecords = StudentExamination::where([
            'student_id' => Auth::user()->id,
            'course_id' => $courseId,
            'quiz_id' => $quizId,
            'exam_id' => $examId,
        ])->with('question');

        $answerRecordsReading = clone $answerRecords;
        $answerRecordsSpeaking = clone $answerRecords;
        $answerRecordsListening = clone $answerRecords;
        $answerRecordsWriting = clone $answerRecords;

        $answerRecordsReading = $answerRecordsReading
            ->whereHas('question', function ($query) {
                return $query->where('type', '=', Question::READING);
            })
            ->get();
        $answerRecordsSpeaking = $answerRecordsSpeaking
            ->whereHas('question', function ($query) {
                return $query->where('type', '=', Question::SPEAKING);
            })
            ->get();
        $answerRecordsListening = $answerRecordsListening
            ->whereHas('question', function ($query) {
                return $query->where('type', '=', Question::LISTENING);
            })
            ->get();
        $answerRecordsWriting = $answerRecordsWriting
            ->whereHas('question', function ($query) {
                return $query->where('type', '=', Question::WRITING);
            })
            ->get();

        $scoreReading = $this->scoreGrade($answerRecordsReading, Question::READING);
        $scoreWriting = $this->scoreGrade($answerRecordsWriting, Question::WRITING);
        $scoreListening = $this->scoreGrade($answerRecordsListening, Question::LISTENING);
        $scoreSpeaking = $this->scoreGrade($answerRecordsSpeaking, Question::SPEAKING);

        $summaryScore = ($scoreReading + $scoreWriting + $scoreListening + $scoreSpeaking) / 4;

        $summaryScore = round($summaryScore * 2) / 2;

        $studentCourse = StudentCourses::where([
            'course_id' => $courseId,
            'student_id' => Auth::user()->id,
        ]);

        if ($summaryScore == 5) {
            $studentCourse->update([
                'watched_list' => '0,1,',
                'level_read' => 5.0,
                'level_write' => 5.0,
                'level_speak' => 5.0,
                'level_listen' => 5.0,
            ]);
        } elseif ($summaryScore == 5.5) {
            $studentCourse->update([
                'watched_list' => '0,1,',
                'level_read' => 5.5,
                'level_write' => 5.5,
                'level_speak' => 5.5,
                'level_listen' => 5.5,
            ]);
        } elseif ($summaryScore == 6) {
            $studentCourse->update([
                'watched_list' => '0,1,',
                'level_read' => 6.0,
                'level_write' => 6.0,
                'level_speak' => 6.0,
                'level_listen' => 6.0,
            ]);
        } else {
            $studentCourse->update([
                'watched_list' => '0,1,',
                'level_read' => 6.5,
                'level_write' => 6.5,
                'level_speak' => 6.5,
                'level_listen' => 6.5,
            ]);
        }
        $studentCourse->update([
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
            case Question::READING:
                if ($correctAnswer < 8) {
                    return 5.0;
                } elseif ($correctAnswer > 7 && $correctAnswer < 9) {
                    return 5.5;
                } elseif ($correctAnswer > 8 && $correctAnswer < 11) {
                    return 6.0;
                } else {
                    return 6.5;
                }
            case Question::WRITING:
                if ($correctAnswer < 12) {
                    return 5.0;
                } elseif ($correctAnswer > 12 && $correctAnswer < 17) {
                    return 5.5;
                } elseif ($correctAnswer > 16 && $correctAnswer < 20) {
                    return 6.0;
                } else {
                    return 6.5;
                }
            case Question::LISTENING:
                if ($correctAnswer < 5) {
                    return 5.0;
                } elseif ($correctAnswer > 4 && $correctAnswer < 6) {
                    return 5.5;
                } elseif ($correctAnswer > 5 && $correctAnswer < 7) {
                    return 6.0;
                } else {
                    return 6.5;
                }
            case Question::SPEAKING:
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
            $studentExam->load('question');
            $studentExam->update([
                'comment' => $input['comment'],
                'reviewed' => true,
                'score' => $input['score'],
                'had_update' => true,
            ]);
            $student_course = StudentCourses::where([
                'student_id' => $studentExam->student_id,
                'course_id' => $studentExam->course_id,
            ])->first();
            if ((int) $input['score'] >= StudentExamination::BASE_SCORE_PASS) {
                $this->upLevel($student_course, $studentExam->question->type);
            } else {
                $this->resetLevel($student_course, $studentExam->question->type);
            }

            DB::commit();
            return response()->json(['message' => 'success']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['message' => 'error']);
        }
    }

    public function resetLevel($student_course, $type)
    {
        switch ($type) {
            case Question::READING:
                if (empty($student_course->set_exam_read) && $student_course->set_exam_read < 4) {
                    $student_course->update(['set_exam_read' => $student_course->set_exam_read + 1]);
                } else {
                    if ($student_course->exam_buy_read) {
                        $student_course->update(['set_exam_read' => 1, 'exam_buy_read' => null]);
                    } else {
                        $student_course->update(['set_exam_read' => 1]);
                    }
                }
                break;
            case Question::WRITING:
                if (empty($student_course->set_exam_write) && $student_course->set_exam_write <= 4) {
                    $student_course->update(['set_exam_write' => $student_course->set_exam_write + 1]);
                } else {
                    if ($student_course->exam_buy_read) {
                        $student_course->update(['set_exam_write' => 1, 'exam_buy_write' => null]);
                    } else {
                        $student_course->update(['set_exam_write' => 1]);
                    }
                }
                break;
            case Question::LISTENING:
                if (empty($student_course->set_exam_listen) && $student_course->set_exam_listen <= 4) {
                    $student_course->update(['set_exam_listen' => $student_course->set_exam_listen + 1]);
                } else {
                    if ($student_course->exam_buy_read) {
                        $student_course->update(['set_exam_listen' => 1, 'exam_buy_listen' => null]);
                    } else {
                        $student_course->update(['set_exam_listen' => 1]);
                    }
                }
                break;
            case Question::SPEAKING:
                if (empty($student_course->set_exam_speak) && $student_course->set_exam_speak <= 4) {
                    $student_course->update(['set_exam_speak' => $student_course->set_exam_speak + 1]);
                } else {
                    if ($student_course->exam_buy_read) {
                        $student_course->update(['set_exam_speak' => 1, 'exam_buy_speak' => null]);
                    } else {
                        $student_course->update(['set_exam_speak' => 1]);
                    }
                }
                break;
            default:
                // code...
                break;
        }
    }

    public function upLevel($student_course, $type)
    {
        switch ($type) {
            case Question::READING:
                if ($student_course->exam_buy_read) {
                    $student_course->update(['level_read' => $student_course->exam_buy_read + 0.5]);
                } else {
                    $student_course->update(['level_read' => $student_course->level_read + 0.5]);
                }
                $student_course->update(['exam_buy_read' => null]);
                break;
            case Question::WRITING:
                if ($student_course->exam_buy_write) {
                    $student_course->update(['level_write' => $student_course->exam_buy_write + 0.5]);
                } else {
                    $student_course->update(['level_write' => $student_course->level_write + 0.5]);
                }
                $student_course->update(['exam_buy_write' => null]);
                break;
            case Question::LISTENING:
                if ($student_course->exam_buy_listen) {
                    $student_course->update(['level_listen' => $student_course->exam_buy_listen + 0.5]);
                } else {
                    $student_course->update(['level_listen' => $student_course->level_listen + 0.5]);
                }
                $student_course->update(['exam_buy_listen' => null]);
                break;
            case Question::SPEAKING:
                if ($student_course->exam_buy_speak) {
                    $student_course->update(['level_speak' => $student_course->exam_buy_speak + 0.5]);
                } else {
                    $student_course->update(['level_speak' => $student_course->level_speak + 0.5]);
                }
                $student_course->update(['exam_buy_speak' => null]);
                break;

            default:
                // code...
                break;
        }
    }

    public function viewedExam(StudentExamination $studentExam)
    {
        $studentExam->update(['had_update' => false]);
        return redirect(route('site.showExam', ['course' => $studentExam->course_id, 'exam' => $studentExam->exam_id, 'quiz' => $studentExam->quiz_id]));
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
