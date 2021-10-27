<?php

namespace App\Http\Controllers;

use App\Models\ReadingAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReadingAnswerController extends Controller
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
            $readingAnswer = ReadingAnswer::create([
                'reading_question_id' => $input['question_id'],
                'answer' => $input['answer'],
                'is_correct' => false
            ]);
            DB::commit();
            return response()->json(['message' => 'Success', 'answer' => $readingAnswer]);
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return response()->json(['message' => 'error', $th]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReadingAnswer  $readingAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(ReadingAnswer $readingAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReadingAnswer  $readingAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(ReadingAnswer $readingAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReadingAnswer  $readingAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReadingAnswer $readingAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReadingAnswer  $readingAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReadingAnswer $readingAnswer)
    {
        //
    }
}
