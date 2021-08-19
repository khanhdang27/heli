@extends('layout.app')

@section('content')

@php

use \App\Models\Course;

$course = $courses_with_group->membershipCourses->course;
@endphp

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
                            <div class="rounded-circle border border-primary mr-4 bg-user" style="width: 80px; height: 80px;
                                         background-image: url('{{ asset(empty(Auth::user()->avatar)
                                                                        ? "images/user_default.png"
                                                                        : '/file/'.Auth::user()->avatar->id
                                                                        )}}');">
                            </div>
                            <div class="mr-4">
                                <h4 class="font-weight-bold">{{Auth::user()->name}}</h4>
                                @if (!empty(Auth::user()->card_last_four))
                                <h4 class="font-weight-bold">**** **** **** {{Auth::user()->card_last_four}}</h4>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-4 d-flex align-items-center justify-content-end">
                            <img src="{{ asset('images/HeliosLogo.svg') }}" height="48px">
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
                                id="radioVisa" value="option1" data-toggle="collapse" data-target="#collapseVisa"
                                aria-expanded="false" aria-controls="collapseVisa">
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
                                            type="text" style="text-transform:uppercase">
                                    </div>
                                    <label class="h4" for="card-holder-name">Enter Card Number</label>
                                    <div class="form-group">
                                        <div class="ip-payment pt-3 border border-primary rounded p-2"
                                            id="card-element"></div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary mt-2 py-2 px-4 h4 shadow" id="card-button"
                                            data-secret="{{ $intent->client_secret }}">
                                            Pay HK${{$courses_with_group->getPriceDiscount()}}/
                                            @lang('keywords.course-item.section')
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
                                id="radioWechat" value="option1" data-toggle="collapse" data-target="#"
                                aria-expanded="false" aria-controls="">
                            <label class="h3 m-0 font-weight-bold text-primary" for="radioWechat">
                                <img class="mr-4" src="{{asset('images/ic/ic_wechat.svg')}}">
                                WeChat Pay
                            </label>
                        </div>
                        {{-- ALIPAY --}}
                        <div class="d-flex align-items-center mb-4">
                            <input class="btn choose-payment-method mr-4" type="radio" name="exampleRadios"
                                id="radioAlipay" value="option1" data-toggle="collapse" data-target="#"
                                aria-expanded="false" aria-controls="">
                            <label class="h3 m-0 font-weight-bold text-primary" for="radioAlipay">
                                <img class="mr-4" src="{{asset('images/ic/ic_alipay.svg')}}">
                                Alipay
                            </label>
                        </div>
                        {{-- PAYPAL --}}
                        <div class="d-flex align-items-center mb-4">
                            <input class="btn choose-payment-method mr-4" type="radio" name="exampleRadios"
                                id="radioPaypal" value="option1" data-toggle="collapse" data-target="#"
                                aria-expanded="false" aria-controls="">
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
                                <div class="col-md-6">
                                    <div class="product-payment card-body"
                                        style="background-color: {{$course->subject->subject_color_background}}; text-color: {{$course->subject->subject_color_text}} ">
                                        <div class="text-center">
                                            <small>{{$course->subject->certificate->certificate_code}}</small></div>
                                        <p class="text-center"><small>{{ Course::COURSE_TYPE[$course->type] }}</small>
                                        </p>
                                        <div class="py-2 px-4 border border-white">
                                            <p class="text-center m-0"><small>{{$course->course_name}}</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="text-limit-3">{{$course->subject->certificate->certificate_code}}
                                            {{$course->course_description}}</h5>
                                        <p class="card-text"><small>{{$course->tutor->full_name}}</small></p>
                                        <h3 class="font-weight-bold">HK${{$courses_with_group->getPriceDiscount()}}/
                                            @lang('keywords.course-item.section')</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table width="100%" class="my-5">
                            <tr>
                                <td>
                                    <h4 class="font-weight-bold">Sub Total</h4>
                                </td>
                                <td class="text-right">
                                    <h4 class="font-weight-bold">
                                        HK$ {{$courses_with_group->getPrice()}}/ @lang('keywords.course-item.section')
                                    </h4>
                                </td>
                            </tr>
                            <tr class="font-weight-bold">
                                <td>
                                    <h4 class="font-weight-bold">Discount</h4>
                                </td>
                                <td class="text-right">
                                    <h4 class="font-weight-bold">
                                        {{$courses_with_group->getDiscount()}} %</h4>
                                </td>
                            </tr>
                        </table>
                        <div class="d-flex justify-content-between align-items-center bg-btn-payment p-4 shadow-sm">
                            <h3 class="m-0 font-weight-bold">Total</h3>
                            <h3 class="m-0 font-weight-bold">HK${{$courses_with_group->getPrice()}}/
                                @lang('keywords.course-item.section')</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        location.href = "{{ route('site.order.create', ['product_id' => $courses_with_group->id, 'room_id'=> $room_id] ) }}", 
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        });

</script>


@endsection
