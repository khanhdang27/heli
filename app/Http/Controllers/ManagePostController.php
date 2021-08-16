<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\UserComment;
use Illuminate\Http\Request;
use Exception;

class ManagePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::withTrashed()->with('postTag', 'user')->orderByDesc('created_at')->paginate(15);
        return view('admin.forum.index', [
            'posts' => $posts,
        ]);
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
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $forum)
    {
        return view('admin.forum.show', [
            'post' => $forum,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function review($id)
    {
        $forum = Post::withTrashed()->find($id);
        return view('admin.forum.show', [
            'post' => $forum,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $forum)
    {
        try {
            $comment = UserComment::query()->where([
                ['commentable_type', Post::class],
                ['commentable_id', $forum->id]
            ])->delete();
            $forum->delete();
            return response([
                'message' => 'Delete success!'
            ]);
        } catch (Exception $exception) {
            return response([
                'message' => 'Cannot delete',
                'detail' => $exception->getMessage()
            ], 400);
        }
    }

    public function restore($id)
    {
        try {
            $forum = Post::withTrashed()->find($id);
            $comment = UserComment::query()->where([
                ['commentable_type', Post::class],
                ['commentable_id', $forum->id]
            ])->restore();
            $forum->restore();
            return response([
                'message' => 'Restore success!'
            ]);
        } catch (\Exception $exception) {
            return response([
                'message' => 'Cannot restore',
                'detail' => $exception->getMessage()
            ],400);
        }
    }
}
