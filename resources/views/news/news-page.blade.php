@extends('layout.app')

@section('title','News Page')

@section('content')
    @php
        $lang = [ 'more' => __('keywords.more')];
    @endphp
<div class="body-news-page">
    <div class="container-fluid text-center top-news-page">
        @lang('keywords.latestNewsPage')
    </div>
    <div class="container container-news-page">
        <div class="content-news-page border-secondary">
            <div class="py-5">
                <news-component route="{{ route("site.news.list")}}" v-bind:lang="{{json_encode($lang)}}"></news-component>
            </div>
        </div>
    </div>
    <x-subscribe-container></x-subscribe-container>
</div>
@endsection
