@extends('layout.app')

@section('title', 'Forum Page')

@section('content')
@php
use App\Utilities\SelectionByClass;
use Illuminate\Support\Facades\Auth;
@endphp
<div class="body-content bg-white">
    <div class="container-fluid text-center top-news-page">
        @lang('keywords.navBar.q&aArea')
    </div>
    <div class="container-fluid pt-5 pb-5">
        <div class="ml-auto mr-auto pl-5 d-flex flex-wrap w-75">
            @foreach ($tags as $value)
            <button class="btn-hashtag mx-3" type="button">
                {{ $value }}
            </button>
            @endforeach
        </div>
    </div>
    <div class="pb-5 mx-auto body-forum-page">
        <!-- INDEX -->
        <div class="row row-question border-primary pt-5 pb-5">
            <div class="col-lg-3">
                <div class="d-flex flex-wrap text-primary">
                    @if(empty($post->user->avatar))
                    <img class="mb-3" src="{{asset("images/photo_default.svg")}}" width="98" height="98">
                    @else
                    <img class="mb-3" src="{{asset('/file/'.$post->user->avatar->id)}}" width="98" height="98">
                    @endif
                    <div class="pl-3 pt-2">
                        <p class="text-comment">{{ $post->user->name }}</p>
                        <p class="m-0">{{ substr($post->created_at, 0, 10) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="question h3 text-primary font-weight-bold">
                    {{ $post->title }}
                </p>
                <p class="question h5 text-primary">
                    {{ $post->content }}
                </p>
                <div class="py-3 ">
                    @if ($post->image != null)
                    <img class="img-thumbnail" src="{{ asset('/file/' . $post->image->id) }}">
                    @endif
                </div>
                <div class="text-forum d-flex align-items-center">
                    <button class="border-0 bg-white mr-3">
                        <img class="ic-action" src="{{asset("images/ic/ic_bookmark.svg")}}">
                    </button>
                    <x-like.like :likeRef=$post :likeModule=\App\Models\Post::class></x-like.like>
                    <a class="ml-3 h4 mb-0 btn">
                        <img class="ic-action ml-5" src="{{ asset('images/ic/ic_mess.svg') }}">
                        {{ $post->comment_no }}
                    </a>
                </div>
            </div>
            <div class="col-lg-3 d-flex flex-column justify-content-between align-items-end">
                @if($post->user_id == Auth::user()->id)
                <x-forum.forum-edit :post=$post :tags=$tags></x-forum.forum-edit>
                @endif
                <div>
                    <div class="pt-3 text-right">
                        <button class="btn-hashtag">
                            <h5 class="mb-0">{{$post->postTag->tag_name}}</h5>
                        </button>
                    </div>
                    <p class="h3 text-primary pt-2">
                        @if($post->close_post==1)
                        @lang('keywords.solved')
                        @else
                        @lang('keywords.waitingForAnswer')
                        @endif
                    </p>
                </div>
            </div>
        </div>
        <!-- INDEX -->

        @if (!empty(\Illuminate\Support\Facades\Auth::user()))
        <div class="mt-5">
            <x-comment.comment :refComment=$post :commentModule=\App\Models\Post::class></x-comment.comment>
        </div>
        @endif
        <x-forum.forum-comment :comment=$post></x-forum.forum-comment>
    </div>
</div>

@push('inputFile')
<script>
    // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
</script>
@endpush
@endsection