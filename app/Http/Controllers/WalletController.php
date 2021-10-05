<?php

namespace App\Http\Controllers;

use App\Models\User;
use Bavix\Wallet\Models\Transaction;
use Bavix\Wallet\Models\Wallet;
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
        $all_wallets = Wallet::query()->get();
        $wallet = $all_wallets->where('holder_id', Auth::user()->id)->first();
        return view('wallet.manage-wallet', [
            'wallet' => $wallet,
        ]);
    }
    public function listTopUp()
    {
        $topUp_history = Transaction::query()->where('payable_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')->paginate(9);
        return response()->json($topUp_history);
    }
    public function topUpIndex()
    {
        $balance = Auth::user()->balance;
        $stripe = new \Stripe\StripeClient(
            config('app.stripe_secret')
        );
        $auth_stripe = $stripe->paymentMethods->all([
                'customer' => Auth::user()->stripe_id,
                'type' => 'card'
            ]);
        return view('wallet.top-up', [
            'balance' => $balance,
            'cards' => $auth_stripe
        ]);
    }

    public function topUpToWallet(Request $request)
    {
        $_request = $request->validate([
           'card' => 'required',
            'amount' => 'required|numeric|min:10'
        ]);
        $paymentMethods = $this->getPaymentMethod();
        $stripe = new \Stripe\StripeClient(
            config('app.stripe_secret')
        );
        $payment_intent = $stripe->paymentIntents->create([
            'amount' => $_request['amount'] * 100,
            'currency' => 'hkd',
            'payment_method' => $paymentMethods[$_request['card']]->id,
            'confirm' => true,
            'customer' => $paymentMethods[$_request['card']]->customer,
            'metadata' => [
                'user_id' => Auth::user()->id,
                'price' => $_request['amount'],
            ],
            'return_url' => config('app.home_url') . '/payment'
        ]);
        $user = User::where('id', Auth::user()->id)->first();
        $topUp_value = $_request['amount'] / 10;
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
        $topUp_history = Transaction::query()->where('payable_id', Auth::user()->id)->latest()->first();
        return view('wallet.top-up-success', [
            'topUp_history' => $topUp_history,
            'stripe' => $stripe
        ]);
    }

    public function paymentHistory()
    {
        return view('wallet.detail-history.payment-invoice');
    }

    public function topUpHistory(Transaction $transaction)
    {
        $wallet = Wallet::where('holder_id', Auth::user()->id)->first();
        return view('wallet.detail-history.top-up-invoice', [
            'transaction' => $transaction,
            'wallet' => $wallet
        ]);
    }


    public function payment()
    {
        return \view('payments.payment');
    }

    public function confirmPayment()
    {
        return \view('payments.confirm-payment');
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
