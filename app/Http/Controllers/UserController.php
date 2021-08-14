<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Models\Moderator;
use App\Models\Student;
use App\Models\Tutor;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $member = User::with('student','roles')->whereHas('roles', function ($query) {
            $query->where('name','student');
        })->get();
        return view('admin.user.index', [
            'roleUsers' => $member
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateUserRequest $request)
    {
        $user = new User(
            $request->validated()
        );
        $user->assignRole(['student']);
        $user->save();
        $student = new Student(['user_id'=>$user->id]);
        $student->save();
        return back()->with('success', 'Save success');
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * @param User $user
     * @return View
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', [
            'user' => $user
        ]);
    }

    /**
     * @param CreateUserRequest $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CreateUserRequest $request, User $user)
    {
        $user->update(
            $request->validated()
        );
        $user->save();
        return back()->with('success', 'Update success!');
    }


    public function destroy(User $user)
    {
        try {
            $user->delete();
            return response([
                'message' => 'Delete success!'
            ]);
        } catch (\Exception $exception) {
            return response([
                'message' => 'Cannot delete course'
            ], 400);
        }
    }

    public function tutorProfile()
    {
        $tutor = Tutor::where('user_id', Auth::user()->id)->first();
        $tutor->load(['translations', 'user', 'subject']);
        
        return view('admin.tutor.edit', 
            [
                'tutor' => $tutor,
            ]
        );
    }

    public function tutorModerator()
    {
        $moderator = Moderator::where('user_id', Auth::user()->id)->first();
        $moderator->load(['user']);
        
        return view('admin.moderator.edit', [
            'moderator' => $moderator
        ]);
    }
}
