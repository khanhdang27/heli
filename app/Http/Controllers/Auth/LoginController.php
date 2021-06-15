<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function login(Request $request)
    {
        if (empty($request->get('email'))) {
            return response()->json([
                'status' => 400,
                'message' => 'empty'
            ]);
        }
        if (Auth::attempt($request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]))) {
            return response()->json([
                'status' => 200,
                'message' => 'success'
            ]);
        }
        return response()->json([
            'status' => 400,
            'message' => 'fail'
        ]);

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}