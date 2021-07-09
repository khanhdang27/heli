@php

    use App\Models\Course;
    $course = $courseDetail->membershipCourses->course;

@endphp

@extends('layout.app')

@section('title','Course Page')

@section('content')
    {{-- <x-sub-header :subjects=$subjects></x-sub-header>  --}}
    <div class="body-content container-fluid">
        @if ( $course->type == Course::$LIVE )
            <x-product-detail.course-card-page :course=$course></x-product-detail.course-card-page>
        @elseif($course->type == Course::$RECORD )
            <x-home.video-course :courseDetail=$course></x-home.video-course>
        @else
            <div class="mt-5">

            </div>
        @endif
        <div class="d-flex justify-content-center pb-5">
            <div class="row container-fluid p-0 show-menu-tab">
                @if($course->type == Course::$DOCUMENT)
                    <div class="col-xl-8 bg-white">
                        @foreach($course->courseMaterial as $value)
                            <div class="col-sm-6">
                                <div class="mt-5">
                                    <a href="{{ route('site.file.download', $value->file) }}">
                                        <img class="border-0 p-0 " height="430"
                                             src="{{ asset('images/book_icon.png') }}">
                                    </a>

                                </div>
                                <div class="text-primary bottom-package w-75 mb-3">
                                    <p class="pb-3">** {{ $value->course_material_origin }}</p>
                                    <p class="m-0">{{ $value->course_material_name }}</p>
                                    <p class="m-0">
                                        {{ (strlen($value->course_material_description) < 50 ) ?
                                            $value->course_material_description
                                            : substr($value->course_material_description, 0, strpos($value->course_material_description, ' ', 50)) }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="col-xl-8 container-fluid">
                        <ul class="nav nav-pills menu-tab" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-link active category-link-text" data-toggle="pill" href="#home">
                                    <h4>
                                        @lang('keywords.coursePage.courseOverview')
                                    </h4>
                                </a>
                            </li>
                            @if ( $course->type == Course::$LIVE )
                                <li class="nav-item">
                                    <a class="nav-link category-link-text" data-toggle="pill" href="#menu1">
                                        <h4>
                                            @lang('keywords.coursePage.courseFrequency')
                                        </h4>
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link category-link-text" data-toggle="pill" href="#menu2">
                                    <h4>
                                        @lang('keywords.coursePage.mentorIntroduction')
                                    </h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link category-link-text" data-toggle="pill" href="#menu3">
                                    <h4>
                                        @lang('keywords.coursePage.studentEvaluation')
                                    </h4>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="home" class="container-fluid pt-5 mb-5  tab-pane active">
                                <x-product-detail.course-overview
                                    :courseDetail=$course></x-product-detail.course-overview>
                            </div>
                            @if ( $course->type == Course::$LIVE )
                                <div id="menu1" class="container-fluid pb-5 tab-pane fade">
                                    <x-product-detail.online-class/>
                                </div>
                            @endif
                            <div id="menu2" class="container-fluid pt-5 pb-5 tab-pane fade"><br>
                                <x-product-detail.course-tutor :courseDetail=$course></x-product-detail.course-tutor>
                            </div>
                            <div id="menu3" class="container-fluid pt-5 pb-5 tab-pane fade"><br>
                                <x-product-detail.course-rate :courseDetail=$course></x-product-detail.course-rate>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-xl-4">
                    @if (empty($student_course))
                        <x-product-detail.buy-course :courseDetail=$courseDetail></x-product-detail.buy-course>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
