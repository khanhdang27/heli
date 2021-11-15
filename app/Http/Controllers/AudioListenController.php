<?php

namespace App\Http\Controllers;

use App\Models\AudioFile;
use App\Models\AudioListen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AudioListenController extends Controller
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
        $input = $request->validate([
            'part' => 'required',
            'quiz' => 'required',
            'exam' => 'required',
            'course' => 'required',
            'audio' => 'file|required',
        ]);

        try {
            DB::beginTransaction();
            if (!empty($input['audio'])) {
                $file = AudioFile::storeFile($input['audio']);
                $audioListen = AudioListen::create([
                    'part' => $input['part'],
                    'quiz_id' => $input['quiz'],
                    'exam_id' => $input['exam'],
                    'course_id' => $input['course'],
                    'audio_code' => $file,
                ]);

                DB::commit();
                return back()->with('success', 'Save success');
            } else {
                DB::rollBack();
                return back()->withErrors('Save error');
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors('Save error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AudioListen  $audioListen
     * @return \Illuminate\Http\Response
     */
    public function show(AudioListen $audioListen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AudioListen  $audioListen
     * @return \Illuminate\Http\Response
     */
    public function edit(AudioListen $audioListen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AudioListen  $audioListen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AudioListen $audioListen)
    {
        $input = $request->validate([
            'part' => 'required',
            'quiz' => 'required',
            'exam' => 'required',
            'course' => 'required',
            'audio' => 'file|nullable ',
        ]);

        try {
            DB::beginTransaction();
            if (!empty($input['audio'])) {
                $file = AudioFile::storeFile($input['audio']);
                $audioListen->update([
                    'part' => $input['part'],
                    'quiz_id' => $input['quiz'],
                    'exam_id' => $input['exam'],
                    'course_id' => $input['course'],
                    'audio_code' => $file,
                ]);

                DB::commit();
                return back()->with('success', 'Save success');
            } else {
                $audioListen->update([
                    'part' => $input['part'],
                    'quiz_id' => $input['quiz'],
                    'exam_id' => $input['exam'],
                    'course_id' => $input['course'],
                ]);
                DB::commit();
                return back()->with('success', 'Save success');
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors('Save error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AudioListen  $audioListen
     * @return \Illuminate\Http\Response
     */
    public function destroy(AudioListen $audioListen)
    {
        //
    }
}
