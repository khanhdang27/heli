@extends('layout.app')
@section('title','Wallet')
@section('content')
    @php
        $lang = [ 'topUpValue' => __('keywords.wallet.topUpValue'),
                  'amount' => __('keywords.wallet.amount'),
                  'exchangeValue' => __('keywords.wallet.exchangeValue'),
                  'amountToExchange' => __('keywords.wallet.amountToExchange'),
                  'tokensReceived' => __('keywords.wallet.tokensReceived'),
                ];
    @endphp
    <div class="body-content" >
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.wallet.topUp')
        </div>
        <div class="container-fluid" id="app">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-12 col-sm-9 text-primary pb-5 mb-5">
                    <h1 class="font-weight-bold my-5">@lang('keywords.wallet.topUpViaVisa')</h1>
                    <div class="row justify-content-between">
                        <div class="col-lg-5">
                            {{--               php quan ra cuc tranfer             --}}
                            <top-up-component v-bind:lang="{{json_encode($lang)}}" v-bind:transfer=0.1 ></top-up-component>
                            <div class="d-flex justify-content-between mb-5">
                                <div>
                                    <p>@lang('keywords.wallet.exchangeRate')</p>
                                    <h2 class="font-weight-bold">1:10</h2>
                                </div>
                                <div class="mr-5">
                                    <p>@lang('keywords.wallet.totalFee')</p>
                                    <h2 class="font-weight-bold">0$</h2>
                                </div>
                            </div>
                            <div class="border-bottom border-primary d-block d-lg-none mb-5"></div>
                        </div>
                        <div class="border-right border-primary d-none d-lg-block" style="height: 495px"></div>
                        <div class="col-lg-5">
                            <div class="border-2 border-primary rounded py-2 px-5 mb-5">
                                <h5>@lang('keywords.wallet.walletBalance')</h5>
                                <a class="d-flex justify-content-between align-items-center"
                                   href="{{route('site.user.wallet')}}">
                                    <h1 class="font-weight-bold">{{$balance}} {{$balance > 1 ? 'tokens' : 'token'}}</h1>
                                    <span class="fe fe-chevron-right h3"></span>
                                </a>
                            </div>
                            <h2 class="mb-5 font-weight-bold">@lang('keywords.wallet.transactionDetails')</h2>
                            <div class="d-flex justify-content-between mb-3">
                                <h5>@lang('keywords.wallet.topUpTo')</h5>
                                <h4 class="font-weight-bold">@lang('keywords.wallet.wallet')</h4>
                            </div>
                            <h5 class="font-weight-bold">@lang('keywords.wallet.chooseVisa')</h5>
                            <button
                                class="btn btn-light mb-2 w-100 text-left h5 font-weight-bold px-3 py-2 text-primary"
                                type="button" data-toggle="collapse"
                                data-target="#collapseSelectCard" aria-expanded="false"
                                aria-controls="collapseSelectCard">
                                @lang('keywords.wallet.visaCardLinked')
                            </button>
                            <div class="collapse py-4 px-3 rounded bg-light room-selection" id="collapseSelectCard">
                                <div class="select-card mb-3 d-flex">
                                    <input id="selectCard" type="radio" name="card" value="card" form="form-room">
                                    <label class="p-0 mb-0 w-100" for="selectCard">
                                        <a class="btn btn-white text-primary d-flex align-items-center w-100">
                                            <img class="mr-4" src="{{asset('images/ic/ic_visa.svg')}}" width="64">
                                            <div>
                                                <h3 class="font-weight-bold">**** ****
                                                    **** {{Auth::user()->card_last_four}}</h3>
                                                <p class="m-0 text-left h5">{{Auth::user()->name}}</p>
                                            </div>
                                        </a>
                                    </label>
                                </div>
                                <a class="select-card btn btn-white text-primary d-flex align-items-center pl-4"
                                   href="{{route('site.add-visa')}}">
                                    <img class="mr-4 ml-1" src="{{asset('images/ic/ic_plus.svg')}}" width="64"
                                         height="64">
                                    <div>
                                        <h3 class="m-0 font-weight-bold">@lang('keywords.wallet.addNewVisaCard')</h3>
                                    </div>
                                </a>
                            </div>
                            @if(Auth::user()->stripe_id != null)
                                <form action="{{route('site.user.top-up-to')}}" method="post">
                                    @csrf
                                    <input name="amount" v-model="chooseValue" required hidden>
                                    <button class="btn btn-primary w-100 font-weight-bold h4 py-3 mt-3" type="submit">
                                        @lang('keywords.wallet.topUp')
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

