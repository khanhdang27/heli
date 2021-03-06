<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\WritingQuizQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WritingQuizQuestionController extends Controller
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
    public function store(Request $request, Quiz $quiz)
    {
        $input = $request->validate([
            'index' => 'required',
            'part' => 'required',
            'photo' => 'file|required_if:part,1',
            'question' => 'required',
            'message_wrong' => 'required',
            'lecture_index' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $question = Question::create([
                'quiz_id' => $quiz->id,
                'type' => \Constants::COURSE_WRITING,
                'index' => $input['index'],
            ]);

            $writingQuestion = WritingQuizQuestion::create([
                'question_id' => $question->id,
                'question' => $input['question'],
                'part' => $input['part'],
                'message_wrong' => $input['message_wrong'],
                'lecture_index' => $input['lecture_index'],
            ]);

            if (!empty($request['photo'])) {
                if (!empty($writingQuestion->photo)) {
                    $writingQuestion->photo->delete();
                }
                $file = File::storeFile($request['photo'], WritingQuizQuestion::class, $writingQuestion->id);
            }

            DB::commit();
            return back()->with('success', 'Create success!');
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WritingQuizQuestion  $writingQuizQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(WritingQuizQuestion $writingQuizQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WritingQuizQuestion  $writingQuizQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(WritingQuizQuestion $writingQuizQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WritingQuizQuestion  $writingQuizQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz, Question $question)
    {
        $input = $request->validate([
            'index' => 'required',
            'question' => 'required',
            'message_wrong' => 'required',
            'lecture_index' => 'required',
            'part' => 'required',
            'photo' => 'file|nullable',
        ]);
        DB::beginTransaction();
        try {
            $question->update([
                'index' => $input['index'],
            ]);

            $writingQuestion = WritingQuizQuestion::where(['question_id' => $question->id])->first();

            $writingQuestion->update([
                'question' => $input['question'],
                'part' => $input['part'],
                'message_wrong' => $input['message_wrong'],
                'lecture_index' => $input['lecture_index'],
            ]);

            if (!empty($request['photo'])) {
                if (!empty($writingQuestion->picture)) {
                    $writingQuestion->picture->delete();
                }
                $file = File::storeFile($request['photo'], WritingQuizQuestion::class, $writingQuestion->id);
            }

            DB::commit();
            return back()->with('success', 'Update success!');
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WritingQuizQuestion  $writingQuizQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz, Question $question)
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
                    'exception' => $exception,
                ],
                400,
            );
        }
    }
}
