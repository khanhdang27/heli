@extends('layout.app')
@section('title','Wallet')
@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.wallet.topUp')
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-primary pb-5 mb-5">
                    <h1 class="font-weight-bold my-5">@lang('keywords.wallet.topUpViaVisa')</h1>
                    <div class="row justify-content-center">
                        <div class="col-sm-10 col-lg-7 col-xl-6">
                            <h1 class="font-weight-bold text-center mb-5">@lang('keywords.wallet.topUpSuccessfully')</h1>
                            <h3 class="font-weight-bold mb-5">@lang('keywords.wallet.topUpDetails')</h3>
                            <table width="100%" class="mb-5">
                                <tr>
                                    <td><h4 class="font-weight-bold mb-4">@lang('keywords.wallet.topUpAmount')</h4></td>
                                    <td class="text-right"><h4 class="font-weight-bold mb-4">{{$topUp_history->amount * 10}}HK$</h4></td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td><h4 class="font-weight-bold mb-4">@lang('keywords.wallet.tokensReceived')</h4></td>
                                    <td class="text-right"><h4 class="font-weight-bold mb-4">{{$topUp_history->amount}} tokens</h4></td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td><h4 class="font-weight-bold mb-4">@lang('keywords.wallet.topUpTo')</h4></td>
                                    <td class="text-right">
                                        <h4 class="font-weight-bold mb-4">@lang('keywords.wallet.wallet')</h4>
                                    </td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td><h4 class="font-weight-bold mb-4">Visa card</h4></td>
                                    <td class="text-right">
                                        <h4 class="font-weight-bold mb-4">
                                            **** **** **** {{$stripe->data[0]->charges->data[0]->payment_method_details->card->last4}}</h4>
                                    </td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td><h4 class="font-weight-bold mb-4">@lang('keywords.wallet.topUp') ID</h4></td>
                                    <td class="text-right">
                                        <h4 class="font-weight-bold mb-4">{{$topUp_history->uuid}}</h4>
                                    </td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td><h4 class="font-weight-bold">@lang('keywords.wallet.time')</h4></td>
                                    <td class="text-right">
                                        <h4 class="font-weight-bold">{{$topUp_history->created_at}}</h4>
                                    </td>
                                </tr>
                            </table>
                            <a class="btn btn-primary w-100 py-3 h4 font-weight-bold"
                            href="{{route('site.user.wallet')}}">@lang('keywords.wallet.completed')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

