<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $table = 'file';

    public $timestamps = TRUE;

    protected $guarded = [];

    protected $hidden = ['source'];

    public function createPaymentIntent ($payment) {

        // dd(config('app.stripe_key'));
        $stripe = new \Stripe\StripeClient(
            config('app.stripe_secret')
        );

        $payment_intent = $stripe->paymentIntents->create([
            'amount' => 2000,
            'currency' => 'usd',
            'payment_method' => $payment->id,
            'confirm' => true,
            'customer'=> $payment->customer,
            'metadata' => [
                'course_id'=>0,
                'user_id' => 3,
                'price' => 3,
                'discount' => 3,
            ],
            'return_url' => 'http://localhost:8000/site/payment'
        ]);

        dd($payment_intent);

        // [
        //     "metadata" => array:4 [▼
        //   "course_id" => "0"
        //   "user_id" => "3"
        //   "price" => "3"
        //   "discount" => "3"
        // ]
        // "next_action" => array:2 [▼
        //   "redirect_to_url" => array:2 [▼
        //     "return_url" => "http://localhost:8000/site/payment"
        //     "url" => "https://hooks.stripe.com/redirect/authenticate/src_1J0rEzLVVZaj9HRiRidtEsho?client_secret=src_client_secret_P98SKQivnREMkRKPZRWMAwPB&source_redirect_slug=test_YWNjdF8xSXRqZmNMVlZaYWo5SFJpLF9KZTlZVkFwcnkwTjJpZXpZSHhOZVhGM3pDdGk4cnhK0100MjYQ7ivr ◀"
        //   ]
        //   "type" => "redirect_to_url"
        // ]
    }
}
