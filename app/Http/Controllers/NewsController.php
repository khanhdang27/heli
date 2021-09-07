<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $news = News::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.news.index',[
            'news' => $news
        ]);
    }

    public function list()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(8);
        return response()->json($news);
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
            'announcement_date' => 'required',
            'title' => 'required',
            'content' => 'required',
            'file' => 'file|required'
        ]);
        DB::beginTransaction();
        try {

            $news = News::create([
                'announcement_date' => $newsValidate['announcement_date'],
                'title' => $newsValidate['title'],
                'content' => $newsValidate['content'],
            ]);
            $file = File::storeFile(
                $newsValidate['file'],
                News::class,
                $news->id,
            );

            DB::commit();
            return back()->with('success', 'Create success');

        } catch (\Throwable $th) {
            DB::rollBack();
            // dd($th);
            return back()->withErrors( 'Create error');
            //throw $th;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return View
     */
    public function show()
    {
        $news = News::query()->orderByDesc('created_at')->paginate(8);
        return view('news.news-page',[
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update (Request $request, News $news)
    {

        $newsValidate = $request->validate([
            'announcement_date' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        DB::beginTransaction();
        try {

            $news->update([
                'announcement_date' => $newsValidate['announcement_date'],
                'title' => $newsValidate['title'],
                'content' => $newsValidate['content'],
            ]);
            $old_file = File::where('fileable_type', News::class)->where('fileable_id', $news->id)->first();

            if(!empty($request['file'])){
                if (!empty($old_file)) {
                    $old_file->delete();
                }
                $file = File::storeFile(
                    $request['file'],
                    News::class,
                    $news->id,
                );
            }

            DB::commit();
            return back()->with('success', 'Create success');

        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors('Create error');
            //throw $th;
        }
    }

    public function newsDetail($id)
    {
        $news = News::where('id',$id)->first();
        return view('news.news-detail',[
            'news' => $news
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        DB::beginTransaction();
        try {
            $news->delete();
            DB::commit();
            return response([
                'message' => 'Delete success!'
            ]);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response([
                'message' => $exception->getMessage()
            ], 400);
        }
    }
}
