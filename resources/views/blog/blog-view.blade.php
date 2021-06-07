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
        <div class="container-fluid pb-5 body-content w-75">
            <div class="pt-5 text-primary text-30">
                <p>{{$blog->title}}</p>
                <div class="d-flex">
                    <p class="text-20 text-primary mr-5">{{ substr($blog->created_at,0,10) }}</p>
                    <p class="text-20 text-primary"><img src="{{asset("images/ic/ic_eyeBlue.svg")}}" width="26">{{$blog->view_no}}</p>
                </div>
                <div class="d-flex flex-wrap justify-content-end">
                    @if(!empty($blog->tags))
                        @foreach($blog->tags as $tag)
                            <button class="btn-hashtag">
                                {{$tag->tag_name}}

                            </button>
                        @endforeach
                    @endif
                </div>
            </div>
            <div>
                {!! $blog->content !!}
            </div>
        </div>
    </div>



@endsection
