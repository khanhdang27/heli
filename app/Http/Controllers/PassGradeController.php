<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Examination;
use App\Models\PassGrade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PassGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course, Examination $exam)
    {
        $grades = PassGrade::where(['exam_id' => $exam->id])->paginate(15);
        return view('admin.course.grade.index', [
            'course' => $course,
            'exam' => $exam,
            'grades' => $grades,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course, Examination $exam)
    {
        return view('admin.course.grade.create', [
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
            $grade = PassGrade::create([
                'exam_id' => $exam->id,
                'score' => $input['score'],
                'lecture_index' => $input['index'],
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
     * @param  \App\Models\PassGrade  $passGrade
     * @return \Illuminate\Http\Response
     */
    public function show(PassGrade $passGrade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PassGrade  $passGrade
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course, Examination $exam, PassGrade $grade)
    {
        return view('admin.course.grade.edit', [
            'course' => $course,
            'exam' => $exam,
            'grade' => $grade,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PassGrade  $passGrade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course, Examination $exam, PassGrade $grade)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            $grade->update([
                'score' => $input['score'],
                'lecture_index' => $input['index'],
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
     * @param  \App\Models\PassGrade  $passGrade
     * @return \Illuminate\Http\Response
     */
    public function destroy(PassGrade $grade)
    {
        try {
            $grade->delete();
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
