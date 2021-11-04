<?php

namespace App\Http\Controllers;

use App\Models\Passage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PassageController extends Controller
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
            'title' => 'required',
            'content' => 'required',
            'quiz_id' => 'required',
        ]);

        DB::beginTransaction();
        try {
            Passage::create($input);

            DB::commit();
            return redirect()->back()->with('success', 'Create Success !!!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Create Fails !!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Passage  $passage
     * @return \Illuminate\Http\Response
     */
    public function show(Passage $passage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Passage  $passage
     * @return \Illuminate\Http\Response
     */
    public function edit(Passage $passage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Passage  $passage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passage $passage)
    {
        $input = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $passage->update($input);

            DB::commit();
            return redirect()->back()->with('success', 'Create Success !!!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Create Fails !!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Passage  $passage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Passage $passage)
    {
        //
    }
}
