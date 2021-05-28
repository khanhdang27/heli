@extends('layout.app')

@section('title','Course Page')

@section('content')
    <?php
    $tutorList = [
        'item1' => [
            'tutor_photo' => 'images/ava.jpg',
            'tutor_name' => 'Ms. Polly Leung',
            'tutor_info' => 'MSc Applied Linguistics and Second Language Acquisition, University of Oxford',
            'tutor_level' => '► Bachelor of Education in Language Education, The University of Hong Kong',
            'tutor_specialized' => '► Specialised in Language/IELTS teaching/Personal Statement/Interview',
            'tutor_experience' => '► More than 10 years of experiences'],
    ]
    ?>
    @include('layout.sub-header')
    <div class="body-content">
        <div class="container-fluid">
            @include('show-video')
        </div>
        <div class="container-fluid d-flex justify-content-center pb-5">
            <div class="row container-fluid p-0 show-menu-tab">
                <div class="col-xl-8 container-fluid ">
                    <ul class="nav nav-pills menu-tab" role="tablist">
                        <li class="nav-item ">
                            <a class="nav-link active category-link-text" data-toggle="pill" href="#home">
                                @lang('keywords.coursePage.courseOverview')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link category-link-text" data-toggle="pill" href="#menu1">
                                @lang('keywords.coursePage.courseFrequency')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link category-link-text" data-toggle="pill" href="#menu2">
                                @lang('keywords.coursePage.mentorIntroduction')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link category-link-text" data-toggle="pill" href="#menu3">
                                @lang('keywords.coursePage.studentEvaluation')
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="container-fluid pt-5 pb-5  tab-pane active">
                            <x-product-detail.course-overview/>
                        </div>
                        <div id="menu1" class="container-fluid pb-5 tab-pane fade">
                            <x-product-detail.online-class/>
                        </div>
                        <div id="menu2" class="container-fluid pt-5 pb-5 tab-pane fade"><br>
                            @foreach($tutorList as $value)
                                <x-product-detail.course-tutor
                                    tutorPhoto="{{$value['tutor_photo']}}"
                                    tutorName="{{$value['tutor_name']}}"
                                    tutorInfo="{{$value['tutor_info']}}"
                                    tutorLevel="{{$value['tutor_level']}}"
                                    tutorSpecialized="{{$value['tutor_specialized']}}"
                                    tutorExperience="{{$value['tutor_experience']}}"
                                >
                                </x-product-detail.course-tutor>
                            @endforeach
                        </div>
                        <div id="menu3" class="container-fluid pt-5 pb-5 tab-pane fade"><br>
                            <x-product-detail.course-rate/>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="product bg-white border-secondary p-4">
                        <div class="mb-3 title-course">
                            <p class="m-0">IELTS 英文課程</p>
                            <p class="m-0">第一部分講解（共12堂)</p>
                        </div>
                        <p class="m-0 teacher-name">Ms. Polly Leung</p>
                        <p class="price">HKD2,500</p>
                        <div class="btn-primary m-0 btn-register-now product-btn b">
                            @lang('keywords.coursePage.registerNow')
                        </div>
                        <div class="btn-primary mt-3 btn-register-now product-btn">
                            @lang('keywords.coursePage.addToCart')
                        </div>
                        <div class="d-flex share-bar">
                            <span class="mr-2"><img width="36" src="{{ asset("images/ic/ic_share.svg")}}"></span>
                            <p class="text-20 pt-1">@lang('keywords.coursePage.shareCourse')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
