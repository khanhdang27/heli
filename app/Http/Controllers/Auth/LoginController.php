<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserLoginRequest;
use App\Models\User;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | login Controller
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
    protected $redirectTo = 'logged';

    /**
     * Create a new controller instance.
     *
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function login(UserLoginRequest $request)
    {
        if (\Auth::check()) {
            if (\Auth::user()->isSuperAdmin() || \Auth::user()->isAdmin()) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('site.home');
            }
        }

        if(Auth::attempt($request->validated())) {
            return redirect()->route('site.home')->with('success', 'login successful!');
        }
        throw ValidationException::withMessages([
            'email' => 'Email or Password is incorrect',
            'password' => 'Email or Password is incorrect'
        ]);
    }

    public function logout(Request $request)
    {
        if (\Auth::user()->isMember()) {
            \Auth::logout();
            return redirect()->route('site.home');
        } else {
            \Auth::logout();
            return redirect()->route('admin.login');
        }
    }
}
