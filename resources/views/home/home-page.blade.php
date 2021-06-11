@extends('layout.app')

@section('title','Home Page')

@section('content')
    @if (empty($courses))
        <div class="d-flex justify-content-center">
            <H3>
                No Data Of Course
            </H3>
        </div>
    @else
        <div class="banner">
        @include('categories-bar')
            @if(Auth::user()==null)
                <x-home.banner :banner=$banners></x-home.banner>
            @else
                <!-- #region Video -->
                <div class="top-page-loggedin">
                    <div class="container text-center title-news text-secondary">
                        @lang('keywords.latestNewsPage')
                    </div>
                    <div class="news-item mx-auto">
                        @for($news=0; $news<7;$news++)
                            <p class="news-title m-0">8/1 Ms. Polly Leung 最新實時直播課程</p>
                        @endfor
                    </div>
                </div>
                <!-- #endregion -->
            @endif
        </div>
        <div class="body-content">
            <div class="mx-auto discount-product">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <p class="heading-title">
                            @lang('keywords.discountProduct')
                        </p>
                        <x-product.course-list :courseItem=$courses>
                        </x-product.course-list>
                    </div>
                    <div class="col-lg-6 col-12 welcome-offer">
                        <p class="heading-title">
                            @lang('keywords.welcomeOffer')
                        </p>
                        <x-product.course-list :courseItem=$courses>
                        </x-product.course-list>
                    </div>
                </div>
            </div>
            @if(Auth::user()!=null)
                <div class="mx-auto product-recommend">
                    <div class="heading-title" id="tab-title">
                        @lang('keywords.hotCourseSeries')...
                    </div>
                    {{--<x-product.course-list></x-product.course-list>--}}
                </div>
            @endif
            <div class="product-tab">
                @include('home.product-tab')
            </div>
            @if(Auth::user()==null)
                <x-home.step-register></x-home.step-register>
            @endif
            @if(Auth::user()==null)
                <x-home.video-course></x-home.video-course>
                <div class="d-flex justify-content-end pr-3">
                    <div class="text-left w-25">
                        <button class="btn-register-now mt-0 mb-4 btn-primary" id="" data-toggle="modal"
                                data-target="#registerModal">
                            <span>@lang('keywords.tryItNow')</span>
                        </button>
                    </div>
                </div>
            @else
                <div class="mx-auto container-video border-secondary mt-5">
                    <div class="d-flex justify-content-between flex-wrap pt-5 top-video">
                        <p class="text-33 text-primary">@lang('keywords.continueMyCourse')</p>
                        <button class="m-0 btn-register-now text-25 text-white btn-dark-blue btn-dark">
                            @lang('keywords.otherPurchasedCourses')
                        </button>
                    </div>
                    <x-home.video-course></x-home.video-course>
                </div>
            @endif
            @if(Auth::user()==null)
                <div class="free-class-container">
                    <div class="position-relative d-flex align-items-center">
                        <div class="border-right-radius border-primary">
                            <div class="text-content d-flex justify-content-end text-primary">
                            <span class="text-advertisement">
                                @lang('keywords.freeTrialClass')
                            </span>
                            </div>
                        </div>
                        <div
                            class="circle-check position-absolute bg-primary d-flex justify-content-center align-items-center">
                            <img width="133px" src="{{asset('images/ic/Group8.png')}}">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn-register-now btn-primary" data-toggle="modal"
                                data-target="#registerModalComponent">
                            <span>@lang('keywords.registerNowToExperience')</span>
                        </button>
                        <x-login.register-modal></x-login.register-modal>
                    </div>
                </div>
                <x-home.review></x-home.review>
            @endif
        </div>
    @endif
@endsection
