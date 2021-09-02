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
            <div class="row pt-5 pb-5 justify-content-center">
                <div class="col-md-8">
                    <x-slide-tag.slide-tag :tags=$tags type="post"></x-slide-tag.slide-tag>
                    <!-- INDEX -->
                    <div class="row row-question border-primary pt-5 pb-5">
                        <div class="col-lg-3">
                            <div class="d-flex flex-nowrap flex-lg-wrap">
                                <div>
                                    @if(empty($post->user->avatar))
                                        <img class="user-avatar mb-3 mr-3" src="{{asset("images/photo_default.svg")}}">
                                    @else
                                        <img class="user-avatar mb-3 mr-3"
                                             src="{{asset('/file/'.$post->user->avatar->id)}}">
                                    @endif
                                </div>
                                <div>
                                    <p class="text-comment mb-2">{{$post->user->name}}</p>
                                    <p class="text-primary">{{ substr($post->created_at,0,10) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="d-flex justify-content-between">
                                <div class="mr-3">
                                    <p class="question h3 text-primary font-weight-bold"
                                       href="{{ route('site.post.show', $post->id)}}">
                                        {{$post->title}}
                                    </p>
                                    <p class="mb-0 h5 text-primary">{{$post->content}}</p>
                                </div>
                                <div class="d-flex">
                                    @if($post->user_id == Auth::user()->id)
                                        <x-forum.forum-edit :post=$post :tags=$tags></x-forum.forum-edit>
                                    @endif
                                    <div>
                                        <a class="btn h5 mb-0 btn-hashtag"
                                           href="{{ route('site.post.show', $post->id)}}">
                                            {{$post->postTag->tag_name}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-5">
                                @if ($post->image != null)
                                    <img class="img-question img-thumbnail border-0 rounded-0 p-0"
                                         src="{{ asset('/file/' . $post->image->id) }}">
                                @endif
                            </div>
                            <div class="text-forum d-flex flex-wrap-reverse align-items-center justify-content-between">
                                <div>
                                    <button class="border-0 bg-white mr-3">
                                        <img class="ic-action" src="{{asset("images/ic/ic_bookmark.svg")}}">
                                    </button>
                                    <x-like.like :likeRef=$post :likeModule=\App\Models\Post::class></x-like.like>
                                    <a class="ml-3 h4 mb-0" href="{{ route('site.post.show', $post->id)}}">
                                        <img class="ic-action" src="{{asset("images/ic/ic_mess.svg")}}">
                                        {{$post->comment_no}}
                                    </a>
                                </div>
                                <p class="h3 text-primary pt-2 ml-auto">
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
                            <x-comment.comment :refComment=$post
                                               :commentModule=\App\Models\Post::class></x-comment.comment>
                        </div>
                    @endif
                    <x-forum.forum-comment :comment=$post></x-forum.forum-comment>
                </div>
            </div>
        </div>
    </div>

    @push('inputFile')
        <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function () {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>
    @endpush
@endsection
