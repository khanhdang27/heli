@extends('layout.app')

@section('title', 'Home Page')

@section('content')
    <div class="banner position-relative">
        <x-sub-header :subjects=$subjects page="home"></x-sub-header>
        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if (!Auth::check())
            <x-home.banner :banner=$banners></x-home.banner>
        @else
            <br>
            <div class="container pt-5 mt-5">
                <h1 class="text-center text-secondary mt-3">
                    @lang('keywords.latestNewsPage')
                </h1>
                <hr class="border-secondary">
                <div class="mx-auto box-news">
                    @foreach ($news as $item)
                        <div class=" my-2">
                            <a class="h2" href="{{ route('site.news-detail', $item->id) }}">
                                {{ $item->announcement_date }}
                                {{ $item->title }}
                            </a><br>
                        </div>

                    @endforeach
                </div>
            </div>
            <!-- #endregion -->
        @endif
    </div>
    <div class="body-content">
        <div class="container-fluid container-home mt-5" id="body-content">
            <div class="row">
                @if (!Auth::check())
                    <div class="col-lg-5 col-12">
                        <h2 class="text-primary font-weight-bold">
                            @lang('keywords.latestDiscountProduct')
                        </h2>
                        <x-product.course-list :courses=$course_latest typeOfUI="lasted"></x-product.course-list>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-5 col-12 welcome-offer">
                        <h2 class="text-primary font-weight-bold">
                            @lang('keywords.welcomeOffer')
                        </h2>
                        <x-product.course-list :courses=$course_welcomes typeOfUI="welcome"></x-product.course-list>
                    </div>
                @else
                    <div class="col-lg-6 col-12 welcome-offer">
                        <h2 class="text-primary font-weight-bold">
                            @lang('keywords.welcomeOffer')
                        </h2>
                        <x-product.course-list :courses=$course_welcomes typeOfUI="welcome"></x-product.course-list>
                    </div>
                @endif

            </div>
        </div>
        @if (Auth::check())
            <div class="container-fluid container-home">
                <h2 class="text-primary font-weight-bold" id="tab-title">
                    @lang('keywords.recommendedForYou')...
                </h2>
                <x-product.course-list :courses=$course_recommended typeOfUI="recommended"></x-product.course-list>
            </div>
        @endif
        <div class="product-tab">
            <x-home.product-tab :courseIGCSE=$courseIGCSE :courseUKISET=$courseUKISET :courseIELTS=$courseIELTS
                :courseIAL=$courseIAL typeOfUI="hot"></x-home.product-tab>
        </div>
        @if (!Auth::check())
            <x-home.step-register></x-home.step-register>
        @endif
        @if (!Auth::check())
            {{-- chua dang nhap --}}
            {{-- <x-home.video-course :courseDetail=$courseVideo></x-home.video-course> --}}

            <slide-tutor-component v-bind:tutors="{{$tutors}}"></slide-tutor-component>

        @else
            {{-- da dang nhap --}}
            <div class="mx-auto container-home mt-5">
                {{-- <div class="d-flex justify-content-between flex-wrap pt-5 btn-above-video px-3">
                    <h2 class="text-primary">@lang('keywords.continueMyCourse')</h2>
                    <a href="{{ route('site.user.course') }}" class="m-0 btn btn-register-now btn-login px-5">
                        @lang('keywords.otherPurchasedCourses')
                    </a>
                </div> --}}
                {{-- <x-home.video-course :courseDetail=$courseVideo :latesLecture=$latesLecture></x-home.video-course> --}}
            <slide-tutor-component v-bind:tutors="{{$tutors}}"></slide-tutor-component>

            </div>
        @endif
        @if (!Auth::check())
            <div class="free-class-container" id="free-class">
                <div class="position-relative d-flex align-items-center">
                    <div class="border-right-radius border-primary" id="border-right-free-class">
                        <div class="text-content d-flex justify-content-end text-primary">
                            <h1 class="text-information text-content mb-0" id="text-free-class">
                                @lang('keywords.freeTrialClass')
                            </h1>
                        </div>
                    </div>
                    <div class="circle-check position-absolute bg-primary d-flex justify-content-center align-items-center"
                        id="circle-check">
                        <img width="111px" src="{{ asset('images/ic/Group8.png') }}">
                    </div>
                </div>
                <div class="d-flex justify-content-center btn-above-video">
                    <button class="btn-register-now py-1" id="btn-free-class" data-toggle="modal"
                        data-target="#registerModalComponent">
                        <span class="font-weight-bold">@lang('keywords.registerNowToExperience')</span>
                    </button>
                    <x-login.register-modal></x-login.register-modal>
                </div>
            </div>
            @push('scripts')
                <script type="application/javascript">
                    if (!String.prototype.format) {
                        String.prototype.format = function(...args) {
                            return this.replace(/(\{\d+\})/g, function(a) {
                                return args[+(a.substr(1, a.length - 2)) || 0];
                            });
                        };
                    }

                    const linestep1 = document.getElementById('border-right-free-class');
                    const textstep2 = document.getElementById('text-free-class');
                    const circlestep3 = document.getElementById('circle-check');

                    let is_scoll_into = false;
                    $(window).scroll(function() {
                        var hT = $('#free-class').offset().top,
                            hH = $('#free-class').outerHeight(),
                            wH = $(window).height(),
                            wS = $(this).scrollTop();
                        if (wS > (hT - hH) && wS < (hT + hH) && !is_scoll_into) {
                            is_scoll_into = true;

                            var tl_free = anime.timeline({
                                duration: 800,
                                loop: false
                            });

                            tl_free.add({
                                targets: linestep1,
                                translateX: -10,
                                direction: 'alternate',
                                loop: true,
                                easing: 'spring(1, 80, 10, 0)'
                            })
                            tl_free.add({
                                targets: circlestep3,
                                translateY: 5,
                                scale: 0.8,
                                opacity: [0, 1],
                                direction: 'alternate',
                                loop: true,
                                easing: 'spring(1, 80, 10, 0)'
                            })
                            tl_free.add({
                                targets: textstep2,
                                opacity: [0, 1],
                                translateY: 5,
                                direction: 'alternate',
                                loop: true,
                                easing: 'spring(1, 80, 10, 0)'
                            })
                        }
                    });
                </script>
            @endpush
            <x-home.review></x-home.review>
        @endif
        <x-subscribe-container></x-subscribe-container>
    </div>

@endsection
