@extends('layout.app')

@section('title','Subject Page')

@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.navBar.subjectClassification')
        </div>
        @include('layout.sub-header')
        <div class="container-fluid p-0">
            <div class="title-subject text-primary text-center">
                {{$certificate->certificate_name}}
            </div>
            <div class="container-fluid sort text-primary mb-4 d-flex">
                <span class="mr-4">@lang('keywords.sort')</span>
                <form>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" name="optradio" checked> @lang('keywords.upToDate')
                    </label>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" name="optradio"> @lang('keywords.price')
                    </label>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" name="optradio">@lang('keywords.liveCourses')
                    </label>
                    <label class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" name="optradio">@lang('keywords.recordALesson')
                    </label>
                    <label style="color: red" class="radio-inline mr-5 ">
                        <input  class="btn-sort" type="radio" name="optradio">@lang('keywords.learningMaterial')
                    </label>
                </form>
            </div>
            <div class="container-fluid p-0">
                <div class="container-fluid product-recommend">
                    <div class="heading-title" id="tab-title">
                        英文
                    </div>
                    <div class="d-flex flex-wrap">
                        @foreach($courses as $item)
                            <div class="pr-3">
                                <a class="product-hover" href="{{URL::route('site.course')}}">
                                    <x-product.course-item :course=$item>
                                    </x-product.course-item>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
