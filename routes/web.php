<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\SubjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::group(['middleware' => 'language'], function () {
    Route::prefix('site/')->name('site.')->group(function () {
        Route::get('', function () {
            return view('home.home-page');
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

//    Route::get('subject', function () {
//        return view('subject-page');
//    })->name('subject');

        Route::resource('subject', 'Site\SubjectController');

        Route::get('get-subject-by-parent-id/{id}', 'Site\SubjectController@getSubjectByParentId')->name('get_subject_by_parent');

        Route::resource('certificate', 'Site\CertificateController');

//    Route::get('subject/{id}',[SubjectController::class,'show'])
//    ->name('subjects');

        Route::get('course', function () {
            return view('course.course-page');
        })->name('course');

        Route::get('lesson', function () {
            return view('course.lesson-page');
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
    Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

Route::prefix('user/')->name('user.')->group(function () {
    Route::get('my-course', function () {
        return view('course.my-course-page');
    })->name('my-course');
    Route::get('calendar', function () {
        return view('calendar-page');
    })->name('calendar');
    Route::resource('post','PostController');
});
});
Route::resource('file', 'FileController');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [LoginController::class, 'login'])
        ->name('login');
    Route::post('login', [LoginController::class, 'actionLogin']);

    Route::middleware('auth')->group(function () {
        Route::get('/', [LoginController::class, 'dashboard'])
            ->name('dashboard');

        Route::resource('certificate','Admin\CertificateController');

        Route::resource('subject', 'Admin\SubjectController');

//        Route::put('/subject/updateActive/{id}', [SubjectController::class, 'updateActive'])
//            ->name('subject.updateActive');

        Route::resource('tutor', 'Admin\TutorController');

        Route::resource('course', 'Admin\CourseController');

        Route::resource('course-material', 'Admin\CourseMaterialController');
        // Route::get('course-material/1/edit', 'Admin\CourseMaterialController@edit')->name('course-material.edit');

        Route::resource('banner', 'Admin\BannerController');

        Route::resource('user', 'Admin\UserController');

        Route::resource('post-tags', 'Admin\PostTagsController');

        Route::get('course/{course}/video', [CourseController::class, 'videoList'])
            ->name('course.video.index');
        Route::get('course/{course}/video/create', [CourseController::class, 'createVideo'])
            ->name('course.video.create');
        Route::post('course/{course}/video', [CourseController::class, 'storeVideo'])
            ->name('course.video.store');
        Route::get('course/{course}/video/{course_video}/download', [CourseController::class, 'downloadVideo'])
            ->name('course.video.download');
        Route::get('course/{course}/video/{course_video}/edit', [CourseController::class, 'editVideo'])
            ->name('course.video.edit');

        Route::put('course/{course}/video/{course_video}', [CourseController::class, 'updateVideo'])
            ->name('course.video.update');

        Route::delete('course/{course}/video/{course_video}', [CourseController::class, 'destroyVideo'])
            ->name('course.video.destroy');
    });
});

// //Auth::routes();


//Up videos

Route::get('put', function() {
    Storage::cloud()->put('test.txt', 'Hello World');
    return 'File was saved to Google Drive';
});

Route::get('put-existing', function() {
    $filename = 'laravel.png';
    $filePath = public_path($filename);
    $fileData = File::get($filePath);

    Storage::cloud()->put($filename, $fileData);
    return 'File was saved to Google Drive';
});

Route::get('list', function() {
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    //return $contents->where('type', '=', 'dir'); // directories
    return $contents->where('type', '=', 'file'); // files
});

Route::get('list-folder-contents', function() {
    // The human readable folder name to get the contents of...
    // For simplicity, this folder is assumed to exist in the root directory.
    $folder = 'Test Dir';

    // Get root directory contents...
    $contents = collect(Storage::cloud()->listContents('/', false));

    // Find the folder you are looking for...
    $dir = $contents->where('type', '=', 'dir')
        ->where('filename', '=', $folder)
        ->first(); // There could be duplicate directory names!

    if ( ! $dir) {
        return 'No such folder!';
    }

    // Get the files inside the folder...
    $files = collect(Storage::cloud()->listContents($dir['path'], false))
        ->where('type', '=', 'file');

    return $files->mapWithKeys(function($file) {
        $filename = $file['filename'].'.'.$file['extension'];
        $path = $file['path'];

        // Use the path to download each file via a generated link..
        // Storage::cloud()->get($file['path']);

        return [$filename => $path];
    });
});

Route::get('get', function() {
   // $filename = 'test.txt';
    $path = '1keP4h_tsyB035qdE340mHfwNF5cJI6ow';

    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    $file = $contents
        ->where('type', '=', 'file')
        ->where('path', '=', pathinfo($path, PATHINFO_FILENAME))
        ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
        ->first(); // there can be duplicate file names!

    //return $file; // array with file info

    $rawData = Storage::cloud()->get($file['path']);

    return response($rawData, 200)
        ->header('ContentType', $file['mimetype'])
        ->header('Content-Disposition', "attachment; filename='$filename'");
});

Route::get('put-get-stream', function() {
    // Use a stream to upload and download larger files
    // to avoid exceeding PHP's memory limit.

    // Thanks to @Arman8852's comment:
    // https://github.com/ivanvermeyen/laravel-google-drive-demo/issues/4#issuecomment-331625531
    // And this excellent explanation from Freek Van der Herten:
    // https://murze.be/2015/07/upload-large-files-to-s3-using-laravel-5/

    // Assume this is a large file...
    $filename = 'laravel.png';
    $filePath = public_path($filename);

    // Upload using a stream...
    Storage::cloud()->put($filename, fopen($filePath, 'r+'));

    // Get file listing...
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    // Get file details...
    $file = $contents
        ->where('type', '=', 'file')
        ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
        ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
        ->first(); // there can be duplicate file names!

    //return $file; // array with file info

    // Store the file locally...
    //$readStream = Storage::cloud()->getDriver()->readStream($file['path']);
    //$targetFile = storage_path("downloaded-{$filename}");
    //file_put_contents($targetFile, stream_get_contents($readStream), FILE_APPEND);

    // Stream the file to the browser...
    $readStream = Storage::cloud()->getDriver()->readStream($file['path']);

    return response()->stream(function () use ($readStream) {
        fpassthru($readStream);
    }, 200, [
        'Content-Type' => $file['mimetype'],
        //'Content-disposition' => 'attachment; filename="'.$filename.'"', // force download?
    ]);
});

Route::get('create-dir', function() {
    Storage::cloud()->makeDirectory('Test Dir');
    return 'Directory was created in Google Drive';
});

Route::get('create-sub-dir', function() {
    // Create parent dir
    Storage::cloud()->makeDirectory('Test Dir');

    // Find parent dir for reference
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    $dir = $contents->where('type', '=', 'dir')
        ->where('filename', '=', 'Test Dir')
        ->first(); // There could be duplicate directory names!

    if ( ! $dir) {
        return 'Directory does not exist!';
    }

    // Create sub dir
    Storage::cloud()->makeDirectory($dir['path'].'/Sub Dir');

    return 'Sub Directory was created in Google Drive';
});

Route::get('put-in-dir', function() {
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    $dir = $contents->where('type', '=', 'dir')
        ->where('filename', '=', 'Test Dir')
        ->first(); // There could be duplicate directory names!

    if ( ! $dir) {
        return 'Directory does not exist!';
    }

    Storage::cloud()->put($dir['path'].'/test.txt', 'Hello World');

    return 'File was created in the sub directory in Google Drive';
});

Route::get('newest', function() {
    $filename = 'test.txt';

    Storage::cloud()->put($filename, \Carbon\Carbon::now()->toDateTimeString());

    $dir = '/';
    $recursive = false; // Get subdirectories also?

    $file = collect(Storage::cloud()->listContents($dir, $recursive))
        ->where('type', '=', 'file')
        ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
        ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
        ->sortBy('timestamp')
        ->last();

    return Storage::cloud()->get($file['path']);
});

Route::get('delete', function() {
    $filename = 'test.txt';

    // First we need to create a file to delete
    Storage::cloud()->makeDirectory('Test Dir');

    // Now find that file and use its ID (path) to delete it
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    $file = $contents
        ->where('type', '=', 'file')
        ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
        ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
        ->first(); // there can be duplicate file names!

    Storage::cloud()->delete($file['path']);

    return 'File was deleted from Google Drive';
});

Route::get('delete-dir', function() {
    $directoryName = 'test';

    // First we need to create a directory to delete
    Storage::cloud()->makeDirectory($directoryName);

    // Now find that directory and use its ID (path) to delete it
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    $directory = $contents
        ->where('type', '=', 'dir')
        ->where('filename', '=', $directoryName)
        ->first(); // there can be duplicate file names!

    Storage::cloud()->deleteDirectory($directory['path']);

    return 'Directory was deleted from Google Drive';
});

Route::get('rename-dir', function() {
    $directoryName = 'test';

    // First we need to create a directory to rename
    Storage::cloud()->makeDirectory($directoryName);

    // Now find that directory and use its ID (path) to rename it
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    $directory = $contents
        ->where('type', '=', 'dir')
        ->where('filename', '=', $directoryName)
        ->first(); // there can be duplicate file names!

    Storage::cloud()->move($directory['path'], 'new-test');

    return 'Directory was renamed in Google Drive';
});

Route::get('share', function() {
    $filename = 'test.txt';

    // Store a demo file
    Storage::cloud()->put($filename, 'Hello World');

    // Get the file to find the ID
    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));
    $file = $contents
        ->where('type', '=', 'file')
        ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
        ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
        ->first(); // there can be duplicate file names!

    // Change permissions
    // - https://developers.google.com/drive/v3/web/about-permissions
    // - https://developers.google.com/drive/v3/reference/permissions
    $service = Storage::cloud()->getAdapter()->getService();
    $permission = new \Google_Service_Drive_Permission();
    $permission->setRole('reader');
    $permission->setType('anyone');
    $permission->setAllowFileDiscovery(false);
    $permissions = $service->permissions->create($file['basename'], $permission);

    return Storage::cloud()->url($file['path']);
});

Route::get('export/{basename}', function ($basename) {
    $service = Storage::cloud()->getAdapter()->getService();
    $mimeType = 'application/pdf';
    $export = $service->files->export($basename, $mimeType);

    return response($export->getBody(), 200, $export->getHeaders());
});
