<?php

namespace App\Http\Controllers;

use App\Models\SocialAccount;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SocialAccountController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {

        try {
            $user = Socialite::driver($provider)->user();

            $existingUser = User::where('email', $user->getEmail())->first();

            if ($existingUser) {
                Auth::login($existingUser);
            } else {
                DB::beginTransaction();
                try{
                    $newUser = new User([
                        'name' => $user->getName(),
                        'email' => $user->getEmail(),
                    ]);
                    if ($newUser->save()){
                        
                        $random = Str::random(10);
                        $newUser_social = new SocialAccount([
                            'user_id' => $newUser->id,
                            'social_id' => $user->getId(),
                            'social_name' => $provider
                        ]);
                        $newUser_social->save();
                        $stripeCustomer = $newUser->createAsStripeCustomer(['email' => $user->getEmail()]);

                        // $send_mail = new SendMail();
                        // $send_mail = $send_mail->subject('Welcome to Helios Education!')->title('YOUR PASSWORD')->view('mail.mail', ['password' => $random]);
                        // Mail::to($newUser->getEmail())->send($send_mail);
                        Auth::login($newUser);
                    }
                    DB::commit();
                } catch (\Throwable $th) {
                    DB::rollBack();

                    dd($th);
                    return redirect()->with([''])->route('site.home');
                }

            }
            return redirect()->route('site.home');
        } catch (\Exception $e) {
            return redirect()->route('site.home');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\SocialAccount $socialAccount
     * @return \Illuminate\Http\Response
     */
    public function show(SocialAccount $socialAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\SocialAccount $socialAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialAccount $socialAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SocialAccount $socialAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialAccount $socialAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\SocialAccount $socialAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialAccount $socialAccount)
    {
        //
    }
}
