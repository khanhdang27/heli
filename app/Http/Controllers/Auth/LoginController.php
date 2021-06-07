<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserLoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    

    public function update(Request $request, $id)
    {

        $this->validate($request, [

            'old_password' => 'required',
            'new_password' => 'required',
        ]);


        $hashedPassword = Auth::user()->password;

        if (Hash::check($request->old_password, $hashedPassword)) {

            if (!Hash::check($request->new_password, $hashedPassword)) {

                $users = User::find(Auth::user()->id);
                $users->password = bcrypt($request->new_password);
                User::where('id', Auth::user()->id)->update(array('password' =>  $users->password));

                session()->flash('message', 'password updated successfully');
                return redirect()->back();
            } else {
                session()->flash('message', 'new password can not be the old password!');
                return redirect()->back();
            }
        } else {
            session()->flash('message', 'old password doesn\'t matched ');
            return redirect()->back();
        }
    }

    public function login(UserLoginRequest $request)
    {
        if (Auth::check()) {
            if (Auth::user()->isSuperAdmin() || Auth::user()->isAdmin()) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('site.home');
            }
        }

        if (Auth::attempt($request->validated())) {
            return redirect()->route('site.home')->with('success', 'login successful!');
        }
        return 'incorrect';

    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('site.home');
        }
    }
}
