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
            <x-product-detail.course-card-page :course=$course ></x-product-detail.course-card-page>
        @else
            <x-home.video-course :courseDetail=$course></x-home.video-course>
        @endif
        <div class="d-flex justify-content-center pb-5">
            <div class="row container-fluid p-0 show-menu-tab">
                <div class="col-xl-8 container-fluid">
                    <ul class="nav nav-pills menu-tab" role="tablist">
                        <li class="nav-item ">
                            <a class="nav-link active category-link-text" data-toggle="pill" href="#home">
                                <h4>
                                    @lang('keywords.coursePage.courseOverview')
                                </h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link category-link-text" data-toggle="pill" href="#menu1">
                                <h4>
                                    @lang('keywords.coursePage.courseFrequency')
                                </h4>
                            </a>
                        </li>
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
                            <x-product-detail.course-overview :courseDetail=$course></x-product-detail.course-overview>
                        </div>
                        <div id="menu1" class="container-fluid pb-5 tab-pane fade">
                            <x-product-detail.online-class/>
                        </div>
                        <div id="menu2" class="container-fluid pt-5 pb-5 tab-pane fade"><br>
                            <x-product-detail.course-tutor :courseDetail=$course></x-product-detail.course-tutor>
                        </div>
                        <div id="menu3" class="container-fluid pt-5 pb-5 tab-pane fade"><br>
                            <x-product-detail.course-rate :courseDetail=$course></x-product-detail.course-rate>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    @if (empty($student_course))
                    <x-product-detail.buy-course :courseDetail=$courseDetail></x-product-detail.buy-course>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
