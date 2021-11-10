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

    Route::get('lecture/showLecture', 'LectureController@showLecture')->name('lecture.showLecture');
    Route::resource('lecture', 'LectureController');

    Route::post('exam/handleSubmit', 'StudentExaminationController@handleSubmitAnswer')->name('exam.handleSubmitAnswer');

    Route::get('exam/{exams}', 'LectureController@showExam')->name('exam.showLecture');

    Route::get('exam/readingAssessment/{exams}', 'ExaminationController@getReadingAssessmentQuestionsClient')->name('exam.getReadingAssessmentQuestionsClient');
    Route::get('exam/readingExercise/{exams}', 'ExaminationController@getReadingExerciseQuestionsClient')->name('exam.getReadingExerciseQuestionsClient');
    Route::get('exam/readingQuiz/{exams}', 'ExaminationController@getReadingQuizQuestionsClient')->name('exam.getReadingQuizQuestionsClient');

    Route::get('exam/writingAssessment/{exams}', 'ExaminationController@getWritingAssessmentQuestionsClient')->name('exam.getWritingAssessmentQuestionsClient');
    Route::get('exam/writingExercise/{exams}', 'ExaminationController@getWritingExerciseQuestionsClient')->name('exam.getWritingExerciseQuestionsClient');
    Route::get('exam/writingQuiz/{exams}', 'ExaminationController@getWritingQuizQuestionsClient')->name('exam.getWritingQuizQuestionsClient');

    Route::get('exam/listenAssessment/{exams}', 'ExaminationController@getListeningAssessmentQuestionsClient')->name('exam.getListeningAssessmentQuestionsClient');
    Route::get('exam/listenExercise/{exams}', 'ExaminationController@getListeningExerciseQuestionsClient')->name('exam.getListeningExerciseQuestionsClient');
    Route::get('exam/listenQuiz/{exams}', 'ExaminationController@getListeningQuizQuestionsClient')->name('exam.getListeningQuizQuestionsClient');
    Route::get('course/{course}/exam/{exam}/quiz/{quiz}', 'CourseController@showExam')->name('showExam');

    Route::get('exam/speakingAssessment/{exams}', 'ExaminationController@getSpeakingAssessmentQuestionsClient')->name('exam.getSpeakingAssessmentQuestionsClient');
    Route::get('exam/speakingExercise/{exams}', 'ExaminationController@getSpeakingExerciseQuestionsClient')->name('exam.getSpeakingExerciseQuestionsClient');
    Route::get('exam/speakingQuiz/{exams}', 'ExaminationController@getSpeakingQuizQuestionsClient')->name('exam.getSpeakingQuizQuestionsClient');

    Route::get('live/{room_live_course_id}', 'LiveController@show')->name('live_show');

    Route::get('course/related/{course}', 'CourseController@courseListRelatedClient')->name('course.related.list');

    Route::get('token/skipPrice', 'SkipLevelController@skipPrice')->name('token.skipPrice');
    Route::post('token/skipPrice', 'SkipLevelController@paymentSkipLevel')->name('token.skipPrice.pay');

    Route::prefix('my/')
        ->name('user.')
        ->group(function () {
            Route::get('course', 'CourseController@my')->name('course');
            Route::get('wishlist', 'HomeController@wishlist')->name('wishlist');
            Route::get('calendar', 'ScheduleController@index')->name('calendar');
            Route::get('calendar/{month}', 'ScheduleController@getMonth')->name('getMonth');
            Route::get('wallet', 'WalletController@index')->name('wallet');
            Route::get('wallet/top-up', 'WalletController@topUpIndex')->name('top-up');
            Route::post('wallet/top-up/top-up-to', 'WalletController@topUpToWallet')->name('top-up-to');
            Route::get('wallet/top-up/success', 'WalletController@topUpSuccess')->name('topUp-success');
            Route::get('wallet/list', 'WalletController@listTopUp')->name('wallet.listHistory');
            Route::get('wallet/list-payment', 'WalletController@listPayment')->name('wallet.listPayment');
            Route::get('wallet/payment-history/{order}', 'WalletController@paymentHistory')->name('wallet.payment-history');
            Route::get('wallet/top-up-history/{transaction}', 'WalletController@topUpHistory')->name('top-up-history');

            Route::get('payment/{product_id}', 'WalletController@payment')->name('payment');
            Route::get('confirm-payment/{product_id}/{room}', 'WalletController@confirmPayment')->name('confirm');
            Route::get('confirm-payment/payment-success/{product_id}/{room}', 'WalletController@paymentSuccess')->name('success');
            Route::get('success/{course_id}', 'WalletController@success')->name('pay-success');

            Route::get('paywithpaypal', 'PaypalController@payWithPaypal')->name('paywithpaypal');
            Route::post('paypal', 'PaypalController@postPaymentWithpaypal')->name('paypal');
            Route::get('paypal', 'PaypalController@getPaymentStatus')->name('status');
        });

    Route::get('add-visa', 'WalletController@addVisa')->name('add-visa');
    Route::post('store-card', 'WalletController@storeCard')->name('store-card');
});
