<?php

use Illuminate\Support\Facades\Route;


Route::get('', 'HomeController@index')->name('home');

Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::post('login', 'Auth\LoginController@login')->name('userLogin');
Route::get('logout', 'Auth\LoginController@logout')->name('userLogout');
Route::post('password/update', 'Auth\ChangePasswordController@update')->name('userUpdatePassword');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('backpack.auth.password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('backpack.auth.password.reset.token');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('backpack.auth.password.email');

Route::get('/loginby/{provider}', 'SocialAccountController@redirectToProvider')->name('socialLogin');
Route::get('/loginby/{provide}/callback', 'SocialAccountController@handleProviderCallback');

Route::get('news', 'NewsController@show')->name('news');
Route::get('news/{id}', 'NewsController@newsDetail')->name('news-detail');
Route::get('teams', function () {
    return view('team-page');
})->name('teams');

Route::resource('subject', 'SubjectController');

Route::resource('certificate', 'CertificateController');
Route::get('document/{id}','CertificateController@documentDetail')->name('document');
Route::get('course/search', 'CourseController@search')->name('course.search');
Route::resource('course', 'CourseController')->except(['index', 'update', 'store', 'delete']);

Route::get('blog-view', function () {
    return view('blog.blog-view');
})->name('blog-view');

Route::get('show-blog', 'BlogController@showBlogPage')->name('show-blog');
Route::get('show-blog/tag/{tag}', 'BlogController@showBlogPageByTag')->name('show-blog-tag');

Route::get('view-blog/{id}', 'BlogController@viewBlog')->name('view-blog');

Route::get('forumAnswer', function () {
    return view('forum.post-view');
})->name('forumAnswers');

Route::middleware('auth')->group(function () {

    Route::get('file/download/{file}', 'FileController@download')->name('file.download');

    Route::post('payment/add-payment', 'PaymentController@addPayment')->name('payment.add-payment');
    Route::resource('payment', 'PaymentController');
    Route::resource('order', 'OrderController');
    Route::resource('post', 'PostController');
    Route::get('pin-comment/{post_id}/{comment_id}','PostController@pinComment')->name('pinComment');
    Route::resource('comment', 'CommentController');
    Route::resource('user-like', 'UserLikeController');
    Route::resource('profile', 'ProfileController');
    Route::put('uploadAvatar','ProfileController@uploadAvatar')->name('uploadAvatar');
    Route::resource('rating', 'RatingController');

    Route::resource('lecture', 'LectureController');

    Route::post('submit-exam', 'ExaminationController@submitExamination')->name('submit-examination');
    Route::get('unsubmit-exam/{id}', 'ExaminationController@unSubmitExamination')->name('unsubmit-examination');

    Route::get('live/{id}', 'LiveController@show')->name('live_show');

    Route::prefix('my/')->name('user.')->group(function () {
        Route::get('course', 'CourseController@my')->name('course');
        Route::get('calendar', 'ScheduleController@index')->name('calendar');
    });
});
