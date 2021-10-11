<?php

namespace App\Http\Controllers;

use App\Models\Exams;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Quiz;
use App\Models\StudentCourses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class ExamsController extends Controller
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
        return view('admin.course.exam_quiz.create', [
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
            $exam = Exams::create([
                'course_id' => $course->id,
                'name' => $input['name'],
                'index' => $input['index'],
                'type' => $input['type'],
            ]);

            DB::commit();
            return back()->with('success', 'Create success!');
        } catch (\Throwable $th) {
            dd($th);
            DB::rollback();
            return back()->withErrors('errors', 'Create errors!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course, Exams $exams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course, Exams $exam)
    {
        return view('admin.course.exam_quiz.edit', [
            'course' => $course,
            'exam' => $exam,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course, Exams $exam)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            $exam->update([
                'course_id' => $course->id,
                'name' => $input['name'],
                'index' => $input['index'],
                'type' => $input['type'],
            ]);

            DB::commit();
            return back()->with('success', 'Update success!');
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return back()->withErrors('errors', 'Update errors!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course, Exams $exams)
    {
        try {
            $exams->delete();
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function checkExam(Request $request, Exams $exams)
    {
        $input = $request->input();
        // dd($input);
        DB::beginTransaction();
        try {
            $courseId = $input['courseId'];

            $student_course = StudentCourses::where([
                'student_id' => Auth::user()->id,
                'course_id' => $courseId
            ])->first();

            $version = $student_course->level_quiz;

            $quiz = Quiz::with('question')
                ->with('question.answers')
                ->where('exam_id', 1)
                ->whereHas('question', function ($query) use ($version) {
                    return $query->where('version', $version);
                })
                ->first();
            [$result, $score] = $this->doGrade($quiz->question, $input['quiz']);

            if ($exams->type == Exams::NORMAL) {
                if ( count($result) == $score ) {
                    $student_course->update(['lecture_open'=> $student_course->lecture_open + 2]);
                    DB::commit();
                    return response()->json([$result, $score, 'status'=> true]);
                } else {
                    $student_course->update(['level_quiz'=> $student_course->level_quiz + 1]);
                    DB::commit();
                    return response()->json([$result, $score, 'status'=> false]);
                }
            } else if ($exams->type == Exams::ASSESSMENT) {
                
            } else {
                // Final Quiz
                $final_score = $score / count($result);
                if ( $final_score > 0.7 ) {
                    $student_course->update(['passed'=> true]);
                    DB::commit();
                    return response()->json([$result, $score, 'status'=> true]);
                } else {
                    $student_course->update(['level_quiz'=> $student_course->level_quiz + 1]);
                    DB::commit();
                    return response()->json([$result, $score, 'status'=> false]);
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

    public function doGrade($question, Array $answer )
    {
        $result = [];
        $score = 0;
        foreach ( $answer as $item ) {
            $_question = $question->where( 'id', $item['questionID'] )->first();
            $_answer = $_question->answers->where('id', $item['answerID'])->first();
            
            array_push($result, [
                'is_correct' => $_answer->is_correct,
                'question' => $_question->id,
            ]);

            if ($_answer->is_correct) {
                $score += 1;
            }
        }

        return [$result, $score];
    }
}
