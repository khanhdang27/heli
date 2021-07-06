@extends('layout.app')

@section('title','My Course Page')

@section('content')
    <div class="body-content bg-course">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.coursePage.myCourses')
        </div>
        {{-- <x-sub-header :subjects=$subjects></x-sub-header>  --}}
        <div class="container-fluid pt-5 pl-0 pr-0 container-course">
            <div>
                <h1 class="text-primary" id="tab-title">
                    我已購買的課程
                </h1>
                <x-product.course-list :courses=$courses typeOfUI="normal"></x-product.course-list>
            </div>
            <div>
                <h1 class="text-primary" id="tab-title">
                    我已購買的課程
                </h1>
                <x-product.course-list :courses=$courses typeOfUI="normal"></x-product.course-list>
            </div>
        </div>
    </div>
@endsection

