<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'sk_test_51ItjfcLVVZaj9HRiH9TmpDEEpWONVWYUN3NjLWyiUxIkyeX3k6dGcy58ncttRNL8icJ4SNigxfKiqvC0BVnyK0kH00P1Biny37'
          );
        $pay_intent = $stripe->paymentIntents->retrieve(
            'pi_1J0rEzLVVZaj9HRisGIsSaBT',
            []
        );
        dd($pay_intent);
        dd($request->query());
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
        $payment_method = Auth::user()->addPaymentMethod($request->payment_method);
        return response()->json($payment_method);
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
        return view('payments.update-payment-method', [
            'intent' => Auth::user()->createSetupIntent()
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
