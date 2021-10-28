<?php

namespace App\Http\Controllers;

use App\Models\WritingAssessmentAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WritingAssessmentAnswerController extends Controller
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
            $readingAnswer = WritingAssessmentAnswer::create([
                'w_a_question_id' => $input['question_id'],
                'answer' => $input['answer'],
                'is_correct' => false
            ]);
            DB::commit();
            return response()->json(['message' => 'Success', 'answer' => $readingAnswer]);
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return response()->json(['message' => 'error']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WritingAssessmentAnswer  $writingAssessmentAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(WritingAssessmentAnswer $writingAssessmentAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WritingAssessmentAnswer  $writingAssessmentAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(WritingAssessmentAnswer $writingAssessmentAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WritingAssessmentAnswer  $writingAssessmentAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WritingAssessmentAnswer $writingAssessmentAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WritingAssessmentAnswer  $writingAssessmentAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(WritingAssessmentAnswer $answer)
    {
        DB::beginTransaction();
        try {
            $answer->delete();
            // dd(DB::getQueryLog());
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
