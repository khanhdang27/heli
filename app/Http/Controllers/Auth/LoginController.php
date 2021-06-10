<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
        if (Auth::attempt($request->validated())) {
            return response()->json([
                'status' => 200,
                'message' => 'success'
            ], 200);
        }
        return response()->json([
            'status' => 400,
            'message' => 'fail'
        ], 400);

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
