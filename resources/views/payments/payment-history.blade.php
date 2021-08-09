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
                    {{--                {{dd($order)}}--}}
                    @foreach($order as $value)
                        <tr>
                            <td>{{ substr($value->created_at,0,10) }}</td>
                            <td class="w-50">
                                {{$value->course->course_name}}
                            </td>
                            <td>payment method</td>
                            <td>
                                <button class="btn btn-primary">Paid</button>
                            </td>
                            <td>HK{{$value->final_price}}/@lang('keywords.course-item.section')</td>
                            <td>{{$value->payment_id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

