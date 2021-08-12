@extends('layout.app')

@section('title','Blog Page')

@section('content')
@php
use App\Utilities\SelectionByClass;
@endphp
<div class="body-content">
    <div class="container-fluid text-center top-news-page">
        @lang('keywords.blog-page.learningColumn')
    </div>
    <div class="pb-5 container-fluid bg-white pt-3">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <button class="btn btn-outline-primary" onclick="window.history.back()">
                    << {{__('Back')}}
                </button>
                <div class="pt-5 text-primary">
                    <p class="h1">{{$blog->title}}</p>
                    <div class="d-flex h5 my-5 align-items-center">
                        <div class="d-flex align-items-center mr-5">
                            <p class="mr-5 mb-0">{{ substr($blog->created_at,0,10) }}</p>
                            <img class="mr-2" src="{{asset("images/ic/ic_eyeBlue.svg")}}" width="26">
                            <p class="mb-0">{{$blog->view_no}}</p>
                        </div>
                        <div class="d-flex flex-wrap justify-content-end">
                            @foreach($blog->tags as $tag)
                            <button class="btn-hashtag-small">
                                {{$tag->tag_name}}
                            </button>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="text-dark mt-3 h5 text-justify">
                    {!! $blog->content !!}
                </div>
                <div class="w-100">
                    @if(!empty($blog->photo))
                    <img class="img-thumbnail border p-0 mx-auto d-block" src="{{asset('file/'.$blog->photo->id)}}">
                    @endif
                </div>
                <div class="mt-5">
                    <h3 class="text-primary font-weight-bold">{{__('RELATED')}}</h3>
                    <div class="swiper-container mb-5" id="swiper_blog_related">
                        <div class="swiper-wrapper">
                            @foreach($blog_related as $item)
                            <div class="swiper-slide">
                                <x-blog.blog-item-latest :blog=$item></x-blog.blog-item-latest>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-lg-1"></div>
    </div>
</div>
<x-subscribe-container></x-subscribe-container>
</div>
<script>
    var swiper = new Swiper("#swiper_blog_related", {
            speed: 1000,
            spaceBetween: 20,
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                }
            },
        });
</script>
@endsection
