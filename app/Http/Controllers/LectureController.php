<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\StudentCourses;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LectureController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function show(Lecture $lecture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecture $lecture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecture $lecture)
    {
        $input = $request->input();
        if ($input['user_id'] != 0) {
            DB::beginTransaction();
            try {
                StudentCourses::where([
                    'course_id' => $input['course_id'],
                    'student_id' => $input['user_id']
                ])->update([
                    'latest_study' => new DateTime(),
                    'lecture_study' => $lecture->id
                ]);

                DB::commit();
                return response([
                    'message' => 'update success!'
                ],200);
            } catch (\Throwable $th) {
                DB::rollBack();

                dd($th);
                return response([
                    'message' => 'update fails!'
                ],400);
            }
        }
        return response([
            'message' => 'update fails!'
        ],400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecture $lecture)
    {
        //
    }
}
