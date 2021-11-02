<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Examination;
use App\Models\Quiz;
use App\Models\StudentExamination;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $exam_details = StudentExamination::select(
            'student_id',
            'course_id',
            'exam_id',
            'quiz_id'
            )->distinct()->paginate(15);
        return view('admin.student-examination.index', [
            'exam_details' => $exam_details
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
                'answer_type' => $input['answer_type']
            ]);
            DB::commit();
            return back()->with('success', 'Create success');
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            return back()->withErrors( 'Create error');
        }

    }

    public function mark(
        User $student,
        Course $course,
        Examination $exam,
        Quiz $quiz
    )
    {
        $exam_details = StudentExamination::where(
            [
                'student_id' => $student->id,
                'course_id' => $course->id,
                'exam_id' => $exam->id,
                'quiz_id' => $quiz->id
            ]
        )->get();
        return view('admin.student-examination.mark', [ 'exam_details' => $exam_details]);
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
    public function update(Request $request, StudentExamination $studentExamination)
    {
        DB::beginTransaction();
        try {
            
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors( 'Create error');
        }

        return back()->with('success', 'Create success');
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
