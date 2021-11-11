<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
class PaypalController extends Controller
{
    private $_api_context;
    const APPROVAL_URL = 'approval_url';
    const APPROVED = 'approved';
    public function __construct()
    {
        $paypal_configuration = Config::get('paypal');
        $this->_api_context = new ApiContext(
            new OAuthTokenCredential($paypal_configuration['client_id'], $paypal_configuration['secret'])
        );
        $this->_api_context->setConfig($paypal_configuration['settings']);
    }
    public function payWithPaypal()
    {
        return view('paywithpaypal');
    }
    public function postPaymentWithpaypal(Request $request)
    {
        $_request = $request->validate([
            'amount_paypal' => 'required|numeric|min:10'
        ]);
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Token')
            ->setCurrency('HKD')
            ->setQuantity(1)
            ->setPrice($_request['amount_paypal']);

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('HKD')
            ->setTotal($_request['amount_paypal']);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Enter Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('site.user.status'))
            ->setCancelUrl(URL::route('site.user.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PayPalConnectionException  $ex) {
            if (Config::get('app.debug')) {
                return Redirect::route('site.user.top-up')->with('error','Connection timeout');
            } else {
                return Redirect::route('site.user.top-up')->with('error','Some error occur, sorry for inconvenient');
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == self::APPROVAL_URL) {
                $redirect_url = $link->getHref();
                break;
            }
        }

        Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {
            return Redirect::away($redirect_url);
        }
        return Redirect::route('site.user.top-up')->with('error','Unknown error occurred');
    }

    public function getPaymentStatus(Request $request)
    {
        $payment_id = Session::get('paypal_payment_id');

        Session::forget('paypal_payment_id');
        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
            return Redirect::route('site.user.top-up')->with('error','Payment failed');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));
        $result = $payment->execute($execution, $this->_api_context);
        $total = (int)$result->getTransactions()[0]->getAmount()->getTotal();

        if ($result->getState() == self::APPROVED) {
            $user = User::where('id', Auth::user()->id)->first();
            $exchange_rate = Setting::where('key', 'token_exchange_rate')->first();
            $topUp_value = $total * $exchange_rate->value;
            $user->deposit($topUp_value, ['card' => 'paypal']);

            return Redirect::route('site.user.topUp-success')->with('success','Payment success !!');
        }

        return Redirect::route('site.user.top-up')->with('error','Payment failed !!');
    }
}
