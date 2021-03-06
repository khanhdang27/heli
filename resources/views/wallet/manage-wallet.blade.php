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
        $lang = [ 'topUpHistory' => __('keywords.wallet.topUpHistory'),
                  'hereYouCanReviewAllTopUp' => __('keywords.wallet.hereYouCanReviewAllTopUp'),
                  'viewAllHistory' => __('keywords.wallet.viewAllHistory'),
                  'hereYouCanReviewAllPayment' => __('keywords.wallet.hereYouCanReviewAllPayment'),
                  'paymentHistory' => __('keywords.wallet.paymentHistory'),
                ];
    @endphp
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.wallet.walletManagement')
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-12 col-sm-9 text-primary pb-5 mb-5">
                    @if (session('success'))
                        <div class="alert alert-success text-center mt-5 h3 py-3">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ session('success') }}</strong>
                        </div>
                    @endif
                    <h1 class="font-weight-bold my-5">@lang('keywords.wallet.walletManagement')</h1>
                    <div class="row mb-5">
                        <div class="col-lg-6">
                            <div class="border-2 border-primary rounded p-4 mb-4 wallet-card">
                                <h2 class="font-weight-bold">@lang('keywords.wallet.yourWallet')</h2>
                                <div class="d-flex justify-content-between mt-5 mb-3">
                                    <h4 class="font-weight-bold">@lang('keywords.wallet.balance'):</h4>
                                    <p class="font-weight-bold h3">
                                        {{$wallet->wallet->balance}} {{$wallet->wallet->balance > 1 ? 'tokens' : 'token'}}</p>
                                </div>
                                <div class="d-flex justify-content-between mb-5 flex-wrap">
                                    <h4 class="font-weight-bold">@lang('keywords.wallet.wallet') ID:</h4>
                                    <p class="font-weight-bold h3">{{$wallet->wallet->wallet_str_id}}</p>
                                </div>
                                <h4 class="font-weight-bold mb-4">@lang('keywords.wallet.fastAndSecureTopUp')</h4>
                                <a class="btn btn-primary w-100 font-weight-bold h4 py-3"
                                   href="{{route('site.user.top-up')}}">Top-up</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="border-2 border-primary rounded p-4 wallet-card">
                                <h2 class="font-weight-bold">@lang('keywords.wallet.yourCard') </h2>
                                @foreach($cards as $card)
                                    <div class="d-flex my-5 align-items-center">
                                        <div class="border-2 border-primary btn mr-4
                                                    text-primary card-brand h3 font-weight-bold mb-0">
                                            {{$card->card->brand}}
                                        </div>

                                        <div>
                                            <p class="h3 font-weight-bold">**** **** **** {{$card->card->last4}}</p>
                                            <p class="h4 font-weight-bold">{{Auth::user()->name}}</p>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="mb-3">
                                    <a href="{{route('site.add-visa')}}"
                                       class="d-flex btn p-0 text-primary align-items-center">
                                        <img class="mr-4 btn-wallet btn-add-visa rounded"
                                             src="{{asset('images/ic/ic_btn_plus.svg')}}"
                                             height="85">
                                        <p class="h4 font-weight-bold">@lang('keywords.wallet.addNewCard')</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <payment-history-component v-bind:lang="{{json_encode($lang)}}"></payment-history-component>
                    <top-up-history-component v-bind:lang="{{json_encode($lang)}}"></top-up-history-component>
                </div>
            </div>
        </div>
    </div>
@endsection
