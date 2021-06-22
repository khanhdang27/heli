<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\UserComment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'ref_id' => 'required',
            'ref_module'=>'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'detail' => 'required'
        ]);

        DB::beginTransaction();

        try {
            $comment = UserComment::create([
                'user_id' => Auth::user()->id,
                'commentable_id' => $input['ref_id'],
                'commentable_type' =>$input['ref_module'],
                'detail' => $input['detail']
            ]);

            if(!empty($input['file_id'])){
                $file = File::storeFile($input['file'],UserComment::class, $comment->id);
            }

            $refer = $input['ref_module']::find($input['ref_id']);
            
            $refer->comment_no = $refer->comment_no + 1;
            $refer->save();
 
            DB::commit();

            // dd($comment, $refer);
            return back()->with('success', 'Save success');
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            return back()->with('error', 'Save error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(UserComment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(UserComment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserComment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserComment $comment)
    {
        //
    }
}
