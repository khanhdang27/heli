<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
        return view('admin.tag.index', [
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
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $posTags = new Tag(
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
     * @param Tag $post_tag
     * @return View
     */
    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', [
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

    public function destroy(Tag $post_tag)
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
