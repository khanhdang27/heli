@extends('layout.app')

@section('title','Blog Page')

@section('content')
    @php
    use App\Utilities\SelectionByClass
    @endphp
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.blog-page.learningColumn')
        </div>
        <div class="container-fluid pt-5 pb-5">
            <div class="ml-auto mr-auto d-flex flex-wrap w-75">
                @foreach(SelectionByClass::getValues(\App\Models\Tag::class,'tag_name', 'id') as $key => $value)
                    <button class="btn-hashtag ml-3 mr-3" type="button">
                        {{ $value }}
                    </button>
                @endforeach
            </div>
        </div>
        <div class="container-fluid ml-auto mr-auto pb-5 body-blog-page">
            <p class="text-40 text-primary">
                @lang('keywords.blog-page.popularArticlesThisWeek')
            </p>
            <div class="row">
                <div class="col-xl-7 post-spotlight mb-5">
                    <div class="popular-item ">
                        <div class="thumb-article d-flex flex-column justify-content-end position-relative">
                            <img class="main-photo img-thumbnail border-0 p-0 rounded-0"
                                 src="{{Storage::url($blog_one->photo)}}">
                            <div class="container-fluid pt-2 info-article d-flex flex-column justify-content-between position-absolute">
                                <a href="{{route('site.view-blog',$blog_one->id)}}" class="title-article">
                                    {{ $blog_one->title }}
                                </a>
                                <div class="d-flex justify-content-between flex-wrap pb-3">
                                    <div class="d-flex">
                                        <p class="text-20 mr-5">
                                            {{ substr($blog_one->created_at,0,10) }}
                                        </p>
                                        <span class="text-20"><img src="{{asset("images/ic/ic_eye.svg")}}" width="26">{{ $blog_one->view_no }}</span>
                                    </div>
                                    <div class="d-flex">
                                        @if(!empty($blog_one->tags))
                                            @foreach($blog_one->tags as $tag)
                                                <button class="btn-hashtag-small">
                                                    {{$tag->tag_name}}

                                                </button>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 popular-articles-right">
                    @foreach($blogs as $item)
                    <div class="card flex-md-row border-0" >
                        <div class="popular-articles-item-image d-flex ">
                            <img class="img-thumbnail rounded-0 align-items-center" src="{{Storage::url($item->photo)}}" alt="Card image cap">
                        </div>

                        <div class="popular-articles-item-content">
                            <div class="card-body">
                                <a href="{{route('site.view-blog',$item->id)}}" class="text-30">
                                    {{$item->title}}
                                </a>
                                <p class="card-text">
                                    <span>{{ substr($item->created_at,0,10) }}</span><img class="ml-5"
                                                                src={{asset("images/ic/ic_eyeBlue.svg")}}>{{ $item->view_no }}
                                </p>
                                <p class="d-flex flex-wrap">
                                    @if(!empty($item->tags))
                                        @foreach($item->tags as $tag)
                                            <button class="btn-hashtag text-12">
                                                {{$tag->tag_name}}

                                            </button>
                                        @endforeach
                                    @endif
                                </p>
                            </div>
                        </div>

                    </div>
                    <hr class="border-secondary"/>
                    @endforeach
                </div>
            </div>
            <p class="pt-5 text-40 text-primary">
                @lang('keywords.blog-page.latestArticles')
            </p>
            <div class="row">
                @foreach($blog as $value)
                    <x-blog.blog-item-latest :blog=$value>

                    </x-blog.blog-item-latest>
                @endforeach
            </div>
            <div class="d-flex pt-5 mt-5 pb-5 justify-content-center">
                <button class="btn-read-more">
                    @lang('keywords.blog-page.readMore')
                    <img src="{{asset("images/ic/ic_drop.svg")}}" width="65">
                </button>
            </div>
        </div>
@endsection
