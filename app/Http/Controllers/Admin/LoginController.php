<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    
    use AuthenticatesUsers;

    protected $maxAttempts = 5; // Default is 5
    protected $decayMinutes = 1; // Default is 1


    public function login()
    {
        return view('admin.login');
    }

    public function actionLogin(AdminLoginRequest $request)
    {
        $input = $request->validated();
        if(Auth::attempt([
            'email' => $input['email'],
            'password' => $input['password'],
            'active' => 1
        ], empty($input['remember']) ? true : false)) {
            return redirect()->route('admin.dashboard')->with('status', 'login successful!');
        }
        throw ValidationException::withMessages([
            'email' => 'Email or Password is incorrect',
            'password' => 'Email or Password is incorrect'
        ]);
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }
    
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('admin.login');;
    }

}
