<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

    Route::resource('tutor', 'TutorController');

    Route::get('course/{course}/rooms', 'CourseController@rooms')->name('course.room.list');
    Route::get('course/{course}/rooms/create', 'CourseController@createRoom')->name('course.room.create');
    Route::post('course/{course}/rooms', 'CourseController@storeRoom')->name('course.room.store');
    Route::get('course/{course}/rooms/{room}', 'CourseController@editRoom')->name('course.room.edit');
    Route::put('course/{course}/rooms/{room}', 'CourseController@updateRoom')->name('course.room.update');
    Route::delete('course/{course}/rooms/{room}', 'CourseController@destroyRoom')->name('course.room.destroy');

    Route::get('course/{course}/rooms/{room}/schedule', 'CourseController@listScheduleByRoom')->name('course.room.scheduler');
    Route::get('course/{course}/lecture', 'CourseController@lectures')->name('course.lecture.list');
    Route::get('course/{course}/lecture/create', 'CourseController@createLecture')->name('course.lecture.create');
    Route::post('course/{course}/lecture', 'CourseController@storeLecture')->name('course.lecture.store');
    Route::get('course/{course}/lecture/{lecture}', 'CourseController@editLecture')->name('course.lecture.edit');
    Route::put('course/{course}/lecture/{lecture}', 'CourseController@updateLecture')->name('course.lecture.update');
    Route::delete('course/{course}/lecture/{lecture}', 'CourseController@destroyLecture')->name('course.lecture.destroy');
    Route::resource('course', 'CourseController');

    Route::resource('course-material', 'CourseMaterialController');

    Route::resource('banner', 'BannerController');

    Route::resource('user', 'UserController');

    Route::resource('tag', 'TagController');

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
});
