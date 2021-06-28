@extends('layout.app')

@section('title','News Page')

@section('content')
    <div class="body-news-page">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.latestNewsPage')
        </div>
        <div class="container container-news-page">
            <div class="content-news-page border-secondary">
                <div class="p-5">
                    <div class="show-news-item mx-auto">
                        @foreach($news as $item)
                            <a href="{{ route('site.news-detail',$item->id) }}">
                                <h2>
                                {{$item->date}}
                                {{$item->title}}
                                </h2>
                            </a>
                        @endforeach
                    </div>

{{--                    <div class="d-flex justify-content-center bottom-collapse">--}}
{{--                        <button class="btn-more bg-white text-primary border-primary" id="btn-showNews"--}}
{{--                                onclick="showNews()" type="submit">更多 <img--}}
{{--                                src="{{asset("images/ic/ic_drop.svg")}}" width="28"></button>--}}
{{--                    </div>--}}
                </div>
            </div>

        </div>
    </div>
@endsection
