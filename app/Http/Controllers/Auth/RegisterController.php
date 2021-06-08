<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\RoleUser;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $request)
    {

        $input = $request->all();
        $random = Str::random(10);
        if (!empty($input['email'])) {
            $array = explode('@', $input['email']);
            $name = reset($array);
            $user = new User(['name' => $name, 'email' => $input['email'], 'password' => $random]);
            $user->assignRole(['student']);
            $user->save();

            $student = new Student(['user_id' => $user->id]);
            $student->save();

            $send_mail = new \App\Mail\SendMail();
            $send_mail = $send_mail->subject('Account')->title('Your password')->body("password: $random")->view('mail.mail');
            Mail::to($input['email'])->send($send_mail);
            return 1;
        }
        return 0;
    }

}
