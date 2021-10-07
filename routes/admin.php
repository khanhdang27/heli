<?php

use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'actionLogin'])->middleware('throttle:15,10');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('backpack.auth.password.reset');
Route::post('password/reset', 'Admin\ResetPasswordController@reset');
Route::get('password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('backpack.auth.password.reset.token');
Route::post('password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('backpack.auth.password.email');

Route::middleware('auth.admin')->group(function () {
    Route::get('/', [LoginController::class, 'dashboard'])->name('dashboard');

    Route::resource('certificate', 'CertificateController');

    Route::resource('subject', 'SubjectController');

    Route::resource('tutor', 'TutorController');

    Route::get('course/{course}/rooms', 'CourseController@rooms')->name('course.room.list');
    Route::get('course/{course}/rooms/create', 'CourseController@createRoom')->name('course.room.create');
    Route::post('course/{course}/rooms', 'CourseController@storeRoom')->name('course.room.store');
    Route::get('course/{course}/rooms/{room}', 'CourseController@editRoom')->name('course.room.edit');
    Route::put('course/{course}/rooms/{room}', 'CourseController@updateRoom')->name('course.room.update');
    Route::delete('course/{course}/rooms/{room}', 'CourseController@destroyRoom')->name('course.room.destroy');

    Route::get('course/{course}/rooms/{room}/schedule', 'CourseController@listScheduleByRoom')->name('course.room.scheduler');

    Route::get('course/{course}/lecture', 'CourseController@lectures')->name('course.lecture.list');
    Route::post('course/{course}/lecture/indexing', 'CourseController@lectureIndexing')->name('course.lecture.indexing');
    Route::get('course/{course}/lecture/create', 'CourseController@createLecture')->name('course.lecture.create');
    Route::post('course/{course}/lecture', 'CourseController@storeLecture')->name('course.lecture.store');
    Route::get('course/{course}/lecture/{lecture}', 'CourseController@editLecture')->name('course.lecture.edit');
    Route::put('course/{course}/lecture/{lecture}', 'CourseController@updateLecture')->name('course.lecture.update');
    Route::delete('course/{course}/lecture/{lecture}', 'CourseController@destroyLecture')->name('course.lecture.destroy');

    Route::get('course/{course}/exam/create', 'ExamsController@create')->name('course.exam.create');
    Route::post('course/{course}/exam', 'ExamsController@store')->name('course.exam.store');
    Route::get('course/{course}/exam/{exam}', 'ExamsController@edit')->name('course.exam.edit');
    Route::put('course/{course}/exam/{exam}', 'ExamsController@update')->name('course.exam.update');
    Route::delete('course/{course}/exam/{exam}', 'ExamsController@destroy')->name('course.exam.destroy');

    Route::get('course/{course}/exam/{exam}/grade', 'PassGradeController@index')->name('course.grade.list');
    Route::get('course/{course}/exam/{exam}/grade/create', 'PassGradeController@create')->name('course.grade.create');
    Route::post('course/{course}/exam/{exam}/grade', 'PassGradeController@store')->name('course.grade.store');
    Route::get('course/{course}/exam/{exam}/grade/{grade}', 'PassGradeController@edit')->name('course.grade.edit');
    Route::put('course/{course}/exam/{exam}/grade/{grade}', 'PassGradeController@update')->name('course.grade.update');
    Route::delete('course/{course}/exam/{exam}/grade/{grade}', 'PassGradeController@destroy')->name('course.grade.destroy');

    Route::get('course/{course}/exam/{exam}/quiz', 'QuizController@index')->name('course.quiz.list');
    Route::get('course/{course}/exam/{exam}/quiz/create', 'QuizController@create')->name('course.quiz.create');
    Route::post('course/{course}/exam/{exam}/quiz', 'QuizController@store')->name('course.quiz.store');
    Route::get('course/{course}/exam/{exam}/quiz/{quiz}', 'QuizController@edit')->name('course.quiz.edit');
    Route::put('course/{course}/exam/{exam}/quiz/{quiz}', 'QuizController@update')->name('course.quiz.update');
    Route::delete('course/{course}/quiz/{quiz}', 'QuizController@destroy')->name('course.quiz.destroy');

    Route::get('course/query', 'CourseController@courseListQuery')->name('course.query');
    Route::get('course/related/{course}', 'CourseController@courseListRelated')->name('course.related.list');
    Route::post('course/related', 'CourseController@updateRelated')->name('course.related');
    Route::resource('course', 'CourseController');

    Route::get('course/{course}/exam/{exam}/quiz/{quiz}/question', 'QuestionController@index')->name('course.question.list');
    Route::get('course/{course}/exam/{exam}/quiz/{quiz}/question/create', 'QuestionController@create')->name('course.question.create');
    Route::post('course/{course}/exam/{exam}/quiz/{quiz}/question', 'QuestionController@store')->name('course.question.store');
    Route::get('course/{course}/exam/{exam}/quiz/{quiz}/question/{question}/show', 'QuestionController@show')->name('course.question.show');
    Route::get('course/{course}/exam/{exam}/quiz/{quiz}/question/{question}', 'QuestionController@edit')->name('course.question.edit');
    Route::put('course/{course}/exam/{exam}/quiz/{quiz}/question/{question}', 'QuestionController@update')->name('course.question.update');
    Route::delete('course/{course}/exam/{exam}/quiz/{quiz}/question/{question}', 'QuestionController@destroy')->name('course.question.destroy');

    Route::resource('course-material', 'CourseMaterialController');

    Route::post('question/{question}/answer', 'AnswerController@store')->name('answer.store');
    Route::post('question/{question}/answer/update', 'AnswerController@update')->name('answer.update');
    Route::delete('question/{question}/answer/{answer}', 'AnswerController@destroy')->name('answer.destroy');

    Route::resource('banner', 'BannerController');

    Route::get('profile-tutor', 'UserController@tutorProfile')->name('tutorProfile');
    Route::get('profile-moderator', 'UserController@moderatorProfile')->name('moderatorProfile');
    Route::get('profile-admin', 'UserController@adminProfile')->name('adminProfile');
    Route::post('admin-update-owner', 'UserController@adminOwner')->name('adminOwner');
    Route::resource('user', 'UserController');

    Route::resource('tag', 'TagController');

    Route::post('forum/restore/{id}', 'ManagePostController@restore')->name('forum.restore');
    Route::get('forum/review/{id}', 'ManagePostController@review')->name('forum.review');
    Route::resource('forum', 'ManagePostController');

    Route::resource('blog', 'BlogController');

    Route::resource('news', 'NewsController');

    Route::resource('roles', 'RoleController');

    Route::get('apply-discount/{id}', 'DiscountController@apply')->name('discount.apply');
    Route::put('apply-discount/{id}', 'DiscountController@storeApply')->name('discount.apply-courses');
    Route::resource('discount', 'DiscountController');

    Route::resource('price-tag', 'CourseMembershipDiscountController');

    Route::resource('membership', 'MembershipController');

    Route::resource('moderator', 'ModeratorController');

    Route::get('manager-moderator', 'UserManagerController@moderatorIndex')->name('user-manager.moderator');
    Route::get('manager-moderator/edit/{id}', 'UserManagerController@moderatorEdit')->name('user-manager.moderator.edit');
    Route::put('manager-moderator/update/{id}', 'UserManagerController@moderatorUpdate')->name('user-manager.moderator.update');

    Route::get('manager-student', 'UserManagerController@studentIndex')->name('user-manager.student');
    Route::get('manager-student/edit/{id}', 'UserManagerController@studentEdit')->name('user-manager.student.edit');
    Route::put('manager-student/update/{id}', 'UserManagerController@studentUpdate')->name('user-manager.student.update');

    Route::get('manager-tutor', 'UserManagerController@tutorIndex')->name('user-manager.tutor');
    Route::get('manager-tutor/edit/{id}', 'UserManagerController@tutorEdit')->name('user-manager.tutor.edit');
    Route::put('manager-tutor/update/{id}', 'UserManagerController@tutorUpdate')->name('user-manager.tutor.update');

    Route::get('change-status/{id}', 'UserManagerController@changeStatusUser')->name('user-manager.change-status');

    Route::get('user-subscribe', 'UserSubscribeController@listSubscribe')->name('user-subscribe');
    Route::get('user-subscribe/create', 'UserSubscribeController@create')->name('user-subscribe.create');
    Route::post('user-subscribe/subscribe', 'UserSubscribeController@addSubscribe')->name('user-subscribe.subscribe');
    Route::post('user-subscribe/unsubscribe', 'UserSubscribeController@unsubscribe')->name('user-subscribe.unsubscribe');

    Route::resource('study-session', 'StudySessionController');
    Route::resource('examination', 'ExaminationController');
    Route::get('manage-examination/index/{id}', 'ExaminationController@manageExamination')->name('manage-examination');
    Route::get('manage-examination/create/{id}', 'ExaminationController@addExamination')->name('manage-examination.create');

    Route::resource('wallet-manager', 'WalletManagerController');

    Route::resource('setting', 'SettingController');
    Route::get('setting/edit/{key}', 'SettingController@edit');
    Route::get('setting/update/{key}', 'SettingController@update');
});
