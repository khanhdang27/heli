<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Exams;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course, Exams $exam, Quiz $quiz)
    {
        $questions = Question::where(['quiz_id' => $quiz->id])->paginate(15);
        // resources\views\admin\course\exam_quiz\question_answer
        return view('admin.course.exam_quiz.question_answer.index', [
            'course' => $course,
            'exam' => $exam,
            'quiz' => $quiz,
            'questions' => $questions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course, Exams $exam, Quiz $quiz)
    {
        return view('admin.course.exam_quiz.question_answer.create', [
            'course' => $course,
            'exam' => $exam,
            'quiz' => $quiz,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course, Exams $exam, Quiz $quiz)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            $question = Question::create([
                'quiz_id' => $quiz->id,
                'question' => $input['question'],
                'message_wrong' => $input['message_wrong'],
                'lecture_index' => $input['lecture_index'],
            ]);

            DB::commit();
            return back()->with('success', 'Create success!');
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->withErrors('Create error!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course, Exams $exam, Quiz $quiz, Question $question)
    {
        $answers = Answer::where(['question_id' => $question->id])->get();
        return view('admin.course.exam_quiz.question_answer.answer', [
            'course' => $course,
            'exam' => $exam,
            'quiz' => $quiz,
            'question' => $question,
            'answers' => $answers,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course, Exams $exam, Quiz $quiz, Question $question)
    {
        return view('admin.course.exam_quiz.question_answer.edit', [
            'course' => $course,
            'exam' => $exam,
            'quiz' => $quiz,
            'question' => $question,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course, Exams $exam, Quiz $quiz, Question $question)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            $question->update([
                'question' => $input['question'],
                'message_wrong' => $input['message_wrong'],
                'lecture_index' => $input['lecture_index'],
            ]);

            DB::commit();
            return back()->with('success', 'Update success!');
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->withErrors('Update error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course, Exams $exam, Quiz $quiz, Question $question)
    {
        try {
            $question->delete();
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
}
