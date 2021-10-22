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
            @if ($course->type == Course::LIVE)
                <x-product-detail.course-card-page :course=$course :studentCourse=$student_course>
                </x-product-detail.course-card-page>
            @elseif($course->type == Course::RECORD )
                <x-home.video-course :courseDetail=$course :latesLecture=$latesLecture></x-home.video-course>
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
                        @if ($course->type == Course::LIVE)
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
                        @if ($course->type == Course::LIVE)
                            <div id="menuCourse1" class="container-fluid pb-5 tab-pane fade">
                                <x-product-detail.online-class :courseDetail=$course></x-product-detail.online-class>
                            </div>
                        @endif
                        <div id="menuCourse2" class="container-fluid pt-5 pb-5 tab-pane fade"><br>
                            <x-product-detail.course-tutor :courseDetail=$course></x-product-detail.course-tutor>
                        </div>
                        <div id="menuCourse3" class="container-fluid pt-5 pb-5 tab-pane fade"><br>
                            <x-product-detail.course-rate :courseDetail=$course :studentCourse=$student_course></x-product-detail.course-rate>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    @if (empty($student_course))
                        <x-product-detail.buy-course :courseDetail=$courseDetail></x-product-detail.buy-course>
                    @endif
                </div>
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
