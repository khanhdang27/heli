<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $news = News::query()->get();
        return view('admin.news.index',[
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $newsValidate = $request->validate([
           'title' => 'required',
           'content' => 'required',
           'file' => 'file'
        ]);

        $fileController = new FileController();
        $file_id = $fileController->store($request);

        $news = new News([
            'title' => $newsValidate['title'],
            'content' => $newsValidate['content'],
            'file_id' => $file_id
        ]);
        $news->save();
        return back()->with('success', 'Create success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return View
     */
    public function show()
    {
        $news = News::query()->orderByDesc('created_at')->get();
        return view('news-page',[
            'news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return View
     */
    public function edit(News $news)
    {
        return view('admin.news.edit',[
           'news' => $news
        ]);
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\News  $news
    //  * @return \Illuminate\Http\RedirectResponse
    //  */
    // public function update(Request $request, News $news)
    // {
    //     $news->update(
    //         $request->validate([
    //             'title' => 'required',
    //             'content' => 'required',
    //             'file' => 'file'
    //         ])
    //     );
    //     return redirect()->route('admin.news.index')
    //         ->with('success','Update success');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
