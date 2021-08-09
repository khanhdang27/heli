<?php

namespace App\Http\Controllers;

use App\Models\CourseMembershipDiscount;
use App\Models\CourseSchedule;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;
use App\Models\Order;
use App\Models\RoomLiveCourse;
use App\Models\StudentCourses;
use App\Models\StudentSchedule;
use App\Models\User;
use DateTime;
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

    public function addCard()
    {
        $_user = User::find(Auth::user()->id);
        return view('payments.update-payment-method', [
            'intent' => $_user->createSetupIntent()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $paymentMethods = $this->getPaymentMethod();
        if (empty($paymentMethods[0])) {
            if($request->ajax()){
                return response()->json([
                    'path' => route('site.order.addCard'),
                    'status' => 200,
                ]);
            }
            return redirect()->route('site.order.addCard');
        } else {
            [
                $product_id,
                $courses_with_group,
                $student_bought
            ] = $this->getVariable($request);

            if (empty($student_bought)) {
                return $this->createBuyCourse($courses_with_group, $paymentMethods, $request);
            } else {
                $order = Order::with('course')->where('course_id', $student_bought->course_id)
                    ->where('user_id', Auth::user()->id)->first();
                return redirect()->route('site.order.show', $order->id);
            }
        }
    }

    public function createBuyCourse($courses_with_group, $paymentMethods, $request)
    {

        $room = $request->query('room_id');
        DB::beginTransaction();
        try {
            $order = Order::create_instance([
                'user_id' => Auth::user()->id,
                'course_id' => $courses_with_group->membershipCourses->course_id,
                'course_price' => $courses_with_group->getPrice(),
                'discount' => $courses_with_group->getDiscount(), //$course_detail->discount,
                'total' => $courses_with_group->getPriceDiscount(),
                'membership' => $courses_with_group->membershipCourses->membership_id,
                'membership_discount' => $courses_with_group->membershipCourses->price_value,
                'discount_info' => !empty($courses_with_group->courseDiscounts) ? $courses_with_group->courseDiscounts->discount_id : 0
            ]);
            $result = $order->createPaymentIntent($paymentMethods[0]);

            if ($result instanceof RedirectResponse) {
                DB::commit();
                return $result;
            } else {
                if ($result instanceof Order) {
                    if ($room){
                        $this->updateSchedule($room);
                    }
                    $student_course = StudentCourses::create([
                        'course_id' => (int) $courses_with_group->membershipCourses->course_id,
                        'student_id' => Auth::user()->id,
                        'room_live_course_id' => $room,
                        'latest_study' => new DateTime(),
                        'lecture_study' => 0
                    ]);

                }
                DB::commit();
                if($request->ajax()){
                    return response()->json([
                        'path' => route('site.order.show', $result->id),
                        'status' => 200,
                    ]);
                }
                return redirect()->route('site.order.show', $result->id);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return redirect()->route('site.home')->with('errors', 'Buy Fails');
        }
    }

    public function getVariable($request)
    {
        $product_id = $request->query('product_id');

        $courses_with_group = CourseMembershipDiscount::with(
            'membershipCourses',
            'courseDiscounts',
            'membershipCourses.course',
            'membershipCourses.course.subject',
            'membershipCourses.course.tutor',
            'membershipCourses.course.courseMaterial'
        )->where('id', $product_id)->first();

        $student_bought = StudentCourses::query()->where([
            'course_id' => $courses_with_group->membershipCourses->course_id,
            'student_id' => Auth::user()->id
        ])->first();


        return [
            $product_id,
            $courses_with_group,
            $student_bought
        ];
    }

    public function getPaymentMethod()
    {
        $stripe = Auth::user()->stripe_id;
        $user = Cashier::findBillable($stripe);
        $paymentMethods = $user->paymentMethods()->map(function ($paymentMethod) {
            return $paymentMethod->asStripePaymentMethod();
        });

        return $paymentMethods;
    }

    public function updateSchedule($room)
    {
        $roomInitial = RoomLiveCourse::find($room);
        if ($roomInitial->number_member + 1 <= $roomInitial->number_member_maximum) {
            $roomInitial->number_member = $roomInitial->number_member + 1;
            $roomInitial->save();

            $course_schedules = CourseSchedule::where(
                'course_id', $roomInitial->course_id
            )->get();

            foreach ($course_schedules as $course_schedule) {
                StudentSchedule::create([
                    'course_id'=> $course_schedule->course_id,
                    'room_live_course_id' => $course_schedule->room_live_course_id,
                    'study_session_id' => $course_schedule->study_session_id,
                    'tutor_id' => $course_schedule->tutor_id,
                    'student_id' => Auth::user()->id,
                    'date' => $course_schedule->date,
                ]);
            }
        } else {
            return redirect(route('site.home'))->with('errors', 'room is full');
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
    public function show(Order $order)
    {
        $order->load('course');
        return view('order.order-detail', ['order' => $order]);
    }

    public function paymentHistory()
    {
        $order = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate('15');
        return view('payments.payment-history', [
           'order' => $order
        ]);
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
