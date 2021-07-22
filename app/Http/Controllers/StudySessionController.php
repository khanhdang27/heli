<?php

namespace App\Http\Controllers;

use App\Models\StudySession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

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
        $input = $request->validate([
            'session_name'=>'required',
            'session_start'=>'required',
            'session_end'=>'required',
        ]);

        DB::beginTransaction();
        try {
            StudySession::create([
                'session_name' => $input['session_name'],
                'session_start' => Carbon::parse(strtotime($input['session_start'])),
                'session_end' => Carbon::parse(strtotime($input['session_end']))
            ]);

            DB::commit();

            return back()->with('success', 'Create success!');
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);

            return back()->with('errors', 'Create Error!');
        }
        
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
        return view('admin.study-session.edit', [
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
        $input = $request->validate([
            'session_name'=>'required',
            'session_start'=>'required',
            'session_end'=>'required',
        ]);

        DB::beginTransaction();
        try {
            $studySession->update([
                'session_name' => $input['session_name'],
                'session_start' => Carbon::parse(strtotime($input['session_start'])),
                'session_end' => Carbon::parse(strtotime($input['session_end']))
            ]);

            DB::commit();

            return back()->with('success', 'Update success!');
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);

            return back()->with('errors', 'Update Error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\StudySession  $studySession
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudySession $studySession)
    {

        try {
            $studySession->delete();
            return response([
                'message' => 'Delete success!'
            ]);
        } catch (\Exception $exception) {
            return response([
                'message' => 'Cannot delete course'
            ], 400);
        }
    }
}
