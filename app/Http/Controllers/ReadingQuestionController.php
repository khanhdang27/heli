<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\MCAnswerItem;
use App\Models\ReadingQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReadingQuestionController extends Controller
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
            'passage_id' => 'required',
            'index' => 'required',
            'question' => 'required',
            'message_wrong' => 'required',
            'lecture_index' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $question = Question::create([
                'quiz_id' => $quiz->id,
                'type' => \Constants::COURSE_READING,
                'index' => $input['index'],
            ]);

            $readQuestion = ReadingQuestion::create([
                'question_id' => $question->id,
                'question' => $input['question'],
                'passage_id' => $input['passage_id'],
                'message_wrong' => $input['message_wrong'],
                'lecture_index' => $input['lecture_index'],
            ]);

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
     * @param  \App\ReadingQuestion  $readingQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(ReadingQuestion $readingQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReadingQuestion  $readingQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(ReadingQuestion $readingQuestion)
    {
        //
    }

    public function setAnswerTrue(Request $request, Quiz $quiz, ReadingQuestion $question)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            $question->answers()->update(['is_correct' => false]);
            $answer = MCAnswerItem::find($input['answer']);
            $answer->update(['is_correct' => true]);
            DB::commit();
            return back()->with('success', 'Update success!');
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReadingQuestion  $readingQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz, Question $question)
    {
        $input = $request->validate([
            'index' => 'required',
            'question' => 'required',
            'message_wrong' => 'required',
            'lecture_index' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $question->update([
                'index' => $input['index'],
            ]);

            $readQuestion = ReadingQuestion::where(['question_id' => $question->id])->first();

            $readQuestion->update([
                'question' => $input['question'],
                'message_wrong' => $input['message_wrong'],
                'lecture_index' => $input['lecture_index'],
            ]);

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
     * @param  \App\ReadingQuestion  $readingQuestion
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
