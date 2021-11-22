<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;

class ChangePasswordController extends Controller
{
    public function update(Request $request)
    {

        $is_confirmed = $request->validate([
            'old_password' => 'required',
            'password' => 'required',
        ]);
        $user = User::find(Auth::user()->id);

        $check_old_password =  Hash::check(
            $is_confirmed['old_password'],
            $user->password
        );
        if ($check_old_password) {
            $user->forceFill([
                'password' => $is_confirmed['password']
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));

            Auth::guard()->login($user);

            return redirect()->back();
        } else {
            return redirect()->back()->withErrors(['password' => 'wrong password']);
        }
    }
}
