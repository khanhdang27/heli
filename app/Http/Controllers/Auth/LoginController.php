<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $input = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'remember_me' => 'nullable'
        ]);

        $userLogin = User::where('email', $input['email'])->first();
        if ($userLogin->active != 1) {
            return response()->json([
                'status' => 401,
                'message' => 'inactive'
            ]);
        }

        if (Auth::attempt([
            'email' => $input['email'],
            'password' => $input['password'],
            'active' => 1
        ], empty($input['remember_me']) ? true : false )) {
            return response()->json([
                'status' => 200,
                'message' => 'success'
            ]);
        }
        return response()->json([
            'status' => 400,
            'message' => 'login fail'
        ]);

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}