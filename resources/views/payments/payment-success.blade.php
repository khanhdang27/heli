
@extends('layout.app')

@section('title','Payment')

@section('content')

    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            付款
        </div>
        <div class="container-fluid container-course mx-auto py-5 text-primary">
            <h1 class="text-primary font-weight-bold">Course Payment</h1>
            <h1 class="text-center font-weight-bold my-5">Successful Course Payment</h1>
            <div class="d-flex justify-content-center">
                <img width="150px" src="{{asset('images/ic/ic_helios.svg')}}">
            </div>
            <h2 class="text-center font-weight-bold">Helios Education, Inc.</h2>
            <h3 class="text-center font-weight-bold">Thank you for purchasing the course by Helios. You can join the course now</h3>
            <div class="d-flex justify-content-center mt-5">
                <a href="{{route('site.course.show', $course_id)}}" class="btn text-white bg-primary border border-primary rounded btn-register-now m-0 py-2">
                    Learn now
                </a>
            </div>
        </div>
    </div>
@endsection
