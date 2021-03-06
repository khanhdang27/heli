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
            'blogs' => $blogs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $tags = Tag::where('tag_type', \Constants::HASTAG_BLOG)->get();
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
                'content' => $request['content'],
            ]);
            foreach ($request['tag_id'] as $tag_id) {
                $blogTag = BlogTags::create([
                    'blog_id' => $blog->id,
                    'tag_id' => $tag_id,
                ]);
            }
            if (!empty($request['photo'])) {
                $file = File::storeFile($request['photo'], Blog::class, $blog->id);
            }

            DB::commit();
            return back()->with('success', 'Create success');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Blog $blog
     * @return View
     */
    public function show(Blog $blog)
    {
        $postTag = Tag::where('id', $blog->tag_id)->first();
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
            ->where('id', $blog->id)
            ->first();
        $tags = Tag::where('tag_type', \Constants::HASTAG_BLOG)->get();
        return view('admin.blog.edit', [
            'blog' => $_blog,
            'tags' => $tags,
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
            'content' => $request['content'],
        ]);
        $blog->save();

        if (!empty($request['photo'])) {
            if (!empty($blog->photo)) {
                $blog->photo->delete();
            }
            $file = File::storeFile($request['photo'], Blog::class, $blog->id);
        }
        foreach ($request['tag_id'] as $tag_id) {
            $blogTag = new BlogTags([
                'blog_id' => $blog->id,
                'tag_id' => $tag_id,
            ]);
            $blogTag->save();
        }
        return back()->with('success', 'Update success');
    }

    public function showBlogPage()
    {
        $allBlog = Blog::with('tags');
        $blog_top = clone $allBlog;
        $blogs_list = clone $allBlog;
        $blog_top = $blog_top->orderBy('view_no', 'desc')->first();
        $blogs_list = $blogs_list
            ->orderBy('view_no', 'desc')
            ->limit(5)
            ->get();

        $tags = Tag::where('tag_type', \Constants::HASTAG_BLOG)->get();

        return view('blog.blog-page', [
            'blog_top' => $blog_top,
            'blogs' => $blogs_list,
            'tags' => $tags,
        ]);
    }

    public function list()
    {
        $allBlog = Blog::with('tags', 'photo')
            ->orderBy('created_at', 'desc')
            ->paginate(9);
        return response()->json($allBlog);
    }

    public function showBlogPageByTag(Tag $tag)
    {
        $tags = Tag::where('tag_type', \Constants::HASTAG_BLOG)->get();

        return view('blog.blog-page-tag', [
            'tags' => $tags,
            'tag' => $tag,
        ]);
    }

    public function listByTag(Tag $tag)
    {
        $blogs = Blog::with('tags', 'photo')
            ->whereHas('tags', function ($query) use ($tag) {
                return $query->where('tags.id', $tag->id);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(9);
        return response()->json($blogs);
    }

    public function viewBlog($id)
    {
        $blogs = Blog::where('id', $id)
            ->with('tags')
            ->first();
        $blogs->view_no = $blogs->view_no + 1;
        $blogs->save();

        $tags = $blogs->tags;

        $blog_related = Blog::with('tags')
            ->where('id', '!=', $blogs->id)
            ->whereHas('tags', function ($query) use ($tags) {
                $query->whereIn('tags.id', array_column($tags->toArray(), 'id'));
            })
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();
        return view('blog.blog-view', [
            'blog' => $blogs,
            'blog_related' => $blog_related,
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        DB::beginTransaction();
        try {
            $blog->delete();
            DB::commit();
            return response([
                'message' => 'Delete success!',
            ]);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response(
                [
                    'message' => $exception->getMessage(),
                ],
                400,
            );
        }
    }
}
