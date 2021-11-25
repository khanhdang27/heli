@extends('layout.app')

@section('title','My Course Page')

@section('content')
    <div class="body-content bg-course">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.coursePage.myCourses')
        </div>
        <div class="container-fluid pt-5 container-course">
            <div>
                <h1 class="text-primary" id="tab-title">
                    @lang('keywords.coursesIHavePurchased')
                </h1>
                @php
                    $arrayLike = [];
                @endphp
                @foreach( $courses as $key => $value)
                    @php array_push($arrayLike,$value); @endphp
                @endforeach
                <x-product.course-list :courses=$arrayLike typeOfUI="normal"></x-product.course-list>
            </div>

        </div>
    </div>
@endsection
