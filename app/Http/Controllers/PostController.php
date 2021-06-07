<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Models\File;
use App\Models\PostTag;
use App\Models\Tag;
use App\Models\User;
use App\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $posts = Post::with('postTag','user')->get();

        return view('forum.forum-page',[
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $fileController = new FileController();
        $input = $request->all();

//        dd($input);
        $file_id = $fileController->store($request);

        $input['user_id'] = Auth::user()->id;
        unset($input['type']);
        unset($input['ref']);
        unset($input['file']);
        $input['file_id'] = $file_id;



        $post = new Post(
            $input
        );
        $post->save();
        return back()->with('success', 'Create success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return View
     */
    public function show(Post $post)
    {
        $postTag = PostTag::where('id',$post->tag_id)->first();
        $comments = Comment::with('user', 'post')->where('post_id', $post->id)->get();

        return view('forum.post-view', [
            'post' => $post,
            'postTag' => $postTag,
            'comments'=>$comments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return View
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
