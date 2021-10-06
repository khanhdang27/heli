@php
use Illuminate\Support\Facades\Auth;

@endphp

<div class="container-fluid show-video py-5">
    <div class="row">
        <div id="detail" class="col-xl-8">
            <div class="product-box mt-0 row mx-0 bg-white course-card-page">
                <div class="top-product col-md-5">
                    <div class="content-product py-5 rounded-top-course"
                        style="background-color: {{ $course->subject->subject_color_background }}">
                        <div class="body-product-content d-flex flex-column justify-content-between align-items-center col-10 mx-auto"
                            style="color: {{ $course->subject->subject_color_text }}">
                            <div class="content-top text-wrap w-100">
                                {{ $course->subject->certificate->certificate_code }}<br>
                                @if ($course->type == 1)
                                    @lang('keywords.course-item.liveCourse')
                                @else
                                    @lang('keywords.course-item.courseRecord')
                                @endif
                            </div>
                            <div class="box-content-bot py-4 px-5 w-100">
                                <div class="content-bot" title="{{ $course->course_name }}">
                                    {{ $course->course_name }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <div
                        class="name-product d-flex flex-column
                                justify-content-between text-primary py-4">

                        <div class="d-flex flex-md-nowrap flex-sm-wrap">
                            <div class="text-limit-3 pr-4">
                                <h5 class="h3 font-weight-bold">
                                    {{ $course->course_description }}
                                </h5>
                            </div>
                            <div class="mt-auto">
                                @if (Auth::check())
                                    <like-component v-bind:user-id="{{ Auth::user()->id }}"
                                        v-bind:like-ref-id="{{ $course->id }}"
                                        v-bind:like-module="'App\\Models\\Course'" v-bind:like-no="0"
                                        v-bind:is-liked="{{ $course->likebyUser() }}">
                                    </like-component>
                                @endif
                            </div>
                        </div>
                        <div class="h5 mt-5">
                            {{ $course->tutor->full_name }}
                        </div>
                        <div class="d-flex flex-sm-wrap top-course-detail justify-content-between mb-5">
                            <div class="d-flex align-items-center text-primary">
                                <rating-component v-bind:rating="{{ $course->rating_average }}"
                                    v-bind:read-only="true">
                                </rating-component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
</div>
