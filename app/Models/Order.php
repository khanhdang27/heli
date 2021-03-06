<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Redirect;

class Order extends Model
{
    use SoftDeletes;

    static $ORDER_STATUS_SUCCEEDED = 10;
    static $ORDER_STATUS_CANCELED = -10;

    static $requires_payment_method = 'requires_payment_method';
    static $requires_confirmation = 'requires_confirmation';
    static $requires_action = 'requires_action';
    static $processing = 'processing';
    static $canceled = 'canceled';
    static $succeeded = 'succeeded';

    protected $table = 'orders';

    public $timestamps = TRUE;

    protected $guarded = [];

    protected $hidden = ['source'];

    public static function create_instance($data)
    {
        $_order = new Order();
        $_order->user_id =  $data['user_id'];
        $_order->course_id = $data['course_id'];
        $_order->course_price =  $data['course_price'];
        $_order->course_discount =  $data['discount'];
        $_order->final_price =  $data['total'];
        $_order->membership = $data['membership']; 
        $_order->membership_discount = $data['membership_discount']; 
        $_order->discount_info = $data['discount_info'];
        return $_order;
    }


    public function createPaymentIntent ($payment) {
        $stripe = new \Stripe\StripeClient(
            config('app.stripe_secret')
        );

        $payment_intent = $stripe->paymentIntents->create([
            'amount' => $this->course_price * 100,
            'currency' => 'hkd',
            'payment_method' => $payment->id,
            'confirm' => true,
            'customer'=> $payment->customer,
            'metadata' => [
                'course_id'=> $this->course_id,
                'user_id' => $this->user_id,
                'price' => $this->course_price,
                'discount' => $this->course_discount,//$this->discount,
            ],
            'return_url' => config('app.home_url'). '/payment'
        ]);
        return $this->nextAction($payment_intent);
    }

    public function nextAction($intent)
    {
        switch ($intent->status) {
            case self::$succeeded:
                $this->status = self::$ORDER_STATUS_SUCCEEDED;
                break;
            case self::$canceled:
                $this->status = self::$ORDER_STATUS_CANCELED;
                break;
            case self::$requires_action:
                return Redirect::to($intent->next_action->redirect_to_url->url);
            default:
                break;
        }
        $this->payment_id = $intent->id;
        $this->final_price = $this->course_price *(1 - $this->course_discount/100);

        $result = $this->save();

        return $this->fresh();
    }
    
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
