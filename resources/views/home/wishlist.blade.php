@extends('layout.app')

@section('title','My Wishlist')

@section('content')
    <div class="body-content bg-course">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.coursePage.wishlist')
        </div>
        <div class="container-fluid pt-5 container-course">
            <div>
                <h1 class="text-primary" id="tab-title">
                    @lang('keywords.coursesWishlist')
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
