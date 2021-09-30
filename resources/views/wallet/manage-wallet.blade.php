@extends('layout.app')
@section('title','Wallet')
@section('content')
    @php
        $wallet_id ="5csdpare38576xvfbhyl";
        $visa ="7909 **** **** 8097";
        $name ="Kenny Or";
        $payment = [
             'time' => '16-09-21,15:00',
             'course_name' => 'IGCSE基礎數學2課程基礎數學第二部分',
             'total' => '49 tokens',
             'invoice' => '#19098776235',
        ];
        $topUp = [
             'time' => '16-09-21,15:00',
             'amount' => '1000HK$',
             'token' => '100 tokens',
             'visa' => '**** **** **** 8097',
             'topUp_id' => '#0000124',
        ];
    @endphp
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.wallet.walletManagement')
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-12 col-sm-9 text-primary pb-5 mb-5">
                    <h1 class="font-weight-bold my-5">@lang('keywords.wallet.walletManagement')</h1>
                    <div class="row mb-5">
                        <div class="col-lg-6">
                            <div class="border-2 border-primary rounded p-5 mb-4 wallet-card">
                                <h2 class="font-weight-bold">@lang('keywords.wallet.yourWallet')</h2>
                                <div class="d-flex justify-content-between mt-5 mb-3">
                                    <h4 class="font-weight-bold">@lang('keywords.wallet.balance'):</h4>
                                    <p class="font-weight-bold h3">
{{--                                        {{dd($wallet)}}--}}
                                        {{$wallet->wallet->balance}} {{$wallet->wallet->balance > 1 ? 'tokens' : 'token'}}</p>
                                </div>
                                <div class="d-flex justify-content-between mb-5 flex-wrap">
                                    <h4 class="font-weight-bold">@lang('keywords.wallet.wallet') ID:</h4>
                                    <p class="font-weight-bold h3">{{$wallet->wallet->wallet_str_id}}</p>
                                </div>
                                <h4 class="font-weight-bold mb-4">@lang('keywords.wallet.fastAndSecureTopUp')</h4>
                                <a class="btn btn-primary w-100 font-weight-bold h4 py-3" href="{{route('site.user.top-up')}}">Top-up</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="border-2 border-primary rounded p-5 wallet-card">
                                <h2 class="font-weight-bold">@lang('keywords.wallet.yourVisaCard') </h2>
                                <div class="d-flex my-5 align-items-center">
                                    <img class="mr-4 btn-wallet" src="{{asset('images/ic/ic_btn_visa.svg')}}"
                                         height="85">

                                    <div>
                                        <p class="h3 font-weight-bold">**** **** **** {{Auth::user()->card_last_four}}</p>
                                        <p class="h4 font-weight-bold">{{Auth::user()->name}}</p>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <a href="{{route('site.add-visa')}}" class="d-flex btn p-0 text-primary align-items-center">
                                    <img class="mr-4 btn-wallet btn-add-visa rounded" src="{{asset('images/ic/ic_btn_plus.svg')}}"
                                         height="85">
                                    <p class="h4 font-weight-bold">@lang('keywords.wallet.addNewVisaCard')</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5 pt-4">
                        <a class="btn border-primary border-2 h2 text-primary w-100 d-flex justify-content-between
                        align-items-center px-4 font-weight-bold rounded-0" data-toggle="collapse"
                           href="#paymentHistory" role="button" aria-expanded="false" aria-controls="paymentHistory">
                            <span>@lang('keywords.wallet.paymentHistory')</span>
                            <span class="fe fe-chevron-right"></span>
                        </a>
                        <div class="collapse" id="paymentHistory">
                            <h2 class="mt-5 mb-4">@lang('keywords.wallet.hereYouCanReviewAllPayment')</h2>
                            <div class="table-responsive">
                                <table class="table text-primary border-bottom mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Time</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Invoice</th>
                                        <th scope="col">Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$payment['time']}}</td>
                                        <td>{{$payment['course_name']}}</td>
                                        <td>{{$payment['total']}}</td>
                                        <td>{{$payment['invoice']}}</td>
                                        <td><a class="btn btn-primary">
                                                View
                                            </a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-5">
                                <a class="h3 font-weight-bold btn w-100 text-primary p-0 mb-0">
                                    @lang('keywords.wallet.viewAllHistory')
                                    <span class="fe fe-chevron-down"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <a class="btn border-primary border-2 h2 text-primary w-100 d-flex justify-content-between
                        align-items-center px-4 font-weight-bold rounded-0" data-toggle="collapse"
                           href="#topUpHistory" role="button" aria-expanded="false" aria-controls="topUpHistory">
                            <span>@lang('keywords.wallet.topUpHistory')</span>
                            <span class="fe fe-chevron-right"></span>
                        </a>
                        <div class="collapse" id="topUpHistory">
                            <h2 class="mt-5 mb-4">@lang('keywords.wallet.hereYouCanReviewAllTopUp')</h2>
                            <div class="table-responsive">
                                <table class="table text-primary border-bottom mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Time</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Tokens</th>
                                        <th scope="col">Visa card</th>
                                        <th scope="col">Top-up ID</th>
                                        <th scope="col">Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>16-09-21,15:00</td>
                                        <td>{{$topUp['amount']}}</td>
                                        <td>{{$topUp['token']}}</td>
                                        <td>{{$topUp['visa']}}</td>
                                        <td>{{$topUp['topUp_id']}}</td>
                                        <td><a class="btn btn-primary">
                                                View
                                            </a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-5">
                                <a class="h3 font-weight-bold btn w-100 text-primary p-0 mb-0">
                                    @lang('keywords.wallet.viewAllHistory')
                                    <span class="fe fe-chevron-down"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
