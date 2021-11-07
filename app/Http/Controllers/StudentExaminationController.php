<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Examination;
use App\Models\Question;
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

    public function handleSubmitAnswer(Request $resquest)
    {
        dd($resquest->input());
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
            $studentExam->update([
                'comment' => $input['comment'],
                'reviewed' => true,
                'score' => $input['score'],
            ]);

            DB::commit();
            return response()->json(['message' => 'success']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['message' => 'error']);
        }
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
