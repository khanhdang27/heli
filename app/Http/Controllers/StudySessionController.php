<?php

namespace App\Http\Controllers;

use App\Models\StudySession;
use Illuminate\Http\Request;

class StudySessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studySessions = StudySession::paginate(15);
        return view('admin.study-session.index', [
            'studySessions' => $studySessions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.study-session.create');
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
     * @param  \App\Model\StudySession  $studySession
     * @return \Illuminate\Http\Response
     */
    public function show(StudySession $studySession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\StudySession  $studySession
     * @return \Illuminate\Http\Response
     */
    public function edit(StudySession $studySession)
    {
        return view('admin.study-session.index', [
            'studySession' => $studySession
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\StudySession  $studySession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudySession $studySession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\StudySession  $studySession
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudySession $studySession)
    {
        //
    }
}
