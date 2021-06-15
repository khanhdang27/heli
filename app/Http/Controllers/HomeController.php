<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Course;
use App\Models\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //   $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners = Banner::query()->orderByDesc('created_at')->first();
        $courses = Course::with('subject','tutor', 'certificate')->get();
        $courseVideo = Course::with('tutor')->first();
        $news = News::query()->orderByDesc('created_at')->limit(8)->get();
        return view('home.home-page',[
            'banners' => $banners,
            'courses' => $courses,
            'courseVideo'=>$courseVideo,
            'news' => $news
        ]);

    }
}

