<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'post_id' => 'required',
            'file_id' => '',
            'detail' => 'required'
        ]);
        if (!empty($request->file)) {
            $fileController = new FileController();

            $input['user_id'] = Auth::user()->id;
            $input['file_id'] = $fileController->store($request);

            $comment = new Comment([
                'user_id' => Auth::user()->id,
                'post_id' => $input['post_id'],
                'file_id' => $input['file_id'],
                'detail' => $input['detail']
            ]);

            if ($comment->save()) {
                $post = Post::find($comment->post_id);
                $post->comment_no = $post->comment_no + 1;
                $post->save();
            }
            return back();
        }
        else{
            $comment = new Comment([
                'user_id' => Auth::user()->id,
                'post_id' => $input['post_id'],
                'detail' => $input['detail']
            ]);
            if ($comment->save()) {
                $post = Post::find($comment->post_id);
                $post->comment_no = $post->comment_no + 1;
                $post->save();
            }
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
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
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
