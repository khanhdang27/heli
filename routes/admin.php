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
    Route::delete('course/{course}/lecture/{lecture}/destroy', 'CourseController@destroyLecture')->name('course.lecture.destroy');

    Route::get('/course/{course}/examination/create', 'ExaminationController@create')->name('course.examination.create');
    Route::post('/course/{course}/examination', 'ExaminationController@store')->name('course.examination.store');
    Route::get('/course/{course}/examination/{exam}/edit', 'ExaminationController@edit')->name('course.examination.edit');
    Route::put('/course/{course}/examination/{exam}', 'ExaminationController@update')->name('course.examination.update');
    Route::delete('/course/{course}/examination/{exam}', 'ExaminationController@destroy')->name('course.examination.destroy');
    
    Route::get('course/{course}/exam/{exam}/grade', 'PassGradeController@index')->name('course.grade.list');
    Route::get('course/{course}/exam/{exam}/grade/create', 'PassGradeController@create')->name('course.grade.create');
    Route::post('course/{course}/exam/{exam}/grade', 'PassGradeController@store')->name('course.grade.store');
    Route::get('course/{course}/exam/{exam}/grade/{grade}', 'PassGradeController@edit')->name('course.grade.edit');
    Route::put('course/{course}/exam/{exam}/grade/{grade}', 'PassGradeController@update')->name('course.grade.update');
    Route::delete('course/{course}/exam/{exam}/grade/{grade}', 'PassGradeController@destroy')->name('course.grade.destroy');

    Route::get('course/query', 'CourseController@courseListQuery')->name('course.query');
    Route::get('course/related/{course}', 'CourseController@courseListRelated')->name('course.related.list');
    Route::post('course/related', 'CourseController@updateRelated')->name('course.related');
    Route::resource('course', 'CourseController');

    // =============== Question Reading =======================
    Route::post('quiz/{quiz}/question/reading', 'ReadingQuestionController@store')->name('quiz.question.reading.store');
    Route::post('quiz/{quiz}/question/{question}/reading', 'ReadingQuestionController@update')->name('quiz.question.reading.update');
    Route::delete('quiz/{quiz}/question/{question}/reading', 'ReadingQuestionController@destroy')->name('quiz.question.reading.destroy');

    Route::post('question/reading/answer', 'ReadingAnswerController@store')->name('reading.answer.store');
    Route::post('question/reading/answer/{answer}', 'ReadingAnswerController@update')->name('reading.answer.update');
    Route::delete('question/reading/answer/{answer}', 'ReadingAnswerController@destroy')->name('reading.answer.destroy');

    // =============== Question Writing =======================
    // Assessment
    Route::post('quiz/{quiz}/question/assessment/writing', 'WritingAssessmentQuestionController@store')->name('quiz.question.writing.assessment.store');
    Route::post('quiz/{quiz}/question/{question}/assessment/writing', 'WritingAssessmentQuestionController@update')->name('quiz.question.writing.assessment.update');
    Route::delete('quiz/{quiz}/question/{question}/assessment/writing', 'WritingAssessmentQuestionController@destroy')->name('quiz.question.writing.assessment.destroy');

    Route::post('question/assessment/writing/answer', 'WritingAssessmentAnswerController@store')->name('writing.assessment.answer.store');
    Route::post('question/assessment/writing/answer/{answer}', 'WritingAssessmentAnswerController@update')->name('writing.assessment.answer.update');
    Route::delete('question/assessment/writing/answer/{answer}', 'WritingAssessmentAnswerController@destroy')->name('writing.assessment.answer.destroy');

    // Quiz
    Route::post('quiz/{quiz}/question/quiz/writing', 'WritingQuizQuestionController@store')->name('quiz.question.writing.quiz.store');
    Route::post('quiz/{quiz}/question/{question}/quiz/writing', 'WritingQuizQuestionController@update')->name('quiz.question.writing.quiz.update');
    Route::delete('quiz/{quiz}/question/{question}/quiz/writing', 'WritingQuizQuestionController@destroy')->name('quiz.question.writing.quiz.destroy');

    // =============== Question Listening =======================
    Route::post('quiz/{quiz}/question/assessment/listening', 'ListenAssessmentQuestionController@store')->name('quiz.question.listening.assessment.store');
    Route::post('quiz/{quiz}/question/{question}/assessment/listening', 'ListenAssessmentQuestionController@update')->name('quiz.question.listening.assessment.update');
    Route::delete('quiz/{quiz}/question/{question}/assessment/listening', 'ListenAssessmentQuestionController@destroy')->name('quiz.question.listening.assessment.destroy');

    Route::post('question/assessment/listening/answer', 'ListenAssessmentAnswerController@store')->name('listening.assessment.answer.store');
    Route::post('question/assessment/listening/answer/{answer}', 'ListenAssessmentAnswerController@update')->name('listening.assessment.answer.update');
    Route::delete('question/assessment/listening/answer/{answer}', 'ListenAssessmentAnswerController@destroy')->name('listening.assessment.answer.destroy');

    // =============== Question Speaking =======================
    // ===================== Assessment =====================================
    Route::post('quiz/{quiz}/question/assessment/speaking', 'SpeakAssessmentQuestionController@store')->name('quiz.question.speaking.assessment.store');
    Route::post('quiz/{quiz}/question/{question}/assessment/speaking', 'SpeakAssessmentQuestionController@update')->name('quiz.question.speaking.assessment.update');
    Route::delete('quiz/{quiz}/question/{question}/assessment/speaking', 'SpeakAssessmentQuestionController@destroy')->name('quiz.question.speaking.assessment.destroy');

    Route::post('question/assessment/speaking/answer', 'SpeakAssessmentAnswerController@store')->name('speaking.assessment.answer.store');
    Route::post('question/assessment/speaking/answer/{answer}', 'SpeakAssessmentAnswerController@update')->name('speaking.assessment.answer.update');
    Route::delete('question/assessment/speaking/answer/{answer}', 'SpeakAssessmentAnswerController@destroy')->name('speaking.assessment.answer.destroy');
    // ===================== Exercises =====================================
    Route::post('quiz/{quiz}/question/exercises/speaking', 'SpeakExercisesQuestionController@store')->name('quiz.question.speaking.exercises.store');
    Route::post('quiz/{quiz}/question/{question}/exercises/speaking', 'SpeakExercisesQuestionController@update')->name('quiz.question.speaking.exercises.update');
    Route::delete('quiz/{quiz}/question/{question}/exercises/speaking', 'SpeakExercisesQuestionController@destroy')->name('quiz.question.speaking.exercises.destroy');

    // ===================== Quiz ===================================
    Route::post('quiz/{quiz}/question/quiz/speaking', 'SpeakQuizQuestionController@store')->name('quiz.question.speaking.quiz.store');
    Route::post('quiz/{quiz}/question/{question}/quiz/speaking', 'SpeakQuizQuestionController@update')->name('quiz.question.speaking.quiz.update');
    Route::delete('quiz/{quiz}/question/{question}/quiz/speaking', 'SpeakQuizQuestionController@destroy')->name('quiz.question.speaking.quiz.destroy');

    // =============== End Question =======================
    Route::post('passage', 'PassageController@store')->name('passage.store');
    Route::post('passage/{passage}', 'PassageController@update')->name('passage.update');

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
    Route::resource('wallet-manager', 'WalletManagerController');

    Route::resource('setting', 'SettingController');
    Route::get('setting/edit/{key}', 'SettingController@edit');
    Route::get('setting/update/{key}', 'SettingController@update');
});
