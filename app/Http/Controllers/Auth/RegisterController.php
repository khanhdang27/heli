<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\Student;
use App\Models\StudentCourses;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use DateTime;


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


    public function register(Request $request)
    {
        $input = $request->all();
        $random = Str::random(10);
        if (!empty($input['email'])) {
            DB::beginTransaction();
            try {
                $array = explode('@', $input['email']);
                $name = reset($array);
                $user = User::create(['name' => $name, 'email' => $input['email'], 'password' => $random]);
                $user->assignRole('student');

                $user->balance;

                $student = Student::create(['user_id' => $user->id]);
                $stripeCustomer = $user->createAsStripeCustomer(['email' => $input['email']]);

                $send_mail = new SendMail();
                $send_mail = $send_mail->subject('Welcome to Helios Education!')->title('YOUR PASSWORD')->view('mail.mail', ['password' => $random]);
                Mail::to($input['email'])->send($send_mail);
                $student_course = StudentCourses::create([
                    'course_id' => 1,
                    'student_id' => $user->id,
                    'room_live_course_id' => null,
                    'latest_study' => new DateTime(),
                    'lecture_study' => 0,
                    'watched_list' => '0,',
                ]);
                DB::commit();
                return response()->json(
                    [
                        'status' => 200,
                        'message' => 'succeed'
                    ],
                    200
                );
            } catch (\Throwable $th) {
                DB::rollBack();
                return response()->json(
                    [
                        'status' => 400,
                        'message' => "Register Error"
                    ],
                    400
                );
            }
        }
        return response()->json(
            [
                'status' => 400,
                'message' => 'Please enter email'
            ],
            400
        );
    }
}
