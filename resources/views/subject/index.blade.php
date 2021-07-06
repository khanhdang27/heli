@php
use App\Utilities\SelectionByClass;
@endphp

@extends('layout.app')

@section('title', 'Subject Page')

@section('content')

    <div class="body-content bg-course">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.navBar.subjectClassification')
        </div>
        {{-- <x-sub-header :subjects=$subjects></x-sub-header> --}}

        <div class="container-fluid p-0 container-course">
            <div class="title-subject text-primary text-center">
                {{ $subject->subject_name }}
            </div>
            <div class="sort text-primary mb-4 d-flex">
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
                    <label style="color: red" class="radio-inline mr-5">
                        <input class="btn-sort" type="radio" name="optradio">@lang('keywords.learningMaterial')
                    </label>
                </form>
            </div>
            <div>
                <x-product.course-list :courses=$courses typeOfUI="certificate_filter"></x-product.course-list>
            </div>
        </div>
    </div>
@endsection
