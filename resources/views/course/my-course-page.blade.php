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
                <div class="container-fluid product-recommend">
                    <div class="heading-title" id="tab-title">
                        我已購買的課程
                    </div>
                    <x-product.course-list
                        :courseItem=$courses>
                    </x-product.course-list>
                </div>
                <div class="container-fluid product-recommend">
                    <div class="heading-title" id="tab-title">
                        我已購買的課程
                    </div>
                    <x-product.course-list
                        :courseItem=$courses>
                    </x-product.course-list>
                   
                </div>
            </div>
        </div>
    </div>
@endsection

