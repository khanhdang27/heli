@extends('layout.app')

@section('title','Home Page')

@section('content')

    <div class="banner">
        <x-home.categories :subjects=$subjects></x-home.categories>
        @if(!Auth::check())
            <x-home.banner :banner=$banners></x-home.banner>
        @else
            <br>
            <div class="container pt-5">
                <h1 class="text-center text-secondary">
                    @lang('keywords.latestNewsPage')
                </h1>
                <div class="list-news w-50 mx-auto">
                    @foreach($news as $item)
                    <h3 class="text-primary">
                        <a class="text-primary">
                            {{substr($item->updated_at,-14,6)}}
                            {{$item->title}}
                        </a>
                    </h3>
                    @endforeach
                </div>
            </div>
            <!-- #endregion -->
        @endif
    </div>
    <div class="body-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h1 class="text-primary">
                        @lang('keywords.latestDiscountProduct')
                    </h1>
                    <x-product.course-list :courses=$course_latest typeOfUI="lasted"></x-product.course-list>
                </div>
                <div class="col-lg-6 col-12 welcome-offer">
                    <h1 class="text-primary">
                        @lang('keywords.welcomeOffer')
                    </h1>
                    <x-product.course-list :courses=$course_welcomes typeOfUI="welcome"></x-product.course-list>
                </div>
            </div>
        </div>
        @if(Auth::check())
            <div class="container-fluid">
                <h1 class="text-primary" id="tab-title">
                    @lang('keywords.recommendedForYou')...
                </h1>
                <x-product.course-list :courses=$course_recommended typeOfUI="recommended"></x-product.course-list>
            </div>
        @endif
        <div class="product-tab">
            <x-home.product-tab :courses=$course_hot typeOfUI="hot"></x-home.product-tab>
        </div>
        @if(!Auth::check())
            <x-home.step-register></x-home.step-register>
        @endif
        @if(!Auth::check())
            <x-home.video-course :courseDetail=$courseVideo></x-home.video-course>
            <div class="d-flex justify-content-end pr-3">
                <div class="text-left w-25">
                    <button class="btn-register-now mt-0 mb-4 btn-primary" id="" data-toggle="modal"
                            data-target="#registerModal">
                        <span>@lang('keywords.tryItNow')</span>
                    </button>
                </div>
            </div>
        @else
            <div class="mx-auto container-video border-secondary mt-5 pb-5">
                <div class="d-flex justify-content-between flex-wrap pt-5 top-video">
                    <h1 class="text-primary">@lang('keywords.continueMyCourse')</h1>
                    <button class="m-0 btn-register-now h1 text-white btn-dark-blue btn-dark">
                        @lang('keywords.otherPurchasedCourses')
                    </button>
                </div>
                <x-home.video-course :courseDetail=$courseVideo></x-home.video-course>
            </div>
        @endif
        @if(Auth::check())
            <div class="free-class-container">
                <div class="position-relative d-flex align-items-center">
                    <div class="border-right-radius border-primary">
                        <div class="text-content d-flex justify-content-end text-primary">
                        <span class="text-information">
                            @lang('keywords.freeTrialClass')
                        </span>
                        </div>
                    </div>
                    <div
                        class="circle-check position-absolute bg-primary d-flex justify-content-center align-items-center">
                        <img width="100px" src="{{asset('images/ic/Group8.png')}}">
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
@endsection
@push('scripts')
    <script>
        $(function() {
            var $quote = $("#title-home-page");

            var $numWords = $quote.text().split(" ").length;
            console.log($numWords);

            if (($numWords >= 1) && ($numWords < 10)) {
                $quote.css("font-size", "36px");
            }
            else if (($numWords >= 10) && ($numWords < 20)) {
                $quote.css("font-size", "32px");
            }
            else if (($numWords >= 20) && ($numWords < 30)) {
                $quote.css("font-size", "28px");
            }
            else if (($numWords >= 30) && ($numWords < 40)) {
                $quote.css("font-size", "24px");
            }
            else {
                $quote.css("font-size", "20px");
            }

        });
    </script>
@endpush
