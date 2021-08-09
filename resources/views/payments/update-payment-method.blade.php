@extends('layout.app')

@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            付款
        </div>
        <div class="container-fluid container-course mx-auto py-5">
            <h1 class="text-primary font-weight-bold">Course Payment</h1>
            <div class="row pt-5">
                <div class="col-12 col-lg-7">
                    <div class="card border-primary py-3 px-4 text-primary">
                        <div class="row">
                            <div class="col-sm-8 d-flex align-items-end">
                                <div class="rounded-circle border border-primary mr-4 bg-user"
                                     style="width: 80px; height: 80px;
                                         background-image: url('{{ asset(empty(Auth::user()->avatar)
                                                                        ? "images/user_default.png"
                                                                        : '/file/'.Auth::user()->avatar->id
                                                                        )}}');">
                                </div>
                                <div class="mr-4">
                                    <h4>LOGIN</h4>
                                    <h4 class="font-weight-bold">{{Auth::user()->name}}</h4>
                                </div>
                                <h4>{{Auth::user()->student->phone_no}}</h4>
                            </div>
                            <div class="col-sm-4 d-flex align-items-center justify-content-end">
                                <button
                                    class="btn bg-btn-payment shadow-sm border border-primary h4 mb-0 font-weight-bold text-primary">
                                    CHANGE
                                </button>
                            </div>
                        </div>
                    </div>
                    <button class="btn bg-btn-payment border border-primary py-4 my-5 w-100" type="button"
                            data-toggle="collapse" data-target="#collapsePaymentMethod" aria-expanded="false"
                            aria-controls="collapsePaymentMethod">
                        <h3 class="mb-0 font-weight-bold text-primary">PAYMENT METHOD</h3>
                    </button>
                    <div class="collapse show" id="collapsePaymentMethod">
                        <div class="card card-body border-0">
                            {{-- VISA --}}
                            <div class="d-flex align-items-center mb-4">
                                <input class="btn choose-payment-method mr-4" type="radio" name="exampleRadios"
                                       id="radioVisa"
                                       value="option1"
                                       data-toggle="collapse" data-target="#collapseVisa" aria-expanded="false"
                                       aria-controls="collapseVisa">
                                <label class="h3 m-0 font-weight-bold text-primary" for="radioVisa">
                                    <img class="mr-4" src="{{asset('images/ic/ic_visa.svg')}}">
                                    Visa Credit Card
                                </label>
                            </div>
                            <div class="collapse pl-5 mb-5" id="collapseVisa">
                                <div class="card border-0">
                                    <div class="text-primary">
                                        <div class="form-group h4">
                                            <label for="card-holder-name">Card Holder</label>
                                            <input class="form-control border-primary ip-payment" id="card-holder-name"
                                                   type="text"
                                                   style="text-transform:uppercase">
                                        </div>
                                        <label class="h4" for="card-holder-name">Enter Card Number</label>
                                        <div class="form-group">
                                            <div class="ip-payment pt-3 border border-primary rounded p-2"
                                                 id="card-element"></div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-primary mt-2 py-2 px-4 h4 shadow" id="card-button"
                                                    data-secret="{{ $intent->client_secret }}">
                                                Pay HK$1500/ @lang('keywords.course-item.section')
                                            </button>
                                        </div>
                                        <p class="h4 mt-2">Your card details would be securely saved for faster
                                            payments, CVV will not be stored.</p>
                                    </div>
                                </div>
                            </div>
                            {{-- WECHAT PAY --}}
                            <div class="d-flex align-items-center mb-4">
                                <input class="btn choose-payment-method mr-4" type="radio" name="exampleRadios"
                                       id="radioWechat"
                                       value="option1"
                                       data-toggle="collapse" data-target="#" aria-expanded="false"
                                       aria-controls="">
                                <label class="h3 m-0 font-weight-bold text-primary" for="radioWechat">
                                    <img class="mr-4" src="{{asset('images/ic/ic_wechat.svg')}}">
                                    WeChat Pay
                                </label>
                            </div>
                            {{-- ALIPAY --}}
                            <div class="d-flex align-items-center mb-4">
                                <input class="btn choose-payment-method mr-4" type="radio" name="exampleRadios"
                                       id="radioAlipay"
                                       value="option1"
                                       data-toggle="collapse" data-target="#" aria-expanded="false"
                                       aria-controls="">
                                <label class="h3 m-0 font-weight-bold text-primary" for="radioAlipay">
                                    <img class="mr-4" src="{{asset('images/ic/ic_alipay.svg')}}">
                                    Alipay
                                </label>
                            </div>
                            {{-- PAYPAL --}}
                            <div class="d-flex align-items-center mb-4">
                                <input class="btn choose-payment-method mr-4" type="radio" name="exampleRadios"
                                       id="radioPaypal"
                                       value="option1"
                                       data-toggle="collapse" data-target="#" aria-expanded="false"
                                       aria-controls="">
                                <label class="h3 m-0 font-weight-bold text-primary" for="radioPaypal">
                                    <img class="mr-4" src="{{asset('images/ic/ic_paypal.svg')}}">
                                    Paypal
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-1"></div>
                <div class="col-12 col-lg-4">
                    <div class="card border-primary">
                        <div class="card-body text-primary p-5">
                            <h4 class="card-title font-weight-bold border-bottom border-primary pb-3">
                                Your Course
                            </h4>
                            <div class="card border-0 mt-4">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="product-payment card-body text-white" style="background-color: #7B3939">
                                            <div class="text-center"><small>IGCSE</small></div>
                                            <p class="text-center"><small>實時直播課程</small></p>
                                            <div class="py-2 px-4 border border-white">
                                                <p class="text-center m-0"><small>英文英文課程第一部分講解</small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5>IGCSE 實時直播課程 英文課程
                                                第一部分講解</h5>
                                            <p class="card-text"><small>Ms. Polly Leung</small></p>
                                            <h3 class="font-weight-bold">HK$1500/ @lang('keywords.course-item.section')</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table width="100%" class="my-5">
                                <tr>
                                    <td><h4 class="font-weight-bold">Sub Total</h4></td>
                                    <td class="text-right"><h4 class="font-weight-bold">
                                            HK$1500/ @lang('keywords.course-item.section')</h4></td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td><h4 class="font-weight-bold">Discount</h4></td>
                                    <td class="text-right"><h4 class="font-weight-bold">
                                            HK$0/ @lang('keywords.course-item.section')</h4></td>
                                </tr>
                            </table>
                            <div class="d-flex justify-content-between align-items-center bg-btn-payment p-4 shadow-sm">
                                <h3 class="m-0 font-weight-bold">Total</h3>
                                <h3 class="m-0 font-weight-bold">HK$1500/ @lang('keywords.course-item.section')</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        <div class="d-flex align-items-center bg-auth">--}}
        {{--            <div class="container">--}}
        {{--                <div class="row justify-content-center">--}}

        {{--                    <div class="py-5 my-5 bg-secondary col-12 col-md-8 col-xl-6 my-5 border rounded border-dark">--}}
        {{--                        <div class="d-flex align-items-center">--}}
        {{--                            <div>Featured</div>--}}
        {{--                            <img class="ml-auto" src="{{asset('images/ic/card-pay.svg')}}" width="40">--}}
        {{--                        </div>--}}

        {{--                                <div class="d-flex justify-content-between">--}}
        {{--                                    <label for="card-holder-name">Card Holder</label>--}}
        {{--                                    <input class="w-75 form-control" id="card-holder-name"--}}
        {{--                                           type="text"--}}
        {{--                                           style="text-transform:uppercase">--}}

        {{--                                </div>--}}
        {{--                                <div class="my-3">--}}
        {{--                                    <div class="border rounded p-2" id="card-element"></div>--}}
        {{--                                </div>--}}

        {{--                                <button class="btn btn-primary mt-2" id="card-button"--}}
        {{--                                        data-secret="{{ $intent->client_secret }}">--}}
        {{--                                    Update Payment Method--}}
        {{--                                </button>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
    <script src="https://js.stripe.com/v3/"></script>

    <script>

        const stripe = Stripe("{{ config('app.stripe_key') }}");

        const elements = stripe.elements();
        const cardElement = elements.create('card', {
            hidePostalCode: true
        });

        cardElement.mount('#card-element');
    </script>

    <script>

        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;


        cardButton.addEventListener('click', async (e) => {
            const {setupIntent, error} = await stripe.confirmCardSetup(
                clientSecret,
                {
                    payment_method: {
                        card: cardElement,
                        billing_details: {name: cardHolderName.value}
                    }
                }
            );

            if (error) {
                console.error("error: ", error);
            } else {
                console.info('success: ', setupIntent.payment_method);
                axios.post("{{ route('site.payment.add-payment') }}", {
                    payment_method: setupIntent.payment_method,
                })
                    .then(function (response) {
                        console.log(response);
                        location.reload();
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        });

    </script>


@endsection
