@php
    use Illuminate\Support\Facades\Auth;
@endphp
<div>
    <div class="row row-question border-secondary pt-5 pb-5 bg-white">
        <div class="col-xl-3 p-0">
            <div class="d-flex flex-wrap">
                <img class="mb-3" src="{{asset("images/ava2.jpg")}}" width="98" height="98">
                <div class="pl-3 pt-2">
                    <p class="text-comment">{{$post->user->name}}</p>
                    <p class="text-primary">{{ substr($post->created_at,0,10) }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-6 p-0">
            <a class="question text-forum" href="{{ route('site.post.show', $post->id)}}">
                {{$post->title}}
            </a>
            <div class="pt-3 pb-3 ">
                @if($post->image!=null)
                    <img class="img-question" src="{{asset('/file/'.$post->image->id)}}">
                @endif
            </div>
            <div class="text-forum">
                <span class="mr-3">
                    <img class="ic-action" src="{{asset("images/ic/ic_bookmark.svg")}}">
                </span>
                <span>
                    <x-like.like :likeRef=$post :likeModule=\App\Models\Post::class></x-like.like>
                </span>
                <a href="{{ route('site.post.show', $post->id)}}">
                    <img class="ic-action" src="{{asset("images/ic/ic_mess.svg")}}">
                    {{$post->comment_no}}
                </a>
            </div>
        </div>
        <div class="col-xl-3 d-flex flex-column justify-content-between align-items-end">
            @if($post->user_id == Auth::user()->id)
            <x-forum.forum-edit :post=$post :tags=$tags></x-forum.forum-edit>
            @endif
            <div>
                <div class="pt-3 text-right">
                    <button class="btn-hashtag h3">
                        {{$post->postTag->tag_name}}
                    </button>
                </div>
                <p class="text-forum pt-2 ">
                    @if($post->block==1)
                        @lang('keywords.solved')
                    @else
                        @lang('keywords.waitingForAnswer')
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>
