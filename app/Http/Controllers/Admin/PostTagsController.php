<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostTag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostTagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $postTags = PostTag::all();
        return view('admin.post-tags.index', [
            'postTags' => $postTags
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.post-tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $posTags = new PostTag(
            $request->validate([
                'tag_name' => 'required'
            ])
        );
        $posTags->save();
        return back()->with('success', 'Create success');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param PostTag $post_tag
     * @return View
     */
    public function edit(PostTag $post_tag)
    {
        return view('admin.post-tags.edit', [
            'postTags' => $post_tag
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param PostTag $post_tag
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, PostTag $post_tag)
    {
        $post_tag->update(
            $request->validate([
                'tag_name' => 'required'
            ])
        );
        $post_tag->save();
        return back()->with('success', 'Update success!');
    }

    public function destroy(PostTag $post_tag)
    {

//        try {
//            $post_tag->softDelete();
//            return response([
//                'message' => 'Delete success!'
//            ]);
//        } catch (\Exception $exception) {
//            return response([
//                'message' => 'Cannot delete course'
//            ], 400);
//        }
    }
}
