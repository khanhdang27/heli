<div class="">
    <div class="row row-question border-secondary pt-5 pb-5">
        <div class="col-sm-3">
            <div class="d-flex">
                <img src="{{asset("images/ava2.jpg")}}" width="98" height="98">
                <div class="pl-3 pt-2">
                    <p class="text-25">{{$post->user->name}}</p>
                    <p class="text-20-blue">{{$post->created_at}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 p-0">
            <p class="question text-28">
                {{$post->title}}
            </p>
            <div class="pt-3 pb-3 ">
                <img class="img-question" src="/file/{{$post->file_id}}">
            </div>
            <div class="text-28">
                    <span class="mr-3">
                        <img class="ic-action" src="{{asset("images/ic/ic_bookmark.svg")}}">
                    </span>
                <span class="mr-5">
                        @if($post->like_no>0)
                        <img class="ic-action" src="{{asset("images/ic/ic_fullHeart.svg")}}">
                    @else
                        <img class="ic-action" src="{{asset("images/ic/ic_heart.svg")}}">
                    @endif
                    {{$post->like_no}}
                    </span>
                <a href="{{ route('user.post.show', $post->id)}}">
                    <img class="ic-action" src="{{asset("images/ic/ic_mess.svg")}}">
                    {{$post->comment_no}}
                </a>

            </div>
        </div>
        <div class="col-sm-3 d-flex flex-column justify-content-between align-items-end">
            <div class="pt-3">
                <button class="btn-hashtag text-20">
                    {{$post->postTag->tag_name}}
                </button>
            </div>
            <p class="text-28 pt-2 ">
                @if($post->block==1)
                    @lang('keywords.solved')
                @else
                    @lang('keywords.waitingForAnswer')
                @endif
            </p>
        </div>
    </div>
</div>

