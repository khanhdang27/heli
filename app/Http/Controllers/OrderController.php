<?php

namespace App\Http\Controllers;

use App\Models\CourseMembershipDiscount;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;
use App\Models\Order;
use App\Models\StudentCourses;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            $_user = User::find(Auth::user()->id);
            return view('payments.update-payment-method', [
                'intent' => $_user->createSetupIntent()
            ]);
        } else {
            $course_id = $request->query('product_id');

            $courses_with_group = CourseMembershipDiscount::with(
                'membershipCourses',
                'courseDiscounts', 
                'membershipCourses.course',
                'membershipCourses.course.subject',
                'membershipCourses.course.tutor',
                'membershipCourses.course.courseMaterial'
            )->where('id', $course_id)->first();

            $student_bought = StudentCourses::query()->where([
                'course_id' => $courses_with_group->membershipCourses->course_id,
                'student_id' => Auth::user()->id
            ])->first();

            if (empty($student_bought)){

                DB::beginTransaction();
                try {
                    $order = Order::create_instance([
                        'user_id'=> Auth::user()->id,
                        'course_id'=> $courses_with_group->membershipCourses->course_id,
                        'course_price'=> $courses_with_group->getPrice(),
                        'discount'=> $courses_with_group->getDiscount(), //$course_detail->discount,
                        'total'=> $courses_with_group->getPriceDiscount(),
                        'membership' => $courses_with_group->courseDiscounts->course_id,
                        'membership_discount' => $courses_with_group->membershipCourses->price_value,
                        'discount_info' => $courses_with_group->courseDiscounts->discount_id
                    ]);
                    $result = $order->createPaymentIntent($paymentMethods[0]);
    
                    if ($result instanceof RedirectResponse ) {
                        DB::commit();
                        return $result;
                    } else {
                        if ($result instanceof Order) {
                            $student_course = StudentCourses::create([
                                'course_id' => (int) $course_id,
                                'student_id' => Auth::user()->id
                            ]);
                        }
                        DB::commit();

                        return redirect(route('order.order.show', $result->id));
                        // view('order.order-detail', ['order' => $result]);
                    }
                } catch (\Throwable $th) {
                    DB::rollback();
                    dd($th);
                    return redirect(route('site.home'))->with('errors', 'Buy Fails');
                }
                
            } else {
                $order = Order::with('course')->where('course_id',$course_id)
                    ->where('user_id',Auth::user()->id)->first();
                 return redirect(route('order.order.show', $order->id));
                // return view('order.order-detail', ['order' => $order]);
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
        // dd($request->query());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::with('course')
            ->find($id);
        // dd($order);
        return view('order.order-detail', ['order' => $order]);
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
