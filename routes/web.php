<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'language'], function () {
    Route::prefix('site/')->name('site.')->group(function () {

        Route::get('', 'HomeController@index')->name('home');

        Route::post('register', 'Auth\RegisterController@register')->name('register');
        Route::post('login', 'Auth\LoginController@login')->name('userLogin');
        Route::get('logout', 'Auth\LoginController@logout')->name('userLogout');
        Route::post('password/update', 'Auth\ChangePasswordController@update')->name('userUpdatePassword');

        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('backpack.auth.password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('backpack.auth.password.reset.token');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('backpack.auth.password.email');

        Route::get('news', 'NewsController@show')->name('news');
        Route::get('news/{id}', 'NewsController@newsDetail')->name('news-detail');
        Route::get('teams', function () {
            return view('team-page');
        })->name('teams');

        Route::resource('subject', 'SubjectController');

        Route::get('get-subject-by-parent-id/{id}', 'SubjectController@getSubjectByParentId')->name('get_subject_by_parent');

        Route::resource('certificate', 'CertificateController');

        Route::resource('course', 'CourseController');

        Route::get('lesson', function () {
            return view('course.lesson-page');
        })->name('lesson');

        Route::get('blog-view', function () {
            return view('blog.blog-view');
        })->name('blog-view');

        Route::get('show-blog', 'BlogController@showBlogPage')->name('show-blog');
        Route::get('view-blog/{id}', 'BlogController@viewBlog')->name('view-blog');

        Route::get('forumAnswer', function () {
            return view('forum.post-view');
        })->name('forumAnswers');

        Route::middleware('auth')->group(function () {

            Route::post('payment/add-payment', 'PaymentController@addPayment')->name('payment.add-payment');
            Route::resource('payment', 'PaymentController');
            Route::resource('order', 'OrderController');
            Route::resource('post', 'PostController');
            Route::resource('comment', 'CommentController');
            Route::resource('user-like', 'UserLikeController');
            Route::resource('profile', 'ProfileController');

            Route::prefix('my/')->name('user.')->group(function () {

                Route::get('course', 'CourseController@my')->name('course');

                Route::get('calendar', function () {
                    return view('calendar-page');
                })->name('calendar');
            });
        });
    });

    Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

    Route::resource('file', 'FileController');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('login', [LoginController::class, 'login'])
            ->name('login');
        Route::post('login', [LoginController::class, 'actionLogin']);
        Route::get('logout', [LoginController::class, 'logout'])
                ->name('logout');

        Route::middleware('auth.admin')->group(function () {
            Route::get('/', [LoginController::class, 'dashboard'])
                ->name('dashboard');

            Route::resource('certificate', 'CertificateController');

            Route::resource('subject', 'SubjectController');

            //        Route::put('/subject/updateActive/{id}', [SubjectController::class, 'updateActive'])
            //            ->name('subject.updateActive');

            Route::resource('tutor', 'TutorController');

            Route::resource('course', 'CourseController');

            Route::resource('course-material', 'CourseMaterialController');

            Route::resource('banner', 'BannerController');

            Route::resource('user', 'UserController');

            Route::resource('tag', 'TagController');

            Route::resource('blog', 'BlogController');

            Route::resource('news', 'NewsController');

            Route::resource('roles', 'RoleController');

            Route::resource('discount', 'DiscountController');

        });
    });
});

Auth::routes();

