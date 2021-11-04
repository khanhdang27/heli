<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\SpeakQuizQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpeakQuizQuestionController extends Controller
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
            'index'=> 'required',
            'question'=> 'required',
            'message_wrong'=> 'required',
            'lecture_index'=> 'required',
        ]);
        DB::beginTransaction();
        try {
            $question = Question::create([
                'quiz_id' => $quiz->id,
                'type' => Question::SPEAKING,
                'index' => $input['index']
            ]);

            $speakingQuestion = SpeakQuizQuestion::create([
                'question_id' => $question->id,
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
     * @param  \App\SpeakQuizQuestion  $speakQuizQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(SpeakQuizQuestion $speakQuizQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SpeakQuizQuestion  $speakQuizQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(SpeakQuizQuestion $speakQuizQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SpeakQuizQuestion  $speakQuizQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz, Question $question)
    {
        $input = $request->validate([
            'index'=> 'required',
            'question'=> 'required',
            'message_wrong'=> 'required',
            'lecture_index'=> 'required',
        ]);
        DB::beginTransaction();
        try {
            $question->update([
                'index' => $input['index']
            ]);

            $speakingQuestion = SpeakQuizQuestion::where(['question_id' => $question->id])->first();

            $speakingQuestion->update([
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
     * @param  \App\SpeakQuizQuestion  $speakQuizQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpeakQuizQuestion $question)
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
                    'exception' => $exception
                ],
                400,
            );
        }
    }
}
