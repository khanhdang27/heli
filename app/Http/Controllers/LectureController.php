<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\StudentCourses;
use App\Models\Examination;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
                    'student_id' => $input['user_id'],
                ])->update([
                    'latest_study' => new DateTime(),
                    'lecture_study' => $lecture->id,
                ]);

                DB::commit();
                return response(
                    [
                        'message' => 'update success!',
                    ],
                    200,
                );
            } catch (\Throwable $th) {
                DB::rollBack();
                return response(
                    [
                        'message' => $th->getMessage(),
                    ],
                    400,
                );
            }
        }
        return response(
            [
                'message' => 'update fails!',
            ],
            400,
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function showLecture(Request $request)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            $lecture = Lecture::find($input['id']);
            $this->updateWatched($input);
            DB::commit();
            return response()->json($lecture);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(
                [
                    'message' => $th->getMessage(),
                ],
                400,
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Examination  $exams
     * @return \Illuminate\Http\Response
     */
    public function showExam(Request $request, Examination $exams)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            // # Need update
            $courseId = $input['courseId'];

            $student_course = StudentCourses::where([
                'student_id' => Auth::user()->id,
                'course_id' => $courseId,
            ])->first();
            #region Old code
            // if (empty($student_course->quiz_lecture) || ($student_course->quiz_lecture != $exams->id && $index == $student_course->lecture_open)) {
            //     $student_course->quiz_lecture = $exams->id;
            //     $student_course->level_quiz = 1;
            // } else {
            //     return response()->json(
            //         [
            //             'message' => 'You Passed this Exam',
            //         ],
            //         205,
            //     );
            // }
            // $quiz = Quiz::with('question')
            //     ->with('question.answers')
            //     ->where('set', $set)
            //     ->where('exam_id', $exams->id)->first();
            // if (empty($quiz)) {
            //     return response()->json(
            //         [
            //             'message' => 'Quiz not found',
            //         ],
            //         400,
            //     );
            // }
            #endregion
            $this->updateWatched($input);
            DB::commit();
            return response()->json($student_course);
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

    public function updateWatched(array $input)
    {
        $student_course = StudentCourses::where('course_id', $input['courseId'])
            ->where('student_id', Auth::user()->id)
            ->first();

        $newWatchList = '';

        if (strlen($student_course->watched_list) == 0) {
            $newWatchList = $input['index'] . ',';
        } else {
            $watched_list = explode(',', $student_course->watched_list);
            if (!in_array($input['index'], $watched_list)) {
                $newWatchList = $student_course->watched_list . $input['index'] . ',';
            } else {
                $newWatchList = $student_course->watched_list;
            }
        }
        $student_course->update(['watched_list' => $newWatchList, 'lecture_study' => $input['index']]);
    }

    public function getLectureRelated(Request $request)
    {
        $input = $request->input();
        $lecture = Lecture::query()->where('course_id', $input['courseID'])
            ->where('index', '=', $input['index'])->first();
        return response()->json($lecture);
    }
}
