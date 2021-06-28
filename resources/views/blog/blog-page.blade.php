@php
    use App\Utilities\SelectionByClass;
@endphp

@extends('layout.app')

@section('title','Blog Page')

@section('content')


    @if (empty($blog_top))
        <div class="d-flex justify-content-center">
            <H3>
                No Data Fount
            </H3>
        </div>
    @else
        <div class="body-content">
            <div class="container-fluid text-center top-news-page">
                @lang('keywords.blog-page.learningColumn')
            </div>
            <div class="container-fluid pt-5 pb-5">
                <div class="ml-auto mr-auto d-flex flex-wrap w-75">
                    @foreach($tags as $value)
                        <button class="btn-hashtag ml-3 mr-3" type="button">
                            {{ $value->tag_name }}
                        </button>
                    @endforeach
                </div>
            </div>
            <div class="container-fluid ml-auto mr-auto pb-5 body-blog-page">
                <p class="h1 font-weight-bold text-primary">
                    @lang('keywords.blog-page.popularArticlesThisWeek')
                </p>
                <div class="row">
                    <!--Component blog top this week-->
                    <div class="col-xl-7 post-spotlight mb-5">
                        <x-blog.blog-top-week :blogs=$blog_top></x-blog.blog-top-week>
                    </div>
                    <!--Component blog list this week-->
                    <div class="col-xl-5 popular-articles-right">
                        @foreach($blogs as $item)
                            <x-blog.blog-list-week :blog=$item></x-blog.blog-list-week>
                        @endforeach
                    </div>
                </div>
                <p class="pt-5 h1 font-weight-bold text-primary">
                    @lang('keywords.blog-page.latestArticles')
                </p>
                <div class="row">
                    <!--Component Latest Blog List-->
                    @foreach($blog as $value)
                        <x-blog.blog-item-latest :blog=$value></x-blog.blog-item-latest>
                    @endforeach
                </div>
                <div class="d-flex pt-5 mt-5 pb-5 justify-content-center">
                    <button class="btn-read-more h1">
                        @lang('keywords.blog-page.readMore')
                        <img src="{{asset("images/ic/ic_drop.svg")}}" width="65">
                    </button>
                </div>
            </div>
        </div>
    @endif
@endsection
