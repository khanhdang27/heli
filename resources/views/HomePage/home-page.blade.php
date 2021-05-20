@extends('layout.app')

@section('title','Home Page')

@section('content')
    <?php
    $user = Auth::user();
    $list_video = [
        '課程簡介',
        '閱讀理解一：閱讀文章技巧',
        '閱讀理解二：閱讀文章技巧',
        '閱讀理解三：閱讀文章技巧',
        '閱讀理解四：閱讀文章技巧',
        '閱讀理解五：閱讀文章技巧',
        '閱讀理解六：閱讀文章技巧',
    ];
    $productList = [
        'item_1' => ['subject' => '英國',
            'subtitle' => '海外升學全攻略 英國篇',
            'description' => '英國升學需知',
            'courseName' => 'IGCSE 實時直播課程 英⽂課程 第⼀部分講解',
            'tutor' => 'Ms. Polly Leung',
            'price' => '$1500'],
        'item_2' => ['subject' => '英國',
            'subtitle' => '海外升學全攻略 英國篇',
            'description' => '英國升學需知',
            'courseName' => 'IGCSE 實時直播課程 英⽂課程 第⼀部分講解',
            'tutor' => 'Ms. Polly Leung',
            'price' => '$1500'],
    ]
    ?>
    <div class="banner">
        @include('categories-bar')
        @if(Auth::user()==null)
            <x-home.banner static="for test"></x-home.banner>
        @else
            <div class="top-page-loggedin bg-transparent">
                <div class="container text-center title-news">
                    @lang('keywords.latestNewsPage')
                </div>
                <div class="container container-news-page">
                    <div class="d-flex justify-content-center">
                        <div class="news-item ">
                            @for($news=0; $news<7;$news++)
                                <div class="news-title" value="news-title">8/1 IELTS 考試中心最新安排</div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="body-content">
        <div class="container-fluid discount-product">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="heading-title">
                        @lang('keywords.discountProduct')
                    </div>
                    <div class="d-flex flex-row flex-wrap">
                        @foreach($productList as $item)
                            <div class="pr-3">
                                <a class="product-hover" href="{{URL::route('site.course')}}">
                                    <x-product.product-box
                                        subject="{{$item['subject']}}"
                                        subtitle="{{$item['subtitle']}}"
                                        description="{{$item['description']}}"
                                        courseName="{{$item['courseName']}}"
                                        tutor="{{$item['tutor']}}"
                                        price="{{$item['price']}}">

                                    </x-product.product-box>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6 col-12 welcome-offer">
                    <div class="heading-title">
                        @lang('keywords.welcomeOffer')
                    </div>
                    <div class="d-flex flex-row flex-wrap">
                        @foreach($productList as $item)
                            <div class="pr-3">
                                <a class="product-hover" href="{{URL::route('site.course')}}">
                                    <x-product.product-box
                                        subject="{{$item['subject']}}"
                                        subtitle="{{$item['subtitle']}}"
                                        description="{{$item['description']}}"
                                        courseName="{{$item['courseName']}}"
                                        tutor="{{$item['tutor']}}"
                                        price="{{$item['price']}}">

                                    </x-product.product-box>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @if(Auth::user()!=null)

            <div class="container-fluid product-recommend">
                <div class="heading-title" id="tab-title">
                    @lang('keywords.hotCourseSeries')...
                </div>
                <div class="d-flex flex-wrap">
                    @foreach($productList as $item)
                        <div class="pr-3">
                            <a class="product-hover" href="{{URL::route('site.course')}}">
                                <x-product.product-box
                                    subject="{{$item['subject']}}"
                                    subtitle="{{$item['subtitle']}}"
                                    description="{{$item['description']}}"
                                    courseName="{{$item['courseName']}}"
                                    tutor="{{$item['tutor']}}"
                                    price="{{$item['price']}}">

                                </x-product.product-box>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="product-tab">
            @include('HomePage.product-tab')
        </div>
        @if(Auth::user()==null)
            <div class="container-fluid step-for-register bg-dark">
                <div class="content-step">
                    <div class="row row-step">
                        <div class="circle-step bg-secondary text-primary">
                            Step 1
                        </div>
                        <div class="col-sm-3 col-step">
                            <div class="dot-bar">
                                @for ($i = 0; $i < 8; $i++)
                                    <div class='list-dot bg-secondary'>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div class="circle-step bg-secondary text-primary">
                            Step 2
                        </div>
                        <div class="col-sm-3 col-step">
                            <div class="dot-bar">
                                @for ($i = 0; $i < 8; $i++)
                                    <div class="list-dot bg-secondary">
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div class="circle-step bg-secondary text-primary">
                            Step 3
                        </div>
                    </div>
                </div>
                <div class="content-step">
                    <div class="row text-center text-secondary">
                        <div class="col-xl col-lg col-sm">
                            <div class="title-step">線上註冊</div>
                            <span class="text-step">
                                填寫簡單資料，即可完成註冊
                            </span>
                        </div>
                        <div class="col-xl col-lg col-sm" id="step2">
                            <div class="title-step">
                                享受新用戶優惠
                            </div>
                            <span class="text-step">
                                以優惠價格試上真人/直播班，<br>
                                並領取價值$600的免費課程
                            </span>
                        </div>
                        <div class="col-xl col-lg col-sm ">
                            <div class="title-step">
                                立即體驗
                            </div>
                            <span class="text-step">
                                隨時隨地以手機、平板電腦或電<br>
                                腦體驗課程！
                            </span>

                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn-register-now btn-secondary text-primary" id="btn-register-step"
                            data-toggle="modal"
                            data-target="#registerModal">
                        <span>@lang('keywords.registerNowToExperience')</span>
                    </button>
                </div>
            </div>
        @endif
        @if(Auth::user()==null)
            <div class="container-fluid container-video border-secondary">
                <div class="container-fluid show-video">
                    <div class="mb-3 title-course">
                        <p class="m-0">IGCSE 英文課程</p>
                        <p class="m-0">第一部分講解（共12堂)</p>
                    </div>
                    <p class="teacher-name text-primary">Ms. Polly Leung</p>
                    <div class="row">
                        <div class="col-xl-8">
                            <video width="846" class="course-video" src="#" controls></video>
                        </div>
                        <div class="col-xl-4">
                            <div class="list-video text-primary">
                                <ol>
                                    @foreach($list_video as $item)
                                        <li>{{$item}}</li>
                                    @endforeach
                                </ol>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn-register-now btn-primary" id="" data-toggle="modal"
                                        data-target="#registerModal">
                                    <span>@lang('keywords.registerNowToExperience')</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="container-fluid container-video border-secondary mt-5">
                <div class="d-flex justify-content-between flex-wrap pt-5 top-video">
                    <p class="text-33">繼續我的課程...</p>
                    <button class=" m-0 btn-register-now text-25-white btn-dark-blue ">
                        其他已購買課程
                    </button>
                </div>
                <div class="container-fluid show-video">

                    <div class="mb-3 title-course">
                        <p class="m-0">IGCSE 英文課程</p>
                        <p class="m-0">第一部分講解（共12堂)</p>
                    </div>
                    <p class="teacher-name text-primary">Ms. Polly Leung</p>
                    <div class="row">
                        <div class="col-sm-8">
                            <video width="846" class="course-video" src="#" controls></video>
                        </div>
                        <div class="col-sm-4">
                            <div class="box-list-video">
                                <ol>
                                    @foreach($list_video as $item)
                                        <li>{{$item}}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if(Auth::user()==null)
            <div class="free-class-container">
                <div class="row-2">
                    <div class="border-right-radius border-primary">
                        <div class="text-content text-primary">
                            <span class="text">
                                免費試堂；體驗課程 <br>
                                網上課程及實時課程 <br>
                                任你選擇
                            </span>
                        </div>
                    </div>
                    <div class="circle-check bg-primary d-flex justify-content-center align-items-center">
                        <img width="133px" src="images/ic/Group8.png">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn-register-now btn-primary" data-toggle="modal" data-target="#registerModal">
                        <span>@lang('keywords.registerNowToExperience')</span>
                    </button>
                </div>
            </div>

            <div class="justify-content-center">
                <h1 class="title-card text-primary">客戶的表揚</h1>
                <div class="guest-praise-container">

                    <div class="d-flex w-75 flex-lg-nowrap flex-wrap m-auto">
                        @for ($guestPraise = 0; $guestPraise < 3; $guestPraise++)
                            <div class="praise-box ml-4 mr-4">
                                @include('praise')
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        @endif
    </div>

@endsection
