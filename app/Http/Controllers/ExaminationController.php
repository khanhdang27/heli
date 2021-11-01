<?php

namespace App\Http\Controllers;

use App\Models\Examination;
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
            ]);

            for ($i=1; $i <= 4; $i++) { 
                Quiz::create([
                    'exam_id' => $exam->id,
                    'set' => $i,
                ]);
            }
            DB::commit();
            return redirect()
                ->route('admin.course.examination.edit', ['course' => $this->course->id, 'exam' => $exam->id])
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Examination  $exams
     * @return \Illuminate\Http\Response
     */
    public function checkExam(Request $request, Examination $exams)
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

            if ($exams->type == Examination::EXERCISES) {
                if (count($result) == $score) {
                    if ($exams->index == $student_course->lecture_open) {
                        $student_course->update(['lecture_open' => $student_course->lecture_open + 2]);
                    }
                    DB::commit();
                    return response()->json(['quiz_result' => $result, 'score' => $score, 'status' => true]);
                } else {
                    $student_course->update(['level_quiz' => $student_course->level_quiz + 1]);
                    DB::commit();
                    return response()->json(['quiz_result' => $result, 'score' => $score, 'status' => false]);
                }
            } else if ($exams->type == Examination::ASSESSMENT) {
                $grade = $this->assessment($exams, $score);
                $student_course->update(['lecture_open' => $grade->lecture_index]);
                DB::commit();
                return response()->json(['grade' => $grade, 'quiz_result' => $result, 'score' => $score, 'status' => true]);
            } else {
                // Final Quiz
                $final_score = $score / count($result);
                if ($final_score > 0.7) {
                    $student_course->update(['passed' => true]);
                    DB::commit();
                    return response()->json(['quiz_result' => $result, 'score' => $score, 'status' => true]);
                } else {
                    $student_course->update(['level_quiz' => $student_course->level_quiz + 1]);
                    DB::commit();
                    return response()->json(['quiz_result' => $result, 'score' => $score, 'status' => false]);
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

    public function doGrade($question, array $answer)
    {
        $result = [];
        $score = 0;
        foreach ($answer as $item) {
            $_question = $question->where('id', $item['questionID'])->first();
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

    public function assessment(Examination $exams, $score)
    {
        $passGrade = PassGrade::where(['exam_id' => $exams->id])->get();

        $grade = $passGrade->where('score', '<=', $score)->sortByDesc('score')->first();

        return $grade;
    }
}
