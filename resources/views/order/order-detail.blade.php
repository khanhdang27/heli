@extends('layout.app')

@section('title','Blog Page')

@section('content')
    <div class="container-fluid my-5 pb-5">
        <div class=" mx-auto w-50">
            <div class="card flex-row flex-wrap">
                <div class="card-header border-1">
                    <img width="200px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Book.svg/448px-Book.svg.png" alt="">
                </div>
                <div class="card-block px-2">
                    <h4 class="card-title">Course: <a href="{{ route('site.course.show',['id'=>$order->course_id]) }}">{{$order->course->course_name}} </a></h4>
                    <p class="card-text">Price: {{$order->price}}</p>
                    <p class="card-text">Payment Invoice: {{$order->payment_id}} </p>
                    <p class="card-text">Discount: {{$order->discount}} </p>
                    <p class="card-text">Total: {{$order->total}} </p>
                </div>
            </div>
        </div>
    </div>


@endsection
