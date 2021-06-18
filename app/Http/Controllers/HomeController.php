<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Course;
use App\Models\News;
use App\Models\UserLike;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners = Banner::query()->first();
        $courses = Course::with('subject','tutor','courseMaterial')
            ->with(['userLike' => function ($q){
                if (Auth::check()) {
                    return $q->where('user_id', Auth::user()->id );
                }
            }])
            ->get();
        $courseVideo = Course::with('tutor')->first();
        $news = News::query()->orderByDesc('created_at')->limit(8)->get();
        return view('home.home-page',[
            'banners' => $banners,
            'courses' => $courses,
            'courseVideo'=>$courseVideo,
            'news' => $news,
        ]);
    }
}

