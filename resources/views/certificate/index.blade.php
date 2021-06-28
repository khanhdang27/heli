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
            <div class="container-fluid text-primary mb-4 d-flex h2">
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
                        <input class="btn-sort" type="radio" name="optradio">@lang('keywords.learningMaterial')
                    </label>
                </form>
            </div>
            @foreach( $certificate->subject as $subject)
                @php
                $course = $courses->where('membershipCourses.course.subject_id',$subject->id)
                @endphp
                <div class="container-fluid">
                    <h1 class="text-primary" id="tab-title">
                        {{$subject->subject_name}}
                    </h1>
                    <x-product.course-list :courses=$course typeOfUI="certificate_filter"></x-product.course-list>
                </div>
            @endforeach
        </div>
    </div>
@endsection
