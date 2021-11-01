@php
use Illuminate\Support\Facades\Auth;
@endphp
<div>
    <div class="row row-question border-primary pt-5 pb-5 bg-white">
        <div class="col-lg-3">
            <div class="d-flex flex-nowrap flex-lg-wrap">
                <div>
                    @if (empty($post->user->avatar))
                        <img class="user-avatar mb-3 mr-3" src="{{ asset('images/photo_default.svg') }}">
                    @else
                        <img class="user-avatar mb-3 mr-3" src="{{ asset('/file/' . $post->user->avatar->id) }}">
                    @endif
                </div>
                <div>
                    <p class="text-comment mb-2">{{ $post->user->name }}</p>
                    <p class="text-primary">{{ substr($post->created_at, 0, 10) }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="d-flex justify-content-between">
                <div class="mr-3">
                    <a class="question h3 text-primary font-weight-bold"
                        href="{{ route('site.post.show', $post->id) }}">
                        {{ $post->title }}
                    </a>
                    <h5 class="mb-0 text-primary">{{ $post->content }}</h5>
                </div>
                <div class="d-flex">
                    @if ($post->user_id == Auth::user()->id)
                        <x-forum.forum-edit :post=$post :tags=$tags></x-forum.forum-edit>
                    @endif
                    <div>
                        <a class="btn h5 mb-0 btn-hashtag" href="{{ route('site.post.show', $post->id) }}">
                            {{ $post->postTag->tag_name }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="py-4">
                @if ($post->image != null)
                    <img class="img-question img-thumbnail border-0 rounded-0 p-0"
                        src="{{ asset('/file/' . $post->image->id) }}">
                @endif
            </div>
            <div class="text-forum d-flex flex-wrap-reverse align-items-center justify-content-between">
                <div>
                    <button class="border-0 bg-white mr-3">
                        <img class="ic-action" src="{{ asset('images/ic/ic_bookmark.svg') }}">
                    </button>
                    {{-- <x-like.like :likeRef=$post :likeModule=\App\Models\Post::class></x-like.like> --}}
                    <like-component v-bind:user-id="{{ Auth::user()->id }}" v-bind:like-ref-id="{{ $post->id }}"
                        v-bind:like-module="'App\\Models\\Post'" v-bind:like-no="0"
                        v-bind:is-liked="{{ 0 }}">
                    </like-component>
                    <a class="ml-3 h4 mb-0" href="{{ route('site.post.show', $post->id) }}">
                        <img class="ic-action" src="{{ asset('images/ic/ic_mess.svg') }}">
                        {{ $post->comment_no }}
                    </a>
                </div>
                <p class="h3 text-primary pt-2 ml-auto">
                    @if ($post->close_post == 1)
                        @lang('keywords.solved')
                    @else
                        @lang('keywords.waitingForAnswer')
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>
