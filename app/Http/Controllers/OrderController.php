<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $stripe = Auth::user()->stripe_id;
        $user = Cashier::findBillable($stripe);
        $paymentMethods = $user->paymentMethods()->map(function($paymentMethod){
            return $paymentMethod->asStripePaymentMethod();
        });
        if (empty($paymentMethods[0])) {
            return view('payments.update-payment-method', [
                'intent' => Auth::user()->createSetupIntent()
            ]);
        } else {
            $course_id = $request->query('course_id');
            $course_detail = Course::find($course_id);
            $order = Order::create_instance([
                'user_id'=> $course_detail->user_id,
                'course_id'=> $course_detail->course_id,
                'price'=> $course_detail->price,
                'discount'=> 0, //$course_detail->discount,
                'total'=> $course_detail->total,
            ]);
            $result = $order->createPaymentIntent($paymentMethods[0]);
            if ($result instanceof RedirectResponse ) {
                return $result;
            } else {
                return view('order-details', ['order' => $result]);
            }
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
        dd($request->query());
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
        // return view('payments.update-payment-method', [
        //     'intent' => Auth::user()->createSetupIntent()
        // ]);
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
