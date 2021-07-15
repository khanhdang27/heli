@extends('layout.app')

@section('title','News Page')

@section('content')
    <div class="body-news-page">
        <div class="container-fluid text-center top-news-page h1">
            @lang('keywords.latestNewsPage')
        </div>
        <div class="container container-news-page">
            <div class="content-news-page border-secondary">
                <div class="p-5">
                    <x-news.news :news=$news></x-news.news>
                </div>
            </div>

        </div>
    </div>
@endsection
