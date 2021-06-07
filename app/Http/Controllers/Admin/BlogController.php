<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogTags;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Carbon\Carbon;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', [
            'blogs' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $blog = new Blog([
                'photo' => $request->file('photo')->store('photo'),
                'title' => $request['title'],
                'content' => $request['content']
            ]
        );
        $blog->save();
        foreach ($request['tag_id'] as $tag_id) {
            $blogTag = new BlogTags([
                'blog_id' => $blog->id,
                'tag_id' => $tag_id
            ]);
            $blogTag->save();
        }
        return back()->with('success', 'Create success');
    }

    /**
     * Display the specified resource.
     *
     * @param Blog $blog
     * @return View
     */
    public function show(Blog $blog)
    {
        $postTag = Tag::where('id',$blog->tag_id)->first();
        return view('blog.blog-view', [
            'blog' => $blog,
            'postTag' => $postTag,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return View
     */
    public function edit(Blog $blog)
    {
        $_blog = Blog::with('tags')
            ->where('id', $blog->id)->first();
        return view('admin.blog.edit', [
            'blog' => $_blog,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Blog $blog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Blog $blog)
    {
        DB::table('blog_tag')
            ->where('blog_id', '=', $blog->id)
            ->delete();
        $blog->update([
            'title' => $request['title'],
            'content' => $request['content']
        ]);
        $blog->save();
        foreach ($request['tag_id'] as $tag_id){
            $blogTag = new BlogTags([
                'blog_id' => $blog->id,
                'tag_id' => $tag_id
            ]);
            $blogTag->save();
        }
        return back()->with('success', 'Create success');
    }

    public function showBlogPage()
    {
        $week_start = Carbon::now()->startOfWeek();
        $week_end = Carbon::now()->endOfWeek();
        $blog_one = Blog::with('tags')->whereBetween('created_at', [$week_start, $week_end])->orderBy('view_no','desc')->first();

        $blogs = Blog::with('tags')->whereBetween('created_at', [$week_start, $week_end])->orderBy('view_no','desc')->get();
        $blog = Blog::with('tags')->orderBy('created_at','desc')->get();

        return view('blog.blog-page',[
            'blog_one' => $blog_one,
            'blog' => $blog,
            'blogs' => $blogs
        ]);
    }

    public function viewBlog($id){
        $blogs = Blog::where('id',$id)->with('tags')->first();
        return view('blog.blog-view',[
            'blog'=>$blogs
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
