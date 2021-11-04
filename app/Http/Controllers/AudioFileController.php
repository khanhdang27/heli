<?php

namespace App\Http\Controllers;

use App\Models\AudioFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AudioFileController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AudioFile  $audioFile
     * @return \Illuminate\Http\Response
     */
    public function show(AudioFile $audioFile)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AudioFile  $audioFile
     * @return \Illuminate\Http\Response
     */
    public function getByCode(String $code)
    {
        $audioFile = AudioFile::where('audio_code', $code)->first();
        $url = Storage::get($audioFile->source);
        return $url;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AudioFile  $audioFile
     * @return \Illuminate\Http\Response
     */
    public function edit(AudioFile $audioFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AudioFile  $audioFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AudioFile $audioFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AudioFile  $audioFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(AudioFile $audioFile)
    {
        //
    }
}
