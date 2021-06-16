@extends('layout.app')

@section('title','News Page')

@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.latestNewsPage')
        </div>
        <div class="container-fluid pb-5 body-content w-75">
            <div class="pt-5 text-primary text-30">
                <p>{{$news->date}} {{$news->title}}</p>
                <div class="d-flex">
                    <p class="text-20 text-primary mr-5">{{ substr($news->created_at,0,10) }}</p>
                </div>
            </div>
            <div class="text-dark">
                {!! $news->content !!}
            </div>
        </div>
    </div>
@endsection

