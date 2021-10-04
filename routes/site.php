<?php

use Illuminate\Support\Facades\Route;

Route::get('', 'HomeController@index')->name('home');

Route::get('faq', function () {
    return view('home.faq');
})->name('faq');
Route::get('privacy-policy', function () {
    return view('home.privacy-policy');
})->name('privacy-policy');
Route::get('terms-conditions', function () {
    return view('home.terms-conditions');
})->name('terms-conditions');

Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::post('login', 'Auth\LoginController@login')
    ->name('userLogin')
    ->middleware('throttle:30,10');
Route::get('logout', 'Auth\LoginController@logout')->name('userLogout');
Route::post('password/update', 'Auth\ChangePasswordController@update')->name('userUpdatePassword');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('backpack.auth.password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('backpack.auth.password.reset.token');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('backpack.auth.password.email');

Route::get('/loginby/{provider}', 'SocialAccountController@redirectToProvider')->name('socialLogin');
Route::get('/loginby/{provide}/callback', 'SocialAccountController@handleProviderCallback');

Route::get('news/list', 'NewsController@list')->name('news.list');
Route::get('news', 'NewsController@show')->name('news');
Route::get('news/{id}', 'NewsController@newsDetail')->name('news-detail');
Route::get('teams', function () {
    return view('team-page');
})->name('teams');

Route::resource('subject', 'SubjectController');

Route::resource('certificate', 'CertificateController');
Route::get('document/{id}', 'CertificateController@documentDetail')->name('document');
Route::get('course/search', 'CourseController@search')->name('course.search');
Route::get('course/lectures/{course}', 'CourseController@lectureList')->name('course.lectureList');
Route::resource('course', 'CourseController')->except(['index', 'update', 'store', 'delete']);

Route::get('blog-view', function () {
    return view('blog.blog-view');
})->name('blog-view');

Route::get('blog/list', 'BlogController@list')->name('blog.list');
Route::get('show-blog', 'BlogController@showBlogPage')->name('show-blog');
Route::get('show-blog/tag/{tag}', 'BlogController@showBlogPageByTag')->name('show-blog-tag');
Route::get('blog/tag/{tag}', 'BlogController@listByTag')->name('blog.list.tag');

Route::get('view-blog/{id}', 'BlogController@viewBlog')->name('view-blog');

Route::get('forumAnswer', function () {
    return view('forum.post-view');
})->name('forumAnswers');
Route::post('subscribe', 'UserSubscribeController@customerSubscribe')->name('customerSubscribe');

Route::middleware('auth')->group(function () {
    Route::get('file/download/{file}', 'FileController@download')->name('file.download');

    Route::post('payment/add-payment', 'PaymentController@addPayment')->name('payment.add-payment');
    Route::resource('payment', 'PaymentController');
    Route::get('order/addCard', 'OrderController@addCard')->name('order.addCard');
    Route::get('order/updateCard', 'OrderController@updateCard')->name('order.updateCard');
    Route::resource('order', 'OrderController');
    Route::get('payment-history', 'OrderController@paymentHistory')->name('payment-history');

    Route::resource('post', 'PostController');
    Route::get('pin-comment/{post_id}/{comment_id}', 'PostController@pinComment')->name('pinComment');
    Route::get('show-post/tag/{tag}', 'PostController@showPostByTag')->name('show-post-tag');
    Route::resource('comment', 'CommentController');
    Route::resource('user-like', 'UserLikeController');
    Route::resource('profile', 'ProfileController');
    Route::put('uploadAvatar', 'ProfileController@uploadAvatar')->name('uploadAvatar');
    Route::resource('rating', 'RatingController');

    Route::resource('lecture', 'LectureController');

    Route::post('submit-exam', 'ExaminationController@submitExamination')->name('submit-examination');
    Route::get('unsubmit-exam/{id}', 'ExaminationController@unSubmitExamination')->name('unsubmit-examination');

    Route::get('live/{room_live_course_id}', 'LiveController@show')->name('live_show');

    Route::prefix('my/')->name('user.')->group(function () {
        Route::get('course', 'CourseController@my')->name('course');
        Route::get('wishlist', 'HomeController@wishlist')->name('wishlist');
        Route::get('calendar', 'ScheduleController@index')->name('calendar');
        Route::get('calendar/{month}', 'ScheduleController@getMonth')->name('getMonth');
        Route::get('wallet', 'WalletController@index')->name('wallet');
        Route::get('wallet/top-up', 'WalletController@topUpIndex')->name('top-up');
        Route::post('wallet/top-up/top-up-to', 'WalletController@topUpToWallet')->name('top-up-to');
        Route::get('wallet/top-up/success', 'WalletController@topUpSuccess')->name('topUp-success');
        Route::get('wallet/list', 'WalletController@listTopUp')->name('wallet.list');
        Route::get('wallet/payment-history', 'WalletController@paymentHistory')->name('payment-history');
        Route::get('wallet/top-up-history/{transaction}', 'WalletController@topUpHistory')->name('top-up-history');

    });
    Route::get('payment', 'WalletController@payment')->name('payment');
    Route::get('confirm-payment', 'WalletController@confirmPayment')->name('confirm');
    Route::get('add-visa', 'WalletController@addVisa')->name('add-visa');
    Route::post('store-card', 'WalletController@storeCard')->name('store-card');
});
