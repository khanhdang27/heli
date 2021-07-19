@php
use App\Utilities\SelectionByClass;
@endphp

@extends('layout.app')

@section('title','Blog Page')

@section('content')

<div class="body-content">
    <div class="container-fluid text-center top-news-page h1">
        @lang('keywords.blog-page.learningColumn')
    </div>
    <div class="container-fluid pt-5 pb-5">
        <div class="ml-auto mr-auto d-flex flex-wrap w-75">
            @foreach($tags as $value)
            <a href="#" class="btn-hashtag mx-3 text-center" type="button">
                {{ $value->tag_name }}
            </a>
            @endforeach
        </div>
    </div>
    <div class="container-fluid ml-auto mr-auto pb-5 body-blog-page">
        
        <h1 class="pt-5 font-weight-bold text-primary">
            @lang('keywords.blog-page.latestArticles')
        </h1>
        <div class="row">
            <!--Component Latest Blog List-->
            @foreach($blogs as $value)
            <x-blog.blog-item-latest :blog=$value></x-blog.blog-item-latest>
            @endforeach
        </div>
        {{-- <div class="d-flex pt-5 mt-5 pb-5 justify-content-center">--}}
        {{-- <button class="btn-read-more h1">--}}
        {{-- @lang('keywords.blog-page.readMore')--}}
        {{-- <img src="{{asset("images/ic/ic_drop.svg")}}" width="65">--}}
        {{-- </button>--}}
        {{-- </div>--}}
    </div>
</div>
@endsection