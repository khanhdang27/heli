@extends('layout.app')

@section('title','Course Page')

@section('content')
    @php
        $course = $room->course;
        $live_code = $room->room_live_code;
    @endphp
    <hr class="m-0">
    <div class="body-content">
        {{-- <x-sub-header :subjects=$subjects></x-sub-header> --}}
        <div class="container-fluid pt-5 pb-5 pl-0 pr-0">
            <div class="w-75 m-auto">
                <div class="row">
                    <div id="detail" class="col-lg-9">
                        <div class="product-box mt-0 row bg-white m-0">
                            <div class="top-product col-lg-5">
                                <div class="content-product rounded-top-course"
                                     style="background-color: {{$course->subject->subject_color_background}}">
                                    <div
                                        class="body-product-content d-flex flex-column justify-content-between align-items-center col-10 mx-auto"
                                        style="color: {{$course->subject->subject_color_text}}">
                                        <div class="content-top text-wrap w-100">
                                            {{ $course->subject->certificate->certificate_code }}<br>
                                            @lang('keywords.course-item.liveCourse')
                                        </div>
                                        <div class="box-content-bot p-4 w-100">
                                            <div class="content-bot" title="{{$course->course_name}}">
                                                {{$course->course_name}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="h-100">
                                    <div
                                        class="name-product d-flex flex-column justify-content-between text-primary p-3">
                                        <div class="text-multiline-truncate">
                                            <h2 class="font-weight-bold">
                                                {{ mb_substr($course->course_description,0,50)}}
                                            </h2>
                                        </div>
                                        <div class="h5 mt-5">
                                            {{$course->tutor->full_name}}
                                        </div>
                                        <div class="d-flex align-items-center text-primary">
                                            @php
                                                $rate = (int) floor($course->rating_average);
                                            @endphp
                                            @for ($i = 0; $i < $rate; $i++) <img
                                                src="{{ asset('images/ic/ic_star.svg') }}" width="29">
                                            @endfor
                                            @for ($i = 0; $i < 5 - $rate; $i++) <img
                                                src="{{ asset('images/ic/ic_star_border.svg') }}" width="29">
                                            @endfor
                                            <h5 class="mb-0 ml-3">{{ $course->rating_average }}/5</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="detail" class="col-lg-3"></div>
                </div>
                <div class="pt-5">
                    <iframe class="embed-responsive embed-responsive-16by9 responsive-iframe"
                            src="{{ 'https://player.vimeo.com/video/' . $live_code . '?badge=0&autopause=0&app_id=' . config('app.vimeo_app_id') }}"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                            allowfullscreen title="Default name"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
