<?php

namespace App\Http\Controllers;

use App\Models\AudioFile;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\MCAnswerItem;
use App\Models\SpeakAssessmentQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpeakAssessmentQuestionController extends Controller
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
            'question' => 'required',
            'audio' => 'file',
            'message_wrong' => 'required',
            'lecture_index' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $question = Question::create([
                'quiz_id' => $quiz->id,
                'type' => \Constants::COURSE_SPEAKING,
                'index' => $input['index'],
            ]);

            if (!empty($input['audio'])) {
                $file = AudioFile::storeFile($input['audio']);
                $listenQuestion = SpeakAssessmentQuestion::create([
                    'question_id' => $question->id,
                    'question' => $input['question'],
                    'audio_ref' => $file,
                    'message_wrong' => $input['message_wrong'],
                    'lecture_index' => $input['lecture_index'],
                ]);
            }

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
     * @param  \App\SpeakAssessmentQuestion  $speakAssessmentQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(SpeakAssessmentQuestion $speakAssessmentQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SpeakAssessmentQuestion  $speakAssessmentQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(SpeakAssessmentQuestion $speakAssessmentQuestion)
    {
        //
    }

    public function setAnswerTrue(Request $request, Quiz $quiz, SpeakAssessmentQuestion $question)
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
            return back()->withErrors('Update error!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SpeakAssessmentQuestion  $speakAssessmentQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz, Question $question)
    {
        $input = $request->validate([
            'index' => 'required',
            'question' => 'required',
            'audio' => 'nullable|file',
            'message_wrong' => 'required',
            'lecture_index' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $question->update([
                'index' => $input['index'],
            ]);

            $speakQuestion = SpeakAssessmentQuestion::where(['question_id' => $question->id])->first();

            if (!empty($input['audio'])) {
                $file = AudioFile::storeFile($input['audio']);
                $speakQuestion->update([
                    'audio_ref' => $file,
                ]);
            }
            $speakQuestion->update([
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
     * @param  \App\SpeakAssessmentQuestion  $speakAssessmentQuestion
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
