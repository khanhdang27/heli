<?php

use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('', 'site/', 301);

Route::prefix('site/')->name('site.')->group(function () {
    Route::get('', function () {
        return view('HomePage.home-page');
    })->name('home');

    Route::post('register', 'Auth\RegisterController@register')->name('register');

    Route::post('login', 'Auth\LoginController@login')->name('userLogin');

    Route::get('logout', 'Auth\LoginController@logout')->name('userLogout');


    Route::get('news', function () {
        return view('news-page');
    })->name('news');

    Route::get('teams', function () {
        return view('team-page');
    })->name('teams');

    Route::get('subject', function () {
        return view('subject-page');
    })->name('subject');

    Route::get('course', function () {
        return view('course.course-page');
    })->name('course');

    Route::get('lesson', function () {
        return view('lesson-page');
    })->name('lesson');

    Route::get('blog', function () {
        return view('blog-page');
    })->name('blog');

    Route::get('forum', function () {
        return view('forum.forum-page');
    })->name('forum');

    Route::get('forumAnswer', function () {
        return view('forum.forum-page2');
    })->name('forumAnswers');


    Route::get('/forgot-password', function () {
        return view('login.forgot-password');
    })->name('forgot-password');

    Route::post('/forgot-password', function (Illuminate\Http\Request $request) {
        $random = Str::random(10);
        $request->validate(['email' => 'required|email']);
        $user = User::where('email', $request->get('email'))->first();
        $user->password = $random;

        $user->save();

        $send_mail = new \App\Mail\SendMail();
        $send_mail = $send_mail->subject('Account')->title('Your password')->body("password: $random")->view('mail.test_mail');
        \Mail::to($request->get('email'))->send($send_mail);
    })->name('reset-password');
});

Route::prefix('user/')->name('user.')->group(function () {
    Route::get('my-course', function () {
        return view('my-course-page');
    })->name('my-course');
    Route::get('calendar', function () {
        return view('calendar-page');
    })->name('calendar');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [LoginController::class, 'login'])
        ->name('login');
    Route::post('login', [LoginController::class, 'actionLogin']);

    Route::middleware('auth')->group(function () {
        Route::get('/', [LoginController::class, 'dashboard'])
            ->name('dashboard');
        Route::resource('subject', 'SubjectController');

        Route::resource('tutor', 'TutorController');

        Route::resource('course', 'CourseController');

        // Route::resource('material', 'CourseMaterialController');

        Route::resource('banner', 'BannerController');

//        Route::get('banner/index',[BannerController::class, 'index'] )->name('banner.index');
//        Route::get('banner/create',[BannerController::class, 'create'] )->name('banner.create');
//        Route::post('banner/store', [BannerController::class, 'store'])->name('banner.store');
//        Route::post('banner/edit', [BannerController::class, 'edit'])->name('banner.edit');
//        Route::post('banner/destroy', [BannerController::class, 'destroy'])->name('banner.destroy');

        Route::resource('user', 'UserController');

        // Route::get('course/{course} /video', [CourseController::class, 'videoList'])
        //     ->name('course.video.index');
        // Route::get('course/{course}/video/create', [CourseController::class, 'createVideo'])
        //     ->name('course.video.create');
        // Route::post('course/{course}/video', [CourseController::class, 'storeVideo'])
        //     ->name('course.video.store');
        // Route::get('course/{course}/video/{course_video}/download', [CourseController::class, 'downloadVideo'])
        //     ->name('course.video.download');
        // Route::get('course/{course}/video/{course_video}/edit', [CourseController::class, 'editVideo'])
        //     ->name('course.video.edit');

        // Route::put('course/{course}/video/{course_video}', [CourseController::class, 'updateVideo'])
        //     ->name('course.video.update');

        // Route::delete('course/{course}/video/{course_video}', [CourseController::class, 'destroyVideo'])
        //     ->name('course.video.destroy');

        Route::put('/subject/updateActive/{id}', [SubjectController::class, 'updateActive'])
            ->name('subject.updateActive');
    });
});

//Auth::routes();
