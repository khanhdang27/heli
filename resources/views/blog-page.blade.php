@extends('layout.app')

@section('title','Blog Page')

@section('content')
    <?php
    $listTag = [
        'a' => '#海外升學',
        'b' => '#學費',
        'c' => '#英國',
        'd' => '#UCAS',
    ]
    ?>
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.blog-page.learningColumn')
        </div>
        <div class="container-fluid pt-5 pb-5">
            <div class="ml-auto mr-auto d-flex flex-wrap w-75">
                @foreach($listTag as $value)
                    <a href="#" class="btn-hashtag ml-3 mr-3">
                        {{ $value }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="container-fluid ml-auto mr-auto pb-5 body-blog-page">
            <p class="text-40 text-primary">
                @lang('keywords.blog-page.popularArticlesThisWeek')
            </p>
            <div class="row">
                <div class="col-xl-7">
                    <div class="mt-2 popular-item">
                        <div class="thumb-article d-flex flex-column justify-content-end"
                             style="background-image: url('{{asset("images/bg-article.jpg")}}')">
                            <div class="container-fluid pt-2 info-article">
                                <a href="{{route('site.blog-view')}}" class="title-article">
                                    【英國留學費用】英國升學讀書一年費用要幾錢? (大學學費+租金+生活費)
                                </a>
                                <div class="d-flex justify-content-between flex-wrap pb-3">
                                    <div class="d-flex">
                                        <p class="text-20 mr-5">
                                            2021/03/20
                                        </p>
                                        <span class="text-20"><img src="{{asset("images/ic/ic_eye.svg")}}" width="26">2,840</span>
                                    </div>
                                    <div class="d-flex">
                                        <button class="btn-hashtag-small">
                                            #海外升學
                                        </button>
                                        <button class="btn-hashtag-small">
                                            #學費
                                        </button>
                                        <button class="btn-hashtag-small">
                                            #學費
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 ">
                    <div class="list-article">
                        <div class="float-right pt-3 info-article-right">
                            <div class="d-flex pb-3 flex-wrap">
                                <div class="border-0 img-thumbnail">
                                    <img src="{{asset("images/bg-article2.jpg")}}" width="220" height="220">
                                </div>
                                <div class="title-article-right">
                                    <p class="text-30">
                                        【英國留學攻略】UCAS聯招系統、2021大學排名、升學顧問、費用安排
                                    </p>
                                    <p class="text-20-blue">
                                        <span>2021/03/20</span><img class="ml-5"
                                                                    src={{asset("images/ic/ic_eyeBlue.svg")}}>2,840
                                    </p>
                                    <div class="d-flex flex-wrap">
                                        @foreach($listTag as $value)
                                            <a href="#" class="btn-hashtag text-12">
                                                {{ $value }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="float-right pt-3 info-article-right">
                            <div class="d-flex pb-3 flex-wrap">
                                <div class="border-0 img-thumbnail">
                                    <img src="{{asset("images/bg-article2.jpg")}}" width="220" height="220">
                                </div>
                                <div class="title-article-right">
                                    <p class="text-30">
                                        【英國留學攻略】UCAS聯招系統、2021大學排名、升學顧問、費用安排
                                    </p>
                                    <p class="text-20-blue">
                                        <span>2021/03/20</span><img class="ml-5"
                                                                    src={{asset("images/ic/ic_eyeBlue.svg")}}>2,840
                                    </p>
                                    <div class="d-flex flex-wrap">
                                        @foreach($listTag as $value)
                                            <a href="#" class="btn-hashtag text-12">
                                                {{ $value }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="float-right pt-3 info-article-right">
                            <div class="d-flex pb-3 flex-wrap">
                                <div class="border-0 img-thumbnail">
                                    <img src="{{asset("images/bg-article2.jpg")}}" width="220" height="220">
                                </div>
                                <div class="title-article-right">
                                    <p class="text-30">
                                        【英國留學攻略】UCAS聯招系統、2021大學排名、升學顧問、費用安排
                                    </p>
                                    <p class="text-20-blue">
                                        <span>2021/03/20</span><img class="ml-5"
                                                                    src={{asset("images/ic/ic_eyeBlue.svg")}}>2,840
                                    </p>
                                    <div class="d-flex flex-wrap">
                                        @foreach($listTag as $value)
                                            <a href="#" class="btn-hashtag text-12">
                                                {{ $value }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <p class="pt-5 text-40 text-primary">
                @lang('keywords.blog-page.latestArticles')
            </p>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mt-2 popular-item">
                        <div class="thumb-article d-flex flex-column justify-content-end"
                             style="background-image: url('{{asset("images/bg-article.jpg")}}')">
                            <div class="container-fluid pt-2 info-article">
                                <p class="title-article">
                                    【英國留學費用】英國升學讀書一年費用要幾錢? (大學學費+租金+生活費)
                                </p>
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="d-flex">
                                        <p class="text-20 mr-5">
                                            2021/03/20
                                        </p>
                                        <span class="text-20"><img src={{asset("images/ic/ic_eye.svg")}}>2,840</span>
                                    </div>
                                    <div class="d-flex flex-wrap pb-3">
                                        <button class="btn-hashtag-small">
                                            #海外升學
                                        </button>
                                        <button class="btn-hashtag-small">
                                            #學費
                                        </button>
                                        <button class="btn-hashtag-small">
                                            #學費
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mt-2 popular-item">
                        <div class="thumb-article d-flex flex-column justify-content-end"
                             style="background-image: url('{{asset("images/bg-article.jpg")}}')">
                            <div class="container-fluid pt-2 info-article">
                                <p class="title-article">
                                    【英國留學費用】英國升學讀書一年費用要幾錢? (大學學費+租金+生活費)
                                </p>
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="d-flex">
                                        <p class="text-20 mr-5">
                                            2021/03/20
                                        </p>
                                        <span class="text-20"><img src={{asset("images/ic/ic_eye.svg")}}>2,840</span>
                                    </div>
                                    <div class="d-flex flex-wrap pb-3">
                                        <button class="btn-hashtag-small">
                                            #海外升學
                                        </button>
                                        <button class="btn-hashtag-small">
                                            #學費
                                        </button>
                                        <button class="btn-hashtag-small">
                                            #學費
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mt-2 popular-item">
                        <div class="thumb-article d-flex flex-column justify-content-end"
                             style="background-image: url('{{asset("images/bg-article.jpg")}}')">
                            <div class="container-fluid pt-2 info-article">
                                <p class="title-article">
                                    【英國留學費用】英國升學讀書一年費用要幾錢? (大學學費+租金+生活費)
                                </p>
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="d-flex">
                                        <p class="text-20 mr-5">
                                            2021/03/20
                                        </p>
                                        <span class="text-20"><img src={{asset("images/ic/ic_eye.svg")}}>2,840</span>
                                    </div>
                                    <div class="d-flex flex-wrap pb-3">
                                        <button class="btn-hashtag-small">
                                            #海外升學
                                        </button>
                                        <button class="btn-hashtag-small">
                                            #學費
                                        </button>
                                        <button class="btn-hashtag-small">
                                            #學費
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mt-2 popular-item">
                        <div class="thumb-article d-flex flex-column justify-content-end"
                             style="background-image: url('{{asset("images/bg-article.jpg")}}')">
                            <div class="container-fluid pt-2 info-article">
                                <p class="title-article">
                                    【英國留學費用】英國升學讀書一年費用要幾錢? (大學學費+租金+生活費)
                                </p>
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="d-flex">
                                        <p class="text-20 mr-5">
                                            2021/03/20
                                        </p>
                                        <span class="text-20"><img src={{asset("images/ic/ic_eye.svg")}}>2,840</span>
                                    </div>
                                    <div class="d-flex flex-wrap pb-3">
                                        <button class="btn-hashtag-small">
                                            #海外升學
                                        </button>
                                        <button class="btn-hashtag-small">
                                            #學費
                                        </button>
                                        <button class="btn-hashtag-small">
                                            #學費
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex pt-5 mt-5 pb-5 justify-content-center">
                <button class="btn-read-more">
                    @lang('keywords.blog-page.readMore')
                    <img src="{{asset("images/ic/ic_drop.svg")}}" width="65">
                </button>
            </div>
        </div>
    </div>
@endsection
