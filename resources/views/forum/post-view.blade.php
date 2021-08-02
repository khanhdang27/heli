@extends('layout.app')

@section('title', 'Forum Page')

@section('content')
    @php
    use App\Utilities\SelectionByClass;
    use Illuminate\Support\Facades\Auth;
    @endphp
    <div class="body-content bg-white">
        <div class="container-fluid text-center top-news-page h1">
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
            <div class="row row-question border-secondary pt-5 pb-5">
                <div class="col-lg-3">
                    <div class="d-flex flex-wrap text-primary">
                        @if(empty($post->user->avatar))
                            <img class="mb-3 border border-secondary" src="{{asset("images/photo_default.svg")}}" width="98" height="98">
                        @else
                            <img class="mb-3 border border-secondary" src="{{asset('/file/'.$post->user->avatar->id)}}" width="98" height="98">
                        @endif
                        <div class="pl-3 pt-2">
                            <p class="text-comment">{{ $post->user->name }}</p>
                            <h3 class="m-0">{{ substr($post->created_at, 0, 10) }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="question h2 text-primary">
                        {{ $post->title }}
                    </p>
                    <p class="question h5">
                        {{ $post->content }}
                    </p>
                    <div class="py-3 ">
                        @if ($post->image != null)
                            <img class="img-question border border-radius" src="{{ asset('/file/' . $post->image->id) }}">
                        @endif
                    </div>
                    <div class="text-forum d-flex">
                        <span><img class="ic-action " src="{{ asset('images/ic/ic_bookmark.svg') }}"></span>

                        <x-like.like :likeRef=$post :likeModule=\App\Models\Post::class></x-like.like>
                        <span>
                            <img class="ic-action ml-5" src="{{ asset('images/ic/ic_mess.svg') }}">
                            <span class="h2 text-primary">
                                {{ $post->comment_no }}
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 d-flex flex-column justify-content-between align-items-end">
                    @if($post->user_id == Auth::user()->id)
                        <x-forum.forum-edit :post=$post :tags=$tags></x-forum.forum-edit>
                    @endif
                    <div>
                        <div class="pt-3 text-right">
                            <button class="btn-hashtag h3">
                                {{$post->postTag->tag_name}}
                            </button>
                        </div>
                        <p class="h2 text-primary pt-2">
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
