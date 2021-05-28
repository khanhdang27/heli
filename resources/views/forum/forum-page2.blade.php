@extends('layout.app')

@section('title','Forum Page')

@section('content')
    <?php
    $listTag = [
        'IELTS' => '#IELTS',
        'IAL' => '#IAL',
        'IGCSE' => '#IGCSE',
        'UKISET' => '#UKISET',
        '#中文' => '#中文',
        '數學' => '數學',
        '英文' => '#英文',
        'UCAS' => '#UCAS',
        '化學' => '化學',
        '英語文文學' => '英語文文學'

    ]
    ?>
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.navBar.q&aArea')
        </div>
        <div class="container-fluid pt-5 pb-5">
            <div class="m-auto d-flex flex-wrap w-75">
                @foreach($listTag as $value)
                    <a href="#" class="btn-hashtag ml-3 mr-3">
                        {{ $value }}
                    </a>
                @endforeach

            </div>
        </div>
        <div class="container-fluid pb-5 ml-auto mr-auto body-forum-page">
            <div class="">
                <div class="row row-question pt-5 pb-5">
                    <div class="col-sm-3">
                        <div class="d-flex">
                            <img src="{{asset("images/ava2.jpg")}}" width="98" height="98">
                            <div class="pl-3 pt-2">
                                <p class="text-25">Kenny Or</p>
                                <p class="text-20-blue">10/03/2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p class="question text-28">
                            請問呢題點做？
                        </p>
                        <div class="pt-3 pb-3 ">
                            <img class="img-question" src="{{asset("images/question.jpg")}}">
                        </div>
                        <div class="text-28">
                            <span class="mr-3"><img class="ic-action"
                                                    src="{{asset("images/ic/ic_bookmark.svg")}}"></span>
                            <span class="mr-5"><img class="ic-action" src="{{asset("images/ic/ic_heart.svg")}}">1</span>
                            <span><img class="ic-action" src="{{asset("images/ic/ic_mess.svg")}}">2</span>

                        </div>
                    </div>
                    <div class="col-sm-3 d-flex flex-column justify-content-between">
                        <div>
                            <button class="btn-hashtag">
                                #數學
                            </button>
                        </div>
                        <p class="text-28 pt-2 ">已解決</p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="row row-question pt-5 pb-5">
                    <div class="col-sm-3">
                        <div class="d-flex">
                            <img src="{{asset("images/ava2.jpg")}}" width="98" height="98">
                            <div class="pl-3 pt-2">
                                <p class="text-25">Kenny Or</p>
                                <p class="text-20-blue">10/03/2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p class="question text-28">
                            希望幫到你
                        </p>
                        <div class="pt-3 pb-3 ">
                            <img class="img-question" src="{{asset("images/answer.jpg")}}">
                        </div>
                        <div class="text-28 d-flex">
                            <span class="mr-5"><img class="ic-action" src="{{asset("images/ic/ic_heart.svg")}}">1</span>
                            <span><img class="ic-action" src="{{asset("images/ic/ic_mess.svg")}}">2</span>

                        </div>
                    </div>
                    <div class="col-sm-3 d-flex flex-column justify-content-end">
                        <div class="d-flex text-28 pt-2 m-0">
                            <span class="mr-2"><img src="{{asset("images/ic/ic_star.svg")}}" width="40"></span>
                            <span class="pt-1">最佳答案</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

