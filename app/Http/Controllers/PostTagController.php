<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin.post-tags.index', [
            'tags' => $tags
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $tags = new Tag(
            $request->validate([
                'tag_name' => 'required',
                'tag_type' => 'required'
            ])
        );
        $tags->save();
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
     * @param Tag $tag
     * @return View
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', [
            'tags' => $tag
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Tag $tag
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Tag $tag)
    {
        $tag->update(
            $request->validate([
                'tag_name' => 'required'
            ])
        );
        $tag->save();
        return back()->with('success', 'Update success!');
    }

    public function destroy(Tag $tag)
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
