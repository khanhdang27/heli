@extends('layout.app')

@section('title','Payment')

@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            付款
        </div>
        <div class="container-fluid container-course mx-auto py-5 text-primary">
            <h1 class="text-primary font-weight-bold">Payment History</h1>
            <h3 class="mt-5 mb-3">Here you can review all of your payment to Helios</h3>
            <div class="table-responsive pb-5">
                <table class="table text-primary mb-5 border-bottom">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Course</th>
                        <th scope="col">Payment Method</th>
                        <th scope="col">Status</th>
                        <th scope="col">Total</th>
                        <th scope="col">Invoice</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($stripe as $value)
                        <tr>
                            <td>{{date('m/d/Y',$value->created)}}</td>
                            <td class="w-50">
                                @php
                                    $course = $order->filter(function($item) use ($value){
                                        return $item->payment_id == $value->id;
                                    })->first();
                                @endphp
                                {{$course->course->course_name}}
                            </td>
                            <td>payment method</td>
                            <td>
                                <button class="btn btn-primary">{{$value->status}}</button>
                            </td>
                            <td>HK${{$value->amount}}/@lang('keywords.course-item.section')</td>
                            <td>{{$value->id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

