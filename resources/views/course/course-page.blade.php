@php

use App\Models\Course;
use App\Models\User;

$course = $courseDetail->membershipCourses->course;
$latesLecture = null;
if (!empty($student_course)) {
$latesLecture = $student_course->lecture_study;
}

@endphp

@extends('layout.app')

@section('title', 'Course Page')

@section('content')
<hr class="m-0">
<div class="body-content container-fluid p-0">
    @if (!Auth::check() || empty($student_course))
    <x-home.buy-course :course=$course></x-home.buy-course>
    @else
    @if ($course->type == \Constants::COURSE_LIVE)
    <x-product-detail.course-card-page :course=$course :studentCourse=$student_course>
    </x-product-detail.course-card-page>
    @elseif($course->type == \Constants::COURSE_RECORD )
    @if (!empty($student_course->failed))
    <x-home.buy-course :course=$course></x-home.buy-course>
    @else
    <x-home.video-course :courseDetail=$course :studentCourse=$student_course :latesLecture=$latesLecture>
    </x-home.video-course>
    @endif
    @else
    <div class="mt-5">
    </div>
    @endif
    @endif
    <div class="container-fluid {{ !Auth::check() || empty($student_course) ? 'show-video' : '' }}">
        <div class="row p-0 flex-column-reverse flex-md-row">
            <div class="col-xl-8 container-fluid">
                <ul class="nav nav-pills flex-nowrap text-nowrap overflow-auto course-detail-tab" role="tablist">
                    <li class="nav-item ">
                        <a class="nav-link active category-link-text" data-toggle="pill" href="#homeCourse">
                            <h2 class="font-weight-bold">
                                @lang('keywords.coursePage.courseOverview')
                            </h2>
                        </a>
                    </li>
                    @if ($course->type == \Constants::COURSE_LIVE)
                    <li class="nav-item">
                        <a class="nav-link category-link-text" data-toggle="pill" href="#menuCourse1">
                            <h2 class="font-weight-bold">
                                @lang('keywords.coursePage.courseFrequency')
                            </h2>
                        </a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link category-link-text" data-toggle="pill" href="#menuCourse2">
                            <h2 class="font-weight-bold">
                                @lang('keywords.coursePage.mentorIntroduction')
                            </h2>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link category-link-text" data-toggle="pill" href="#menuCourse3">
                            <h2 class="font-weight-bold">
                                @lang('keywords.coursePage.studentEvaluation')
                            </h2>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="homeCourse" class="container-fluid pt-5 mb-5 tab-pane active">
                        <x-product-detail.course-overview :courseDetail=$course></x-product-detail.course-overview>
                    </div>
                    @if ($course->type == \Constants::COURSE_LIVE)
                    <div id="menuCourse1" class="container-fluid pb-5 tab-pane fade">
                        <x-product-detail.online-class :courseDetail=$course></x-product-detail.online-class>
                    </div>
                    @endif
                    <div id="menuCourse2" class="container-fluid pt-5 pb-5 tab-pane fade"><br>
                        <x-product-detail.course-tutor :courseDetail=$course></x-product-detail.course-tutor>
                    </div>
                    <div id="menuCourse3" class="container-fluid pt-5 pb-5 tab-pane fade"><br>
                        <x-product-detail.course-rate :courseDetail=$course :studentCourse=$student_course>
                        </x-product-detail.course-rate>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                @if (empty($student_course))
                <x-product-detail.buy-course :courseDetail=$courseDetail></x-product-detail.buy-course>
                @elseif($course->type == \Constants::COURSE_RECORD)
                <review-exam-component v-bind:exams="{{ $exams }}"></review-exam-component>
                <br>
                @if (!empty($student_course->failed))
                <div class="bg-white border border-danger p-5 text-gray buy-course-box mb-5">
                    <div class="mb-3 title-course">
                        <p class="h2 m-0 font-weight-bold">
                            {{ $course->course_name }}
                        </p>
                    </div>
                    <h2 class="text-center text-danger"> You failed </h2>
                    <h5 class="text-center text-danger"> date grade:
                        {{ date('d-m-Y', strtotime( $student_course->failed))}} </h5>
                    <h3 class="my-5 font-weight-bold">TOKEN: {{ $courseDetail->getPriceDiscount() }} </h3>
                    <div class="btn-above-video">
                        <a href="{{ route('site.user.payment', ['product_id' => $courseDetail->id]) }}">
                            <div class="btn btn-register-now w-100 border-primary h4 m-0 py-1 px-2">
                                @lang('keywords.coursePage.reTry')
                            </div>
                        </a>
                    </div>
                    <div class="d-flex align-items-center share-bar">
                        <span class="mr-2"><img width="36" src="{{ asset('images/ic/ic_share.svg') }}"></span>
                        <a data-toggle="collapse" href="#collapseShare" role="button" aria-expanded="false"
                            aria-controls="collapseShare">
                            <h5 class="pt-1 mb-0">@lang('keywords.coursePage.shareCourse')</h5>
                        </a>
                    </div>
                    <div class="collapse" id="collapseShare">
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>
                </div>
                @endif
                @endif
            </div>
        </div>
    </div>
    {{-- <x-subscribe-container></x-subscribe-container> --}}
    @push('inputFile')
    <script type="application/javascript">
        // Add the following code
            // if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
    </script>
    @endpush
    @endsection
