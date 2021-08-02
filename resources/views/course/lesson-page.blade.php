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
                    <div id="detail" class="col-lg-6">
                        <div class="product-box mt-0 row bg-white m-0">
                            <div class="top-product col-lg-5 px-0">
                                <div class="content-product row" style="background-color: {{$course->subject->subject_color_background}}; height: 200px">
                                    <div class="col-3">
                                        <div class="color-bar" style="height: 170px">
                                        </div>
                                    </div>
                                    <div
                                        class="body-product-content d-flex flex-column justify-content-between align-items-center col-9"
                                        style="color: {{$course->subject->subject_color_text}}">
                                        <div class="content-top text-wrap w-75">
                                            {{$course->subject->certificate->certificate_code}}<br>
                                        </div>
                                        <div class="content-bot" title="{{$course->course_name}}">
                                            {{$course->course_name}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="d-flex justify-content-between h-100">
                                    <div
                                        class="name-product w-75 d-flex flex-column justify-content-between text-primary p-3">
                                        <div class="text-multiline-truncate">
                                            <h2 class="font-weight-bold">
                                                {{ mb_substr($course->course_description,0,50)}}
                                            </h2>
                                        </div>
                                        <div class="h4 mt-auto">
                                            {{$course->tutor->full_name}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="detail" class="col-lg-4"></div>
                </div>
                <div class="pt-5">
                    <x-product-detail.lecture-course videoId={{$live_code}}></x-product-detail.lecture-course>
                </div>
            </div>
        </div>
    </div>
@endsection
