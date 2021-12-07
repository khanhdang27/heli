<?php

namespace App\Http\Controllers;

use App\Models\AudioListen;
use App\Models\Examination;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\StudentCourses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course)
    {
        return view('admin.course.examination.create', [
            'course' => $course,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            $exam = Examination::create([
                'course_id' => $course->id,
                'name' => $input['name'],
                'index' => $input['index'],
                'type' => $input['type'],
            ]);

            for ($i = 1; $i <= 4; $i++) {
                Quiz::create([
                    'exam_id' => $exam->id,
                    'set' => $i,
                ]);
            }
            DB::commit();
            return redirect()
                ->route('admin.course.examination.edit', ['course' => $course->id, 'exam' => $exam->id])
                ->with('success', 'Create success!');
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->withErrors('errors', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Examination  $exams
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course, Examination $exams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Examination  $exams
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course, Examination $exam)
    {
        $quizzes = Quiz::where('exam_id', $exam->id)->get();
        $questions_set = [];
        foreach ($quizzes as $quiz) {
            array_push($questions_set, Question::where('quiz_id', $quiz->id)->get());
        }
        return view('admin.course.examination.edit', [
            'course' => $course,
            'exam' => $exam,
            'quizzes' => $quizzes,
            'questions_set' => $questions_set,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Examination  $exams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course, Examination $exam)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            $exam->update([
                'course_id' => $course->id,
                'name' => $input['name'],
                'index' => $input['index'],
                'type' => $input['type'],
                // 'level' => $input['level'],
            ]);

            DB::commit();
            return back()->with('success', 'Update success!');
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->withErrors('errors', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Examination  $exams
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course, Examination $exam)
    {
        try {
            $exam->delete();
            return response([
                'message' => 'Delete success!',
            ]);
        } catch (\Exception $exception) {
            return response(
                [
                    'message' => 'Cannot delete course',
                ],
                400,
            );
        }
    }

    public function getReadingAssessmentQuestionsClient(Examination $exams)
    {
        $exams->load([
            'quiz.questions' => function ($query) {
                $query->where('type', '=', \Constants::COURSE_READING)->inRandomOrder()->limit(13);
            },
            'quiz.questions.readingQuestion',
            'quiz.questions.readingQuestion.answers' => function ($query) {
                $query->inRandomOrder();
            },
            'quiz.passage',
        ]);

        $questions = $exams->quiz[0]->questions;
        $passages = $exams->quiz[0]->passage;

        DB::commit();
        return response()->json(['questions' => $questions, 'passages' => $passages]);
    }
    public function getReadingExerciseQuestionsClient(Examination $exams)
    {
        DB::beginTransaction();
        try {
            $student_course = StudentCourses::where([
                'student_id' => Auth::user()->id,
                'course_id' => $exams->course_id,
            ])->first();
            $set = $student_course->set_exam ?? 1;
            $exams->load([
                'quiz' => function ($query) use ($set) {
                    $query->where('set', '=', $set);
                },
                'quiz.questions' => function ($query) {
                    $query->where('type', '=', \Constants::COURSE_READING)->inRandomOrder()->limit(13);
                },
                'quiz.questions.readingQuestion',
                'quiz.questions.readingQuestion.answers' => function ($query) {
                    $query->inRandomOrder();
                },
                'quiz.passage',
            ]);
            $questions = $exams->quiz[0]->questions;
            $passages = $exams->quiz[0]->passage;

            DB::commit();
            return response()->json(['questions' => $questions, 'passages' => $passages]);
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

    public function getReadingQuizQuestionsClient(Examination $exams)
    {
        DB::beginTransaction();
        try {
            $student_course = StudentCourses::where([
                'student_id' => Auth::user()->id,
                'course_id' => $exams->course_id,
            ])->first();
            $set = $student_course->set_exam ?? 1;
            $exams->load([
                'quiz' => function ($query) use ($set) {
                    $query->where('set', '=', $set);
                },
                'quiz.questions' => function ($query) {
                    $query->where('type', '=', \Constants::COURSE_READING)->inRandomOrder()->limit(13);
                },
                'quiz.questions.readingQuestion',
                'quiz.questions.readingQuestion.answers' => function ($query) {
                    $query->inRandomOrder();
                },
                'quiz.passage',
            ]);
            $questions = $exams->quiz[0]->questions;
            $passages = $exams->quiz[0]->passage;

            DB::commit();
            return response()->json(['questions' => $questions, 'passages' => $passages]);
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

    public function getWritingAssessmentQuestionsClient(Examination $exams)
    {
        $exams->load([
            'quiz.questions' => function ($query) {
                $query->where('type', '=', \Constants::COURSE_WRITING)->inRandomOrder()->limit(27);
            },
            'quiz.questions.writingAssessmentQuestion',
            'quiz.questions.writingAssessmentQuestion.answers' => function ($query) {
                $query->inRandomOrder();
            },
        ]);
        $questions = $exams->quiz[0]->questions;
        return response()->json(['questions' => $questions]);
    }

    public function getWritingExerciseQuestionsClient(Examination $exams)
    {
        DB::beginTransaction();
        try {
            $student_course = StudentCourses::where([
                'student_id' => Auth::user()->id,
                'course_id' => $exams->course_id,
            ])->first();
            $set = $student_course->set_exam ?? 1;
            $exams->load([
                'quiz' => function ($query) use ($set) {
                    $query->where('set', '=', $set);
                },
                'quiz.questions' => function ($query) {
                    $query->where('type', '=', \Constants::COURSE_WRITING)->inRandomOrder()->limit(27);
                },
                'quiz.questions.writingAssessmentQuestion',
                'quiz.questions.writingAssessmentQuestion.answers' => function ($query) {
                    $query->inRandomOrder();
                },
            ]);
            $questions = $exams->quiz[0]->questions;
            DB::commit();
            return response()->json(['questions' => $questions]);
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

    public function getWritingQuizQuestionsClient(Examination $exams)
    {
        DB::beginTransaction();
        try {
            $student_course = StudentCourses::where([
                'student_id' => Auth::user()->id,
                'course_id' => $exams->course_id,
            ])->first();
            $set = $student_course->set_exam ?? 1;
            $exam_1 = clone $exams;
            $exam_2 = clone $exams;
            $part_1 = $exam_1->load([
                'quiz' => function ($query) use ($set) {
                    $query->where('set', '=', $set);
                },
                'quiz.questions.writingQuizQuestion' => function ($query) {
                    $query->where('part', \Constants::QUESTION_PART_1);
                },
                'quiz.questions' => function ($query) {
                    $query->where('type', '=', \Constants::COURSE_WRITING)->inRandomOrder();
                },
                'quiz.questions.writingQuizQuestion.picture',
            ]);
            $part_2 = $exam_2->load([
                'quiz' => function ($query) use ($set) {
                    $query->where('set', '=', $set);
                },
                'quiz.questions.writingQuizQuestion' => function ($query) {
                    $query->where('part', \Constants::QUESTION_PART_2);
                },
                'quiz.questions' => function ($query) {
                    $query->where('type', '=', \Constants::COURSE_WRITING)->inRandomOrder();
                },
            ]);

            $part_1->quiz[0]->questions = $part_1->quiz[0]->questions->whereNotNull('writingQuizQuestion')->take(1);
            $part_2->quiz[0]->questions = $part_2->quiz[0]->questions->whereNotNull('writingQuizQuestion')->take(1);

            $questions = $part_1->quiz[0]->questions->concat($part_2->quiz[0]->questions);
            $questions = $questions->whereNotNull('writingQuizQuestion')->all();
            DB::commit();
            return response()->json(['questions' => $questions]);
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

    public function getListeningAssessmentQuestionsClient(Examination $exams)
    {
        $exam_1 = clone $exams;
        $exam_2 = clone $exams;
        $part_1 = $exam_1->load([
            'quiz.questions.listenAssessmentQuestion' => function ($query) {
                $query->where('part', '=', \Constants::QUESTION_PART_1);
            },
            'quiz.questions' => function ($query) {
                $query->where('type', '=', \Constants::COURSE_LISTENING)->inRandomOrder();
            },
            'quiz.questions.listenAssessmentQuestion.answers' => function ($query) {
                $query->inRandomOrder();
            },
        ]);
        $part_2 = $exam_2->load([
            'quiz.questions.listenAssessmentQuestion' => function ($query) {
                $query->where('part', '=', \Constants::QUESTION_PART_2);
            },
            'quiz.questions' => function ($query) {
                $query->where('type', '=', \Constants::COURSE_LISTENING)->inRandomOrder();
            },
            'quiz.questions.listenAssessmentQuestion.answers' => function ($query) {
                $query->inRandomOrder();
            },
        ]);

        $part_1->quiz[0]->questions = $part_1->quiz[0]->questions->whereNotNull('listenAssessmentQuestion')->take(5);
        $part_2->quiz[0]->questions = $part_2->quiz[0]->questions->whereNotNull('listenAssessmentQuestion')->take(5);

        $questions = $part_1->quiz[0]->questions->concat($part_2->quiz[0]->questions);
        $questions = $questions->whereNotNull('listenAssessmentQuestion')->all();
        $audioCodes = AudioListen::where('quiz_id', '=', $part_1->quiz[0]->id)->get();
        return response()->json(['questions' => $questions, 'audioCodes' => $audioCodes]);
    }

    public function getListeningExerciseQuestionsClient(Examination $exams)
    {
        DB::beginTransaction();
        try {
            $student_course = StudentCourses::where([
                'student_id' => Auth::user()->id,
                'course_id' => $exams->course_id,
            ])->first();
            $set = $student_course->set_exam ?? 1;

            DB::enableQueryLog();
            $exam_1 = clone $exams;
            $exam_2 = clone $exams;
            $part_1 = $exam_1->load([
                'quiz' => function ($query) use ($set) {
                    $query->where('set', '=', $set);
                },
                'quiz.questions.listenAssessmentQuestion' => function ($query) {
                    $query->where('part', \Constants::QUESTION_PART_1);
                },
                'quiz.questions' => function ($query) {
                    $query->where('type', '=', \Constants::COURSE_LISTENING)->inRandomOrder();
                },
                'quiz.questions.listenAssessmentQuestion.answers' => function ($query) {
                    $query->inRandomOrder();
                },
            ]);

            $part_2 = $exam_2->load([
                'quiz' => function ($query) use ($set) {
                    $query->where('set', '=', $set);
                },
                'quiz.questions.listenAssessmentQuestion' => function ($query) {
                    $query->where('part', \Constants::QUESTION_PART_2);
                },
                'quiz.questions' => function ($query) {
                    $query->where('type', '=', \Constants::COURSE_LISTENING)->inRandomOrder();
                },
                'quiz.questions.listenAssessmentQuestion.answers' => function ($query) {
                    $query->inRandomOrder();
                },
            ]);

            $part_1->quiz[0]->questions = $part_1->quiz[0]->questions->whereNotNull('listenAssessmentQuestion')->take(5);
            $part_2->quiz[0]->questions = $part_2->quiz[0]->questions->whereNotNull('listenAssessmentQuestion')->take(5);

            $questions = $part_1->quiz[0]->questions->concat($part_2->quiz[0]->questions);
            $questions = $questions->whereNotNull('listenAssessmentQuestion')->all();
            $audioCodes = AudioListen::where('quiz_id', '=', $part_1->quiz[0]->id)->get();
            DB::commit();
            return response()->json(['questions' => $questions, 'audioCodes' => $audioCodes]);
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

    public function getListeningQuizQuestionsClient(Examination $exams)
    {
        DB::beginTransaction();
        try {
            $student_course = StudentCourses::where([
                'student_id' => Auth::user()->id,
                'course_id' => $exams->course_id,
            ])->first();
            $set = $student_course->set_exam ?? 1;

            DB::enableQueryLog();

            $exam_1 = clone $exams;
            $exam_2 = clone $exams;
            $part_1 = $exam_1->load([
                'quiz' => function ($query) use ($set) {
                    $query->where('set', '=', $set);
                },
                'quiz.questions.listenAssessmentQuestion' => function ($query) {
                    $query->where('part', \Constants::QUESTION_PART_1);
                },
                'quiz.questions' => function ($query) {
                    $query->where('type', '=', \Constants::COURSE_LISTENING)->inRandomOrder();
                },
                'quiz.questions.listenAssessmentQuestion.answers' => function ($query) {
                    $query->inRandomOrder();
                },
            ]);
            $part_2 = $exam_2->load([
                'quiz' => function ($query) use ($set) {
                    $query->where('set', '=', $set);
                },
                'quiz.questions.listenAssessmentQuestion' => function ($query) {
                    $query->where('part', \Constants::QUESTION_PART_2);
                },
                'quiz.questions' => function ($query) {
                    $query->where('type', '=', \Constants::COURSE_LISTENING)->inRandomOrder();
                },
                'quiz.questions.listenAssessmentQuestion.answers' => function ($query) {
                    $query->inRandomOrder();
                },
            ]);

            $part_1->quiz[0]->questions = $part_1->quiz[0]->questions->whereNotNull('listenAssessmentQuestion')->take(5);
            $part_2->quiz[0]->questions = $part_2->quiz[0]->questions->whereNotNull('listenAssessmentQuestion')->take(5);

            $questions = $part_1->quiz[0]->questions->concat($part_2->quiz[0]->questions);
            $questions = $questions->whereNotNull('listenAssessmentQuestion')->all();
            $audioCodes = AudioListen::where('quiz_id', '=', $part_1->quiz[0]->id)->get();

            DB::commit();
            return response()->json(['questions' => $questions, 'audioCodes' => $audioCodes]);
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

    public function getSpeakingAssessmentQuestionsClient(Examination $exams)
    {
        $exams->load([
            'quiz.questions' => function ($query) {
                $query->where('type', '=', \Constants::COURSE_SPEAKING)->inRandomOrder()->limit(30);
            },
            'quiz.questions.speakAssessmentQuestion',
            'quiz.questions.speakAssessmentQuestion.answers' => function ($query) {
                $query->inRandomOrder();
            },
        ]);
        $questions = $exams->quiz[0]->questions;
        return response()->json(['questions' => $questions]);
    }

    public function getSpeakingExerciseQuestionsClient(Examination $exams)
    {
        DB::beginTransaction();
        try {
            $student_course = StudentCourses::where([
                'student_id' => Auth::user()->id,
                'course_id' => $exams->course_id,
            ])->first();
            $set = $student_course->set_exam ?? 1;
            $exams->load([
                'quiz' => function ($query) use ($set) {
                    $query->where('set', '=', $set);
                },
                'quiz.questions' => function ($query) {
                    $query->where('type', '=', \Constants::COURSE_SPEAKING);
                },
                'quiz.questions.speakExercisesQuestion',
            ]);
            $questions = $exams->quiz[0]->questions;
            DB::commit();
            return response()->json(['questions' => $questions]);
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

    public function getSpeakingQuizQuestionsClient(Examination $exams)
    {
        DB::beginTransaction();
        try {
            $student_course = StudentCourses::where([
                'student_id' => Auth::user()->id,
                'course_id' => $exams->course_id,
            ])->first();
            $set = $student_course->set_exam ?? 1;

            $exam_1 = clone $exams;
            $exam_2 = clone $exams;
            $short = $exam_1->load([
                'quiz' => function ($query) use ($set) {
                    $query->where('set', '=', $set);
                },
                'quiz.questions.speakQuizQuestion' => function ($query) {
                    $query->where('long_answer', '=', false);
                },
                'quiz.questions' => function ($query) {
                    $query->where('type', '=', \Constants::COURSE_SPEAKING)->inRandomOrder();
                },
            ]);
            $long = $exam_2->load([
                'quiz' => function ($query) use ($set) {
                    $query->where('set', '=', $set);
                },
                'quiz.questions.speakQuizQuestion' => function ($query) {
                    $query->where('long_answer', '=', true);
                },
                'quiz.questions' => function ($query) {
                    $query->where('type', '=', \Constants::COURSE_SPEAKING)->inRandomOrder();
                },
            ]);


            $short->quiz[0]->questions = $short->quiz[0]->questions->whereNotNull('speakQuizQuestion')->take(5);
            $long->quiz[0]->questions = $long->quiz[0]->questions->whereNotNull('speakQuizQuestion')->take(1);

            $questions = $short->quiz[0]->questions->concat($long->quiz[0]->questions);
            $questions = $questions->whereNotNull('speakQuizQuestion')->all();
            DB::commit();
            return response()->json(['questions' => $questions]);
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

    public function getExaminationAssessment(Request $request)
    {
        $quiz = Quiz::where('exam_id', 1)->first();
        $questions = Question::where('quiz_id', $quiz->id)->get();
        return view('admin.assessment-manage.index', [
            'quiz' => $quiz,
            'questions' => $questions,
        ]);
    }
}
