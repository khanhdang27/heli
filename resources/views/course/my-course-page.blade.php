@extends('layout.app')

@section('title','My Course Page')

@section('content')
    <div class="body-content bg-course">
        <div class="container-fluid text-center top-news-page h1">
            @lang('keywords.coursePage.myCourses')
        </div>
        {{-- <x-sub-header :subjects=$subjects></x-sub-header>  --}}
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
{{--                                        {{dd($value->membershipCourses->course->likeable)}}--}}
                    @foreach($value->membershipCourses->course->likeable as $item)
                       @if($item->user_id == Auth::user()->id)
{{--                           @php array_splice($courses,$key,1); @endphp--}}
                           @php $arrayNoLike->forget($key); @endphp
                        @endif
                    @endforeach
                @endforeach
{{--                {{dd($arrayNoLike)}}--}}
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
{{--                    <p>{{$value->id}}</p>--}}
                    {{--                    {{dd($value->membershipCourses->course->likeable)}}--}}
                    @foreach($value->membershipCourses->course->likeable as $item)
{{--                        {{$item}}--}}
                        @if($item->user_id == Auth::user()->id)
{{--                            {{$value->id}}--}}
                                @php array_push($arrayLike,$value); @endphp
                        @endif
                    @endforeach
                @endforeach
{{--                {{dd($a)}}--}}
                <x-product.course-list :courses=$arrayLike typeOfUI="normal"></x-product.course-list>
            </div>
        </div>
    </div>
@endsection

