<?php

namespace App\Http\Controllers;

use App\Models\ListenAssessmentAnswer;
use App\Models\ListenAssessmentQuestion;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListenAssessmentQuestionController extends Controller
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
            'part'=> 'required',
            'message_wrong'=> 'required',
            'lecture_index'=> 'required',
        ]);
        DB::beginTransaction();
        try {
            $question = Question::create([
                'quiz_id' => $quiz->id,
                'type' => Question::LISTENING,
                'index' => $input['index']
            ]);

            $listenQuestion = ListenAssessmentQuestion::create([
                'question_id' => $question->id,
                'question' => $input['question'],
                'part' => $input['part'],
                'message_wrong' => $input['message_wrong'],
                'lecture_index' => $input['lecture_index'],
            ]);

            DB::commit();
            return back()->with('success', 'Create success!');
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return back()->withErrors('Create error!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ListenAssessmentQuestion  $listenAssessmentQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(ListenAssessmentQuestion $listenAssessmentQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ListenAssessmentQuestion  $listenAssessmentQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(ListenAssessmentQuestion $listenAssessmentQuestion)
    {
        //
    }

    public function setAnswerTrue(Request $request, Quiz $quiz, ListenAssessmentQuestion $question)
    {
        $input = $request->input();
        DB::beginTransaction();
        try {
            ListenAssessmentAnswer::where('l_a_question_id', $question->id)->update(['is_correct' => false]);
            $answer = ListenAssessmentAnswer::find($input['answer']);
            $answer->update(['is_correct' => true]);
            DB::commit();
            return back()->with('success', 'Update success!');
        } catch (\Throwable $th) {
            DB::rollback();
            dd( $th);
            return back()->withErrors('Update error!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ListenAssessmentQuestion  $listenAssessmentQuestion
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

            $readQuestion = ListenAssessmentQuestion::where(['question_id' => $question->id])->first();

            $readQuestion->update([
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
     * @param  \App\ListenAssessmentQuestion  $listenAssessmentQuestion
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
                    'exception' => $exception
                ],
                400,
            );
        }
    }
}
