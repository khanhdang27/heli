<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\UserComment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\UserLike;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $tags = Tag::where('tag_type',Tag::$POST)->get();
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
            return back()->with('error','Tag not found');
        }
        $input = $request->all();

        DB::beginTransaction();

        try {
            $post = Post::create([
                'title' => $input['title'],
                'content' => $input['content'],
                'tag_id' => $input['tag_id'],
                'user_id' => Auth::user()->id
            ]);

            if(!empty($input['file'])){
                $file = File::storeFile($input['file'],Post::class, $post->id);
            }

            DB::commit();
            return back()->with('success', 'Save success');
        } catch (\Throwable $th) {
            DB::rollBack();;
            return back()->with('error', 'Save error');
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
        $_post = Post::with( 'user', 'postTag')->find($post->id);
        // $comment = UserComment::where('ref_id',$post->id)->get();
//        dd($comment);
        return view('forum.post-view', [
            'post' => $_post,
            'comment' => []
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
