@extends('layout.app')

@section('title','Blog Page')

@section('content')
    @php
        use App\Utilities\SelectionByClass;
    @endphp
    <div class="body-content">
        <div class="container-fluid text-center top-news-page h1">
            @lang('keywords.blog-page.learningColumn')
        </div>
        <div class="container-fluid pb-5 w-75 bg-white">
            <div class="pt-5 text-primary">
                <p class="h1">{{$blog->title}}</p>
                <div class="d-flex h4">
                    <p class="mr-5">{{ substr($blog->created_at,0,10) }}</p>
                    <p><img src="{{asset("images/ic/ic_eyeBlue.svg")}}" width="26">{{$blog->view_no}}</p>
                </div>

                <div class="d-flex flex-wrap justify-content-end mb-3">
                    @foreach($blog->tags as $tag)
                        <button class="btn-hashtag">
                            {{$tag->tag_name}}
                        </button>
                    @endforeach
                </div>
                <div class="w-75">
                    @if(empty($blog->photo))
                        <img class="img-thumbnail border p-0 w-75 mx-auto d-block h-50"
                            src="{{asset('images/default-image.jpg')}}">
                    @else
                        <img class="img-thumbnail border p-0 w-75 mx-auto d-block"
                            src="{{asset('file/'.$blog->photo->id)}}">
                    @endif
                </div>
            </div>
            <div class="text-dark mt-3">
                {!! $blog->content !!}
            </div>
        </div>
    </div>
@endsection
