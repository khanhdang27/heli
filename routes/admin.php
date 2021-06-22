<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
});
