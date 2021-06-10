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
        $stripe = new \Stripe\StripeClient(
            'sk_test_51J0Mf2B9muY337mPY3zpehIOosAoFhQXkZ1TwpoOaOJt8E91AJmYCPJjjgeQsewTDDlJsa3N0bVlA6GQOs7brB9S00kGnyP3AG'
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
            'return_url' => 'http://localhost/Helios_v2/public/site/payment/'
        ]);

        // dd($payment_intent);
    }
}
