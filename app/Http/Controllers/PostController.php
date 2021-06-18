<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\UserLike;
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
        $posts = Post::with('postTag', 'user')->orderByDesc('created_at')->get();
        $tags = Tag::where('tag_type',1)->get();
        $userLike = UserLike::where('user_id',Auth::user()->id)->get();
        return view('forum.forum-page', [
            'posts' => $posts,
            'tags' => $tags,
            'userLike' => $userLike
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
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if (empty($request->tag_id))
        {
            return back()->with('success','Tag not found');
        }
        elseif(!empty($request->file) and !empty($request->tag_id))
        {
            $fileController = new FileController();
            $input = $request->all();

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
            return back();
        }else{
            $input = $request->all();
            $input['user_id'] = Auth::user()->id;
            unset($input['type']);
            unset($input['ref']);
            unset($input['file']);
            $post = new Post(
                $input
            );
            $post->save();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return View
     */
    public function show(Post $post)
    {
        $postTag = Tag::where('id', $post->tag_id)->first();
        $comments = Comment::with('user', 'post')->where('post_id', $post->id)->get();
        $userLike = UserLike::where('post_id',$post->id)->where('user_id',Auth::user()->id)->get();
        return view('forum.post-view', [
            'post' => $post,
            'postTag' => $postTag,
            'comments' => $comments,
            'userLike' => $userLike
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return View
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
