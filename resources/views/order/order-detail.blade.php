@extends('layout.app')

@section('title','Blog Page')

@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            付款
        </div>
        <div class="container-fluid container-course mx-auto py-5">
            <h1 class="text-primary font-weight-bold">Course Payment</h1>
            <div class="row pt-5">
                <div class="col-12 col-lg-7 text-primary">
                    <h3 class="font-weight-bold">Invoice Details</h3>
                    <table width="100%" class="mt-4">
                        <tr>
                            <td><h4 class="font-weight-bold">Recipient</h4></td>
                            <td class="text-right"><h4 class="font-weight-bold">
                                    Helios Education
                                </h4></td>
                        </tr>
                        <tr>
                            <td><h4 class="font-weight-bold">Course Price</h4></td>
                            <td class="text-right"><h4 class="font-weight-bold">
                                    HK{{$order->final_price}}/@lang('keywords.course-item.section')</h4></td>
                        </tr>
                        <tr>
                            <td><h4 class="font-weight-bold">Course Name</h4></td>
                            <td class="text-right"><h4 class="font-weight-bold">
                                    {{$order->course->course_name}}</h4></td>
                        </tr>
                        <tr>
                            <td><h4 class="font-weight-bold">Date</h4></td>
                            <td class="text-right"><h4 class="font-weight-bold">
                                    {{$order->created_at}}</h4></td>
                        </tr>
                        <tr class="font-weight-bold">
                            <td><h4 class="font-weight-bold">Invoice ID</h4></td>
                            <td class="text-right"><h4 class="font-weight-bold">
                                    {{$order->payment_id}}</h4></td>
                        </tr>
                        <tr class="font-weight-bold">
                            <td><h4 class="font-weight-bold">Visa Credit Card</h4></td>
                            <td class="text-right"><h4 class="font-weight-bold">
                                    **** **** **** ****</h4></td>
                        </tr>
                    </table>
                    <div class="d-flex justify-content-between btn-above-video mt-5">
                        <button class="btn btn-register-now border border-primary rounded m-0 py-1">
                            Change Payment Method
                        </button>
                        <button class="text-white bg-primary border border-primary rounded btn-register-now m-0">
                            Bill And Pay
                        </button>
                    </div>
                </div>
                <div class="col-12 col-lg-1"></div>
                <div class="col-12 col-lg-4">
                    <div class="card border-primary">
                        <div class="card-body text-primary p-5">
                            <div class="d-flex justify-content-center">
                                <img width="150px" src="{{asset('images/ic/ic_helios.svg')}}">
                            </div>
                            <h2 class="font-weight-bold text-center">Helios Education, Inc.</h2>
                            <h4 class="text-center">Send money</h4>
                            <h1 class="font-weight-bold text-center mt-4">HK{{$order->final_price}}/@lang('keywords.course-item.section')</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="container-fluid my-5 pb-5">--}}
{{--        <div class=" mx-auto w-50">--}}
{{--            <div class="card flex-row flex-wrap">--}}
{{--                <div class="card-header border-1">--}}
{{--                    <img width="200px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Book.svg/448px-Book.svg.png" alt="">--}}
{{--                </div>--}}
{{--                <div class="card-block px-2">--}}
{{--                    <h4 class="card-title">Course: <a href="{{ route('site.course.show', $order->course_id) }}">{{$order->course->course_name}} </a></h4>--}}
{{--                    <p class="card-text">Price: {{$order->price}}</p>--}}
{{--                    <p class="card-text">Payment Invoice: {{$order->payment_id}} </p>--}}
{{--                    <p class="card-text">Price: {{$order->membership_discount}} </p>--}}
{{--                    <p class="card-text">Discount: {{$order->course_discount}}% </p>--}}
{{--                    <p class="card-text">Total: {{$order->final_price}} </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


@endsection
