<?php

namespace App\Http\Controllers;

use App\Models\UserComment;
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
        $posts = Post::with('postTag', 'user')->with(['userLike'=>function ($q){
            return $q->where('user_id', Auth::user()->id);
        }])->orderByDesc('created_at')->get();
        $tags = Tag::where('tag_type',1)->get();
        return view('forum.forum-page', [
            'posts' => $posts,
            'tags' => $tags,
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
        $_post = Post::with( 'user', 'postTag')->with(['userLike'=>function ($q){
            return $q->where('user_id', Auth::user()->id);
        }])->find($post->id);
        $comment = UserComment::with(['userLike'=>function ($q){
            return $q->where('user_id',Auth::user()->id);
        }])->where('ref_id',$post->id)->get();
//        dd($comment);
        return view('forum.post-view', [
            'post' => $_post,
            'comment' => $comment
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
