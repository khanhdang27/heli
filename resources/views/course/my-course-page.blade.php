@extends('layout.app')

@section('title','My Course Page')

@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.coursePage.myCourses')
        </div>
        @include('layout.sub-header')
        <div class="container-fluid pt-5 pl-0 pr-0">
            <div class="container-fluid p-0 ">
                <div class="container-fluid">
                    <h1 class="text-primary" id="tab-title">
                        我已購買的課程
                    </h1>
                    <x-product.course-list :courses=$courses></x-product.course-list>
                </div>
                <div class="container-fluid">
                    <h1 class="text-primary" id="tab-title">
                        我已購買的課程
                    </h1>
                    <x-product.course-list :courses=$courses></x-product.course-list>
                   
                </div>
            </div>
        </div>
    </div>
@endsection

