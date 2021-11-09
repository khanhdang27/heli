<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Moderator;
use App\Models\Student;
use App\Models\Tutor;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  $user_id
     * @return View
     */
    public function show($user_id)
    {
        $student = Student::where('user_id', $user_id)->first();
        $tutor = Tutor::where('user_id', $user_id)->first();
        $moderator = Moderator::where('user_id', $user_id)->first();
        $_user = User::find($user_id);
        if ($_user->hasRole('student')) {
            $user = $student;
        } elseif ($_user->hasRole('tutor')) {
            $user = $tutor;
        } else {
            $user = $moderator;
        }
        return view('profile.index', [
            'user_info' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $user_id
     * @return View
     */
    public function edit($user_id)
    {
        $student = Student::where('user_id', $user_id)->first();
        $tutor = Tutor::where('user_id', $user_id)->first();
        $moderator = Moderator::where('user_id', $user_id)->first();
        $_user = User::find($user_id);
        if ($_user->hasRole('student')) {
            $user = $student;
        } elseif ($_user->hasRole('tutor')) {
            $user = $tutor;
        } else {
            $user = $moderator;
        }
        return view('profile.edit', [
            'user_info' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        $input = $request->all();
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        if ($user->hasRole('student')) {
            $student = Student::where('user_id', $user_id)->first();
            $student->update([
                'user_id' => $user_id,
                'full_name' => $input['full_name'],
                'day_of_birth' => $input['day_of_birth'],
                'phone_no' => $input['phone_no'],
                'education_level' => $input['education_level'],
            ]);
            $student->save();
        } elseif ($user->hasRole('tutor')) {
            $tutor = Tutor::where('user_id', $user_id)->first();
            $tutor->update([
                'user_id' => $user_id,
                'full_name' => $input['full_name'],
                'day_of_birth' => $input['day_of_birth'],
                'phone_no' => $input['phone_no']
            ]);
            $tutor->save();
        }
        $user->name = $input['name'];
        $user->save();
        return redirect(route('site.profile.show', $user_id));

    }

    public function uploadAvatar(Request $request)
    {
        $input = $request->all();
        $user = User::where('id', Auth::user()->id)->first();
        if (!empty($request['photo'])) {
            $alreadyFile = File::query()->where('fileable_id', Auth::user()->id)
                ->where('fileable_type', 'App\Models\User')->first();
            if (!empty($alreadyFile)) {
                $alreadyFile->delete();
            }
            $file = File::storeFile(
                $input['photo'],
                User::class,
                $user->id,
            );
        }
        return back()->with('success', 'Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
