<?php

namespace App\Http\Controllers;

use App\Models\MCAnswerItem;
use App\Models\SpeakAssessmentQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpeakAssessmentAnswerController extends Controller
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
        $input = $request->input();
        DB::beginTransaction();
        try {
            // $listenAnswer = SpeakAssessmentAnswer::create([
            //     's_a_question_id' => $input['question_id'],
            //     'answer' => $input['answer'],
            //     'is_correct' => false
            // ]);

            $question = SpeakAssessmentQuestion::find($input['question_id']);

            $answer = new MCAnswerItem();
            $answer->answer = $input['answer'];
            $answer->is_correct = false;

            $question->answers()->save($answer);
            DB::commit();
            return response()->json(['message' => 'Success', 'answer' => $answer]);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['message' => 'error', $th]);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SpeakAssessmentAnswer  $speakAssessmentAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(MCAnswerItem $answer)
    {
        DB::beginTransaction();
        try {
            $answer->delete();
            DB::commit();
            return response([
                'message' => 'Delete success!'
            ]);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response([
                'message' => $exception->getMessage()
            ], 400);
        }
    }
}