<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Student;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $random = Str::random(10);
        $array = explode('@', $data['email']);
        $name = reset($array);
        $user = new User(['name' => $name, 'email' => $data['email'], 'password' => $random]);
        $user->save();

        $roleUser = new UserRole(['user_id' => $user->id, 'role_id' => '3']);
        $roleUser->save();

        $student = new Student(['user_id' => $user->id]);
        $student->save();

        $send_mail = new \App\Mail\SendMail();
        $send_mail = $send_mail->subject('Account')->title('Your password')->body("password: $random")->view('mail.test_mail');
        Mail::to($data['email'])->send($send_mail);
        
        return $user;
        // return User::create([
        //     'name' => $name,
        //     'email' => $data['email'],
        //     'password' => Hash::make($random),
        // ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        if ($this->validator($request->all())->validate()){
            event(new Registered($user = $this->create($request->all())));
    
            // $this->guard()->login($user);
    
            // if ($response = $this->registered($request, $user)) {
            //     return $response;
            // }
            return $request->wantsJson()
                        ? new JsonResponse([
                            'code'=> 201,
                            'message' => 'success'
                        ], 201)
                        : redirect($this->redirectPath())->status(201);
        } else {
            return new JsonResponse([
                'code'=> 404,
                'message' => 'success'
            ], 404);
        }
    }

}
