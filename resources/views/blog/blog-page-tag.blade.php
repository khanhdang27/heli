@php
use App\Utilities\SelectionByClass;
    $lang = [ 'more' => __('keywords.more')];
@endphp

@extends('layout.app')

@section('title','Blog Page')

@section('content')

<div class="body-content">
    <div class="container-fluid text-center top-news-page">
        @lang('keywords.blog-page.learningColumn')
    </div>
    <div class="container-fluid pt-5 pb-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <x-slide-tag.slide-tag :tags=$tags type="blog"></x-slide-tag.slide-tag>
            </div>
        </div>
        <div class="row justify-content-center pb-5" id="show-blog">
            <div class="col-md-9">
                <h1 class="pt-5 font-weight-bold text-primary">
                    @lang('keywords.blog-page.latestArticles')
                </h1>
                <blog-page-tag-component v-bind:lang="{{json_encode($lang)}}" v-bind:tag="{{$tag->id}}">
                </blog-page-tag-component>
            </div>
        </div>
    </div>
</div>
@endsection
