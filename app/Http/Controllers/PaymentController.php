<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // pi_1J0rEzLVVZaj9HRisGIsSaBT
        $stripe = new \Stripe\StripeClient(
            config('app.stripe_secret')
        );
        $payment_intent = $stripe->paymentIntents->retrieve(
            $request->query('payment_intent'),
            []
        );

        $order = Order::create_instance([
            'user_id' => Auth::user()->id,
            'course_id' => $payment_intent->course_id ?? 1,
            'price' => $payment_intent->price ?? 20,
            'discount' => $payment_intent->discount ?? 0,
            'total' => $payment_intent->price * (1 - $payment_intent->discount),
        ]);
        $order->nextAction($payment_intent);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * add payment a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addPayment(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = User::find(Auth::user()->id);
            $payment_method = $user->addPaymentMethod($request->payment_method);

            $paymentMethods = $user->paymentMethods();
            $user->card_brand = $paymentMethods->last()->card->brand;
            $user->card_last_four = $paymentMethods->last()->card->last4;
            $user->save();

            DB::commit();
            return response()->json($payment_method);
        } catch (\Throwable $th) {
            response()->json(['error_message'=> $th->getMessage()],400);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find(Auth::user()->id);
        return view('payments.update-payment-method', [
            'intent' => $user->createSetupIntent()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
