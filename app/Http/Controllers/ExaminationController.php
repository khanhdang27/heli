<?php

namespace App\Http\Controllers;

use App\Models\AudioListen;
use App\Models\Examination;
use App\Models\Passage;
use App\Models\ReadingQuestion;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\PassGrade;
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
                'level' => $input['level'],
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
            return back()->withErrors('errors', 'Create errors!');
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
                'level' => $input['level'],
            ]);

            DB::commit();
            return back()->with('success', 'Update success!');
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->withErrors('errors', 'Update errors!');
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
            'quiz.question' => function ($query) {
                $query->where('type', '=', Question::READING);
            },
            'quiz.question.readingQuestion',
            'quiz.question.readingQuestion.answers',
            'quiz.passage',
        ]);
        $questions = $exams->quiz[0];
        return response()->json(['questions' => $questions]);
    }
    public function getReadingExerciseQuestionsClient(Examination $exams)
    {
        $exams->load([
            'quiz.question' => function ($query) {
                $query->where('type', '=', Question::READING);
            },
            'quiz.question.readingQuestion',
            'quiz.question.readingQuestion.answers',
            'quiz.passage',
        ]);
        $questions = $exams->quiz;
        return response()->json(['questions' => $questions]);
    }
    public function getReadingQuizQuestionsClient(Examination $exams)
    {
        $exams->load([
            'quiz.question' => function ($query) {
                $query->where('type', '=', Question::READING);
            },
            'quiz.question.readingQuestion',
            'quiz.question.readingQuestion.answers',
            'quiz.passage',
        ]);
        $questions = $exams->quiz;
        return response()->json(['questions' => $questions]);
    }

    public function getWritingAssessmentQuestionsClient(Examination $exams)
    {
        DB::enableQueryLog();
        $exams->load([
            'quiz.question' => function ($query) {
                $query->where('type', '=', Question::WRITING);
            },
            'quiz.question.writingAssessmentQuestion',
            'quiz.question.writingAssessmentQuestion.answers',
        ]);
        // dd(DB::getQueryLog());
        $questions = $exams->quiz[0];
        return response()->json(['questions' => $questions]);
    }
    public function getWritingExerciseQuestionsClient(Examination $exams)
    {
        $exams->load([
            'quiz.question' => function ($query) {
                $query->where('type', '=', Question::WRITING);
            },
            'quiz.question.writingAssessmentQuestion',
            'quiz.question.writingAssessmentQuestion.answers',
        ]);
        $questions = $exams->quiz;
        return response()->json(['questions' => $questions]);
    }
    public function getWritingQuizQuestionsClient(Examination $exams)
    {
        $exams->load([
            'quiz.question' => function ($query) {
                $query->where('type', '=', Question::WRITING);
            },
            'quiz.question.writingQuizQuestion',
            'quiz.question.writingQuizQuestion.answers',
        ]);
        $questions = $exams->quiz;
        return response()->json(['questions' => $questions]);
    }

    public function getListeningAssessmentQuestionsClient(Examination $exams)
    {
        $exams->load([
            'quiz.question' => function ($query) {
                $query->where('type', '=', Question::LISTENING);
            },
            'quiz.question.listenAssessmentQuestion',
            'quiz.question.listenAssessmentQuestion.answers',
        ]);
        $questions = $exams->quiz[0];
        $audioCodes = AudioListen::where('quiz_id', '=', $exams->quiz[0]->id)->get();
        return response()->json(['questions' => $questions, 'audioCodes' => $audioCodes]);
    }
    public function getListeningExerciseQuestionsClient(Examination $exams)
    {
        $exams->load([
            'quiz.question' => function ($query) {
                $query->where('type', '=', Question::LISTENING);
            },
            'quiz.question.listenAssessmentQuestion',
            'quiz.question.listenAssessmentQuestion.answers',
        ]);
        $questions = $exams->quiz;
        $audioCodes = AudioListen::where('quiz_id', '=', $exams->quiz[0]->id)->get();
        return response()->json(['questions' => $questions, 'audioCodes' => $audioCodes]);
    }
    public function getListeningQuizQuestionsClient(Examination $exams)
    {
        $exams->load([
            'quiz.question' => function ($query) {
                $query->where('type', '=', Question::LISTENING);
            },
            'quiz.question.listenAssessmentQuestion',
            'quiz.question.listenAssessmentQuestion.answers',
        ]);
        $questions = $exams->quiz;
        $audioCodes = AudioListen::where('quiz_id', '=', $exams->quiz[0]->id)->get();
        return response()->json(['questions' => $questions, 'audioCodes' => $audioCodes]);
    }

    public function getSpeakingAssessmentQuestionsClient(Examination $exams)
    {
        $exams->load([
            'quiz.question' => function ($query) {
                $query->where('type', '=', Question::SPEAKING);
            },
            'quiz.question.speakAssessmentQuestion',
            'quiz.question.speakAssessmentQuestion.answers',
        ]);
        $questions = $exams->quiz[0];
        return response()->json(['questions' => $questions]);
    }
    public function getSpeakingExerciseQuestionsClient(Examination $exams)
    {
        $exams->load([
            'quiz.question' => function ($query) {
                $query->where('type', '=', Question::SPEAKING);
            },
            'quiz.question.speakExercisesQuestion',
        ]);
        $questions = $exams->quiz[0];
        return response()->json(['questions' => $questions]);
    }
    public function getSpeakingQuizQuestionsClient(Examination $exams)
    {
        $exams->load([
            'quiz.question' => function ($query) {
                $query->where('type', '=', Question::SPEAKING);
            },
            'quiz.question.speakQuizQuestion',
        ]);
        $questions = $exams->quiz[0];
        return response()->json(['questions' => $questions]);
    }
}
