<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseMembershipDiscount;
use App\Models\CourseSchedule;
use App\Models\Order;
use App\Models\RoomLiveCourse;
use App\Models\Setting;
use App\Models\StudentCourses;
use App\Models\StudentSchedule;
use App\Models\User;
use App\Models\SkipLevel;
use Bavix\Wallet\Exceptions\InsufficientFunds;
use Bavix\Wallet\Models\Transaction;
use Bavix\Wallet\Models\Wallet;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Laravel\Cashier\Cashier;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $stripe = new \Stripe\StripeClient(config('app.stripe_secret'));
        $auth_stripe = $stripe->paymentMethods->all([
            'customer' => Auth::user()->stripe_id,
            'type' => 'card',
        ]);
        $user = Auth::user();
        $user->balance;
        $wallet = Wallet::where('holder_type', 'App\Models\User')
            ->where('holder_id', Auth::user()->id)
            ->first();
        return view('wallet.manage-wallet', [
            'wallet' => $wallet,
            'cards' => $auth_stripe,
        ]);
    }

    public function listTopUp()
    {
        $topUp_history = Transaction::query()
            ->where('payable_id', Auth::user()->id)
            ->where('type', 'deposit')
            ->where('meta', '<>', null)
            ->orderBy('created_at', 'desc')
            ->paginate(9);
        return response()->json($topUp_history);
    }

    public function listPayment()
    {
        $payment_history = Order::with('course')
            ->where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        return response()->json($payment_history);
    }

    public function topUpIndex()
    {
        $balance = Auth::user()->balance;
        $stripe = new \Stripe\StripeClient(config('app.stripe_secret'));
        $auth_stripe = $stripe->paymentMethods->all([
            'customer' => Auth::user()->stripe_id,
            'type' => 'card',
        ]);
        $exchange_rate = Setting::where('key', 'token_exchange_rate')->first();
        return view('wallet.top-up', [
            'balance' => $balance,
            'cards' => $auth_stripe,
            'exchange_rate' => $exchange_rate,
        ]);
    }

    public function topUpToWallet(Request $request)
    {
        $_request = $request->validate([
            'card' => 'required',
            'amount' => 'required|numeric|min:10',
        ]);
        $paymentMethods = $this->getPaymentMethod();
        $stripe = new \Stripe\StripeClient(config('app.stripe_secret'));
        $payment_intent = $stripe->paymentIntents->create([
            'amount' => $_request['amount'] * 100,
            'currency' => 'HKD',
            'payment_method' => $paymentMethods[$_request['card']]->id,
            'confirm' => true,
            'customer' => $paymentMethods[$_request['card']]->customer,
            'metadata' => [
                'user_id' => Auth::user()->id,
                'price' => $_request['amount'],
            ],
            'return_url' => config('app.home_url') . '/payment',
        ]);
        $user = User::where('id', Auth::user()->id)->first();
        $exchange_rate = Setting::where('key', 'token_exchange_rate')->first();
        $topUp_value = $_request['amount'] * $exchange_rate->value;
        $user->deposit($topUp_value, ['card' => $paymentMethods[$_request['card']]->card->last4]);

        return redirect()->route('site.user.topUp-success');
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

    public function topUpSuccess()
    {
        \Stripe\Stripe::setApiKey(config('app.stripe_secret'));
        $stripe = \Stripe\PaymentIntent::all(['limit' => 10, 'customer' => Auth::user()->stripe_id]);
        $topUp_history = Transaction::query()
            ->where('payable_id', Auth::user()->id)
            ->latest()
            ->first();
        return view('wallet.top-up-success', [
            'topUp_history' => $topUp_history,
            'stripe' => $stripe,
        ]);
    }

    public function paymentHistory(Order $order)
    {
        return view('wallet.detail-history.payment-invoice', [
            'order' => $order,
        ]);
    }

    public function topUpHistory(Transaction $transaction)
    {
        $wallet = Wallet::where('holder_id', Auth::user()->id)->first();
        return view('wallet.detail-history.top-up-invoice', [
            'transaction' => $transaction,
            'wallet' => $wallet,
        ]);
    }

    public function payment(Request $request, $product_id)
    {
        [$product_id, $courses_with_group, $student_bought] = $this->getVariable($product_id);
        $room = 0;
        $duplicate = false;
        if ($courses_with_group->membershipCourses->course->type == Course::LIVE) {
            $_request = $request->validate([
                'room_id' => 'required',
            ]);
            $room = $_request['room_id'];
            $request_course_id = $courses_with_group->membershipCourses->course->id;
            $request_schedule = CourseSchedule::where('course_id', $request_course_id)
                ->where('room_live_course_id', $room)
                ->get(); //request schedule

            $student_schedule = StudentSchedule::where('student_id', Auth::user()->id)->get();

            if (!empty($student_schedule)) {
                foreach ($request_schedule as $item_request) {
                    foreach ($student_schedule as $item_purchased) {
                        if ($item_request->date == $item_purchased->date) {
                            $duplicate = true;
                        }
                    }
                }
            }
        }

        return \view('payments.payment', [
            'course_with_group' => $courses_with_group,
            'product_id' => $product_id,
            'room' => $room,
            'duplicate' => $duplicate,
        ]);
    }

    public function confirmPayment($product_id, $room)
    {
        [$product_id, $courses_with_group, $student_bought] = $this->getVariable($product_id);
        return \view('payments.confirm-payment', [
            'course_with_group' => $courses_with_group,
            'product_id' => $product_id,
            'room' => $room,
        ]);
    }

    public function paymentSuccess($product_id, $room)
    {
        [$product_id, $courses_with_group, $student_bought] = $this->getVariable($product_id);
        try {
            $user = User::query()
                ->where('id', Auth::user()->id)
                ->first();
            $item = $courses_with_group;
            $item->getAmountProduct($user);
            $user->pay($item);
            return $this->createBuyCourse($courses_with_group, $room);
        } catch (InsufficientFunds $insufficientFunds) {
            return back()->with('errors', $insufficientFunds->getMessage());
        }
    }

    public function success($course_id)
    {
        return \view('payments.payment-success', [
            'course_id' => $course_id,
        ]);
    }

    public function createBuyCourse($courses_with_group, $room)
    {
        DB::beginTransaction();
        try {
            $order = Order::create([
                'user_id' => Auth::user()->id,
                'payment_id' => uniqid(),
                'course_id' => $courses_with_group->membershipCourses->course_id,
                'course_price' => $courses_with_group->getPrice(),
                'course_discount' => $courses_with_group->getDiscount(), //$course_detail->discount,
                'final_price' => $courses_with_group->getPriceDiscount(),
                'membership' => $courses_with_group->membershipCourses->membership_id,
                'membership_discount' => $courses_with_group->membershipCourses->price_value,
                'discount_info' => !empty($courses_with_group->courseDiscounts) ? $courses_with_group->courseDiscounts->discount_id : 0,
                'status' => 10,
            ]);
            if ($room != 0) {
                $this->updateSchedule($room);
            }
            $student_course = StudentCourses::create([
                'course_id' => $order->course_id,
                'student_id' => Auth::user()->id,
                'room_live_course_id' => $room == 0 ? null : $room,
                'latest_study' => new DateTime(),
                'lecture_study' => 0,
                'watched_list' => '',
            ]);
            DB::commit();
            return redirect()->route('site.user.pay-success', ['course_id' => $student_course->course_id]);
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()
                ->route('site.home')
                ->with('errors', 'Buy Fails');
        }
    }

    public function updateSchedule($room)
    {
        $roomInitial = RoomLiveCourse::find($room);
        if ($roomInitial->number_member < $roomInitial->number_member_maximum) {
            $roomInitial->number_member = $roomInitial->number_member + 1;
            $roomInitial->save();

            $course_schedules = CourseSchedule::where('course_id', $roomInitial->course_id)->get();

            foreach ($course_schedules as $course_schedule) {
                StudentSchedule::create([
                    'course_id' => $course_schedule->course_id,
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

    public function getVariable($request)
    {
        $product_id = $request;

        // DB::enableQueryLog();
        $courses_with_group = CourseMembershipDiscount::with('membershipCourses', 'courseDiscounts', 'membershipCourses.course', 'membershipCourses.course.subject', 'membershipCourses.course.subject.certificate', 'membershipCourses.course.tutor', 'membershipCourses.course.courseMaterial')->find($product_id);

        $student_bought = StudentCourses::query()
            ->where([
                'course_id' => $courses_with_group->membershipCourses->course_id,
                'student_id' => Auth::user()->id,
            ])
            ->first();

        return [$product_id, $courses_with_group, $student_bought];
    }

    public function addVisa()
    {
        $_user = User::find(Auth::user()->id);
        return \view('payments.add-visa', [
            'intent' => $_user->createSetupIntent(),
        ]);
    }

    /**
     * add payment a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeCard(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = User::find(Auth::user()->id);
            $payment_method = $user->addPaymentMethod($request->payment_method);

            $paymentMethods = $user->paymentMethods();
            $user->card_brand = $paymentMethods[0]->card->brand;
            $user->card_last_four = $paymentMethods[0]->card->last4;
            $user->save();

            DB::commit();
            return response()->json($payment_method);
        } catch (\Throwable $th) {
            response()->json(['error_message' => $th->getMessage()], 400);
        }
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
