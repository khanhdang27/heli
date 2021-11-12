<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Models\Moderator;
use App\Models\Student;
use App\Models\Tutor;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Mail\SendMail;

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

    public function moderatorProfile()
    {
        $moderator = Moderator::where('user_id', Auth::user()->id)->first();
        $moderator->load(['user']);

        return view('admin.moderator.edit', [
            'moderator' => $moderator
        ]);
    }

    public function adminProfile()
    {
        return view('admin.admin-settings.edit');
    }

    public function adminOwner(Request $request)
    {

        $input = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $random = Str::random(10);
        if ($this->validateUser($input)) {
            DB::beginTransaction();
            try {
                $_old_user = User::find(Auth::user()->id);
                $_old_user->active = 0;
                $_old_user->save();
                $array = explode('@', $input['email']);
                $name = reset($array);
                $user = new User(['name' => $name, 'email' => $input['email'], 'password' => $random]);

                $user->assignRole('super-admin');
                $user->save();

                $send_mail = new SendMail();
                $send_mail = $send_mail->subject('Welcome to Helios Education!')->title('YOUR PASSWORD')->view('mail.mail', ['password' => $random]);
                Mail::to($input['email'])->send($send_mail);
                DB::commit();

                return back()->with('success', 'Success: please logout and check your email to update account');
            } catch (\Throwable $th) {
                DB::rollBack();

                return back()->withErrors( 'Update Error!');
            }
        }
        return back()->withErrors( 'Error: Password not validate');
    }



    public function validateUser($input)
    {
        $userLogin = User::where('email', Auth::user()->email)->first();
        if ($userLogin->active != 1) {
            return false;
        }

        if (Auth::attempt([
            'email' => Auth::user()->email,
            'password' => $input['password'],
            'active' => 1
        ])) {
            return true;
        }

        return false;
    }

}
