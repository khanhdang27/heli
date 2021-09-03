@extends('layout.app')

@section('title','News Page')

@section('content')
<div class="body-content">
    <div class="container-fluid text-center top-news-page">
        @lang('keywords.latestNewsPage')
    </div>
    <div class="container-fluid pb-5 body-content w-75">
        <button class="btn btn-outline-primary" onclick="window.history.back()">
            <i class="fe fe-arrow-left"></i> {{ __('Back') }} </button>
        <div class="pt-5 text-primary">
            <h2>{{$news->announcement_date}} {{$news->title}}</h2>
            <div class="d-flex">
                <p class="text-primary mr-5">{{ substr($news->created_at,0,10) }}</p>
            </div>
        </div>
        <div class="mb-3 w-75 mx-auto">
            <img src="{{ asset('/file/'.$news->file->id)}}" width=100%>
        </div>
        <div class="text-dark">
            {!! $news->content !!}
        </div>
    </div>
</div>
@endsection