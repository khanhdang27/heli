@extends('layout.app')

@section('title','Course Page')

@section('content')
    @include('layout.sub-header')
    <div class="body-content">
        <div class="container-fluid">
            <x-home.video-course :courseDetail=$courseDetail></x-home.video-course>
        </div>
        <div class="container-fluid d-flex justify-content-center pb-5">
            <div class="row container-fluid p-0 show-menu-tab">
                <div class="col-xl-8 container-fluid">
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
                        <div id="home" class="container-fluid pt-5 mb-5  tab-pane active">
                            <x-product-detail.course-overview :courseDetail=$courseDetail>

                            </x-product-detail.course-overview>
                        </div>
                        <div id="menu1" class="container-fluid pb-5 tab-pane fade">
                            <x-product-detail.online-class/>
                        </div>
                        <div id="menu2" class="container-fluid pt-5 pb-5 tab-pane fade"><br>
                                <x-product-detail.course-tutor :courseDetail=$courseDetail>
                                </x-product-detail.course-tutor>
                        </div>
                        <div id="menu3" class="container-fluid pt-5 pb-5 tab-pane fade"><br>
                            <x-product-detail.course-rate/>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <x-product-detail.buy-course :courseDetail=$courseDetail>
                    </x-product-detail.buy-course>
                </div>
            </div>
        </div>


    </div>

@endsection
