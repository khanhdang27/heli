<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Course;
use App\Models\CourseMembershipDiscount;
use App\Models\MembershipCourse;
use App\Models\News;
use App\Models\UserLike;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        // DB::enableQueryLog();
        $value = 1;
        $_courses = CourseMembershipDiscount::with(['membershipCourses.membership'=> function ($query) use ($value){
            $query->where('id', $value);
         }])->get();

        dd($_courses);
        $courses = Course::with('subject','tutor','courseMaterial')
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

