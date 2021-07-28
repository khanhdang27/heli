@extends('layout.app')

@section('title','My Course Page')

@section('content')
    <div class="body-content bg-course">
        <div class="container-fluid text-center top-news-page h1">
            @lang('keywords.coursePage.myCourses')
        </div>
        <div class="container-fluid pt-5 pl-0 pr-0 container-course">
            <div>
                <h1 class="text-primary" id="tab-title">
                    @lang('keywords.coursesIHavePurchased')
                </h1>
                @php
                    $arrayNoLike = $courses->map(function ($item,$key){
                        return $item;
                    });
                @endphp

                @foreach( $courses as $key=>$value)
                    @foreach($value->membershipCourses->course->likeable as $item)
                       @if($item->user_id == Auth::user()->id)
                           @php $arrayNoLike->forget($key); @endphp
                        @endif
                    @endforeach
                @endforeach
                <x-product.course-list :courses=$arrayNoLike typeOfUI="normal"></x-product.course-list>
            </div>
            <div>
                <h1 class="text-primary" id="tab-title">
                    @lang('keywords.coursesIHavePurchased')
                </h1>
                @php
                    $arrayLike = [];
                @endphp
                @foreach( $courses as $value)
                    @foreach($value->membershipCourses->course->likeable as $item)
                        @if($item->user_id == Auth::user()->id)
                                @php array_push($arrayLike,$value); @endphp
                        @endif
                    @endforeach
                @endforeach
                <x-product.course-list :courses=$arrayLike typeOfUI="normal"></x-product.course-list>
            </div>
        </div>
    </div>
@endsection