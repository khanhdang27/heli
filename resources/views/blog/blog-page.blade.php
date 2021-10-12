@php
use App\Utilities\SelectionByClass;
@endphp

@extends('layout.app')

@section('title', 'Blog Page')

@section('content')
    @php
        $lang = [ 'more' => __('keywords.more')];
    @endphp
<div class="body-content">
    <div class="container-fluid text-center top-news-page">
        @lang('keywords.blog-page.learningColumn')
    </div>
    @if (empty($blog_top))
    <div class="d-flex justify-content-center">
        <H3>
            No Data Fount
        </H3>
    </div>
    @else
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <x-slide-tag.slide-tag :tags=$tags type="blog"></x-slide-tag.slide-tag>
            </div>
        </div>
        <div class="row justify-content-center pt-5 pb-5">
            <div class="col-md-9">
                <h2 class="font-weight-bold text-primary bg-white">
                    @lang('keywords.blog-page.popularArticlesThisWeek')
                </h2>
                <div class="row">
                    <!--Component blog top this week-->
                    <div class="col-xl-7 px-4 post-spotlight mb-5">
                        <x-blog.blog-top-week :blogs=$blog_top></x-blog.blog-top-week>
                    </div>
                    <!--Component blog list this week-->
                    <div class="col-xl-5 px-4 popular-articles-right">
                        @foreach ($blogs as $item)
                        <x-blog.blog-list-week :blog=$item></x-blog.blog-list-week>
                        @endforeach
                    </div>
                </div>
                <h1 class="pt-5 font-weight-bold text-primary">
                    @lang('keywords.blog-page.latestArticles')
                </h1>
                <blog-latest-component route="{{ route("site.blog.list")}}" v-bind:lang="{{json_encode($lang)}}">
                </blog-latest-component>
            </div>
        </div>
    </div>
    @endif
    <x-subscribe-container></x-subscribe-container>
</div>
@endsection
