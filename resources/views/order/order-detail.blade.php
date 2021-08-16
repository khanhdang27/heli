@extends('layout.app')

@section('title','Payment')

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
                <table width="100%" class="mt-4 table-responsive-sm">
                    <tr>
                        <td>
                            <h4 class="font-weight-bold">Recipient</h4>
                        </td>
                        <td class="text-right">
                            <h4 class="font-weight-bold">
                                Helios Education
                            </h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 class="font-weight-bold">Course Price</h4>
                        </td>
                        <td class="text-right">
                            <h4 class="font-weight-bold">
                                HK{{$order->final_price}}/@lang('keywords.course-item.section')</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 class="font-weight-bold">Course Name</h4>
                        </td>
                        <td class="text-right">
                            <h4 class="font-weight-bold">
                                {{$order->course->course_name}}</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 class="font-weight-bold">Date</h4>
                        </td>
                        <td class="text-right">
                            <h4 class="font-weight-bold">
                                {{$order->created_at}}</h4>
                        </td>
                    </tr>
                    <tr class="font-weight-bold">
                        <td>
                            <h4 class="font-weight-bold">Invoice ID</h4>
                        </td>
                        <td class="text-right">
                            <h4 class="font-weight-bold">
                                {{$order->payment_id}}</h4>
                        </td>
                    </tr>
                    <tr class="font-weight-bold">
                        <td>
                            <h4 class="font-weight-bold">Visa Credit Card</h4>
                        </td>
                        <td class="text-right">
                            <h4 class="font-weight-bold">
                                **** **** **** {{ Auth::user()->card_last_four }}</h4>
                        </td>
                    </tr>
                </table>
                <div class="d-flex justify-content-center btn-above-video my-5">
                    <a class="text-white bg-primary border border-primary rounded btn-register-now m-0"
                        href="{{ route('site.course.show', $order->course) }}">
                        Learn now
                    </a>
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
                        <h1 class="font-weight-bold text-center mt-4">
                            HK{{$order->final_price}}/@lang('keywords.course-item.section')</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
