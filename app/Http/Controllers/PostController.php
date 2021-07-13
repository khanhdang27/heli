<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Post;
use App\Models\Tag;
use App\Models\UserComment;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Throwable;

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
        $tags = Tag::where('tag_type', Tag::$POST)->pluck('tag_name', 'id');
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
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        if (empty($request->tag_id)) {
            return back()->with('errors', 'Tag not found');
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

            if (!empty($input['file'])) {
                $file = File::storeFile($input['file'], Post::class, $post->id);
            }

            DB::commit();
            return back()->with('success', 'Save success');
        } catch (Throwable $th) {
            DB::rollBack();
            return back()->with('errors', 'Save error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return View
     */
    public function show(Post $post)
    {
        $_post = Post::with('user', 'postTag')->find($post->id);
        $tags = Tag::where('tag_type', Tag::$POST)->pluck('tag_name', 'id');
        return view('forum.post-view', [
            'post' => $_post,
            'tags' => $tags
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return View
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Post $post
     * @return RedirectResponse
     */
    public function update(Request $request, Post $post)
    {
        DB::beginTransaction();
        try {
            $post->update([
                'title' => $request['title'],
                'content' => $request['content'],
                'tag_id' => $request['tag_id']
            ]);
            if (!empty($request['file'])) {
                $file = File::storeFile($request['file'], Post::class, $post->id);
            }

            DB::commit();
            return back()->with('success', 'Save success');

        } catch (Throwable $th) {
            DB::rollBack();
            return back()->with('errors', 'Save error');
        }
    }

    public function pinComment($post_id, $comment_id)
    {
        DB::beginTransaction();
        try {
            $post = Post::where('id', $post_id)->first();
            $post->update([
                'pin_comment' => $comment_id
            ]);
            DB::commit();
            return back()->with('success', 'Save success');
        }catch (Throwable $th){
            DB::rollBack();
            return back()->with('errors', 'Save error');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return Response
     */
    public function destroy(Post $post)
    {
        try {
            $comment = UserComment::query()->where([
                ['commentable_type', Post::class],
                ['commentable_id', $post->id]
            ])->delete();
            $post->delete();
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
}
