<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Course;
use App\Models\Examination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course, Examination $exam)
    {
        $quizzes = Quiz::where(['exam_id' => $exam->id])->paginate(15);
        return view('admin.course.exam_quiz.quiz.index', [
            'quizzes' => $quizzes,
            'course' => $course,
            'exam' => $exam,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course, Examination $exam)
    {
        return view('admin.course.exam_quiz.quiz.create', [
            'course' => $course,
            'exam' => $exam,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course, Examination $exam)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            $quiz = Quiz::create([
                'exam_id' => $exam->id,
                'version' => $input['version'],
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
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course, Examination $exam, Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course, Examination $exam, Quiz $quiz)
    {
        return view('admin.course.exam_quiz.quiz.edit', [
            'course' => $course,
            'exam' => $exam,
            'quiz' => $quiz,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course, Examination $exam, Quiz $quiz)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            $quiz->update(['version' => $input['version']]);
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
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course, Quiz $quiz)
    {
        try {
            $quiz->delete();
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
