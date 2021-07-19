<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogTags;
use App\Models\File;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(15);
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
        $tags = Tag::where('tag_type', Tag::$BLOG)->get();
        return view('admin.blog.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $blog = Blog::create([
                    'title' => $request['title'],
                    'content' => $request['content']
                ]
            );
            foreach ($request['tag_id'] as $tag_id) {
                $blogTag = BlogTags::create([
                    'blog_id' => $blog->id,
                    'tag_id' => $tag_id
                ]);
            }
            if (!empty($request['photo'])) {
                $file = File::storeFile(
                    $request['photo'],
                    Blog::class,
                    $blog->id,
                );
            }

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('errors', 'Create error');
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
        $allBlog = Blog::with('tags')->get();
        $blog_top = clone $allBlog;
        $blogs_list = clone $allBlog;
        $blog_latest = clone $allBlog;
        $blog_top = $allBlog->sortByDesc('view_no')->first();
        $blogs_list = $allBlog->sortByDesc('view_no');
        $blog_latest = $allBlog->sortByDesc('created_at');

        $tags = Tag::where('tag_type',Tag::$BLOG)->get();

        return view('blog.blog-page',[
            'blog_top' => $blog_top,
            'blog' => $blog_latest,
            'blogs' => $blogs_list,
            'tags' => $tags
        ]);
    }

    public function showBlogPageByTag(Tag $tag)
    {
        DB::enableQueryLog();

        $blogs = Blog::with('tags')->whereHas('tags', function($query) use ($tag){
            return $query->where('tags.id', $tag->id);
        })->get();

        $tags = Tag::where('tag_type',Tag::$BLOG)->get();

        return view('blog.blog-page-tag',[
            'blogs' => $blogs,
            'tags' => $tags
        ]);
    }



    public function viewBlog($id){
        $blogs = Blog::where('id',$id)->with('tags')->first();
        $blogs->view_no = $blogs->view_no + 1;
        $blogs->save();
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
