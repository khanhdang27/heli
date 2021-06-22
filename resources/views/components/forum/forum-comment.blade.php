<div class="">
    <div class="row row-question pt-5 pb-5 border-secondary">
        <div class="col-xl-3">
            <div class="d-flex text-primary">
                <img src="{{asset("images/ava2.jpg")}}" width="98" height="98">
                <div class="pl-3 pt-2">
                    <p class="text-comment">{{$comment->user->name}}</p>
                    <h3 class="m-0">{{ substr($comment->created_at,0,10) }}</h3>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <p class="question text-forum">
                {{$comment->detail}}
            </p>
            <div class="pt-3 pb-3 ">
                @if($comment->file_id!=null)
                    <img class="img-question" src="{{asset('/file/'.$comment->file_id)}}">
                @endif

            </div>
            <div class="text-forum d-flex">
                <x-like.like :likeRef=$comment :likeModule=\App\Models\UserComment::class></x-like.like>
                {{-- <span><img class="ic-action" src="{{asset("images/ic/ic_mess.svg")}}"></span> --}}
            </div>
        </div>
        <div class="col-xl-3 d-flex flex-column justify-content-end">

            <div class="d-flex text-forum pt-2 m-0">
                @if(!empty($comment->pin_comment))
                    <span class="mr-2"><img src="{{asset("images/ic/ic_star.svg")}}" width="40"></span>
                    <span class="pt-1">@lang('keywords.forum.bestAnswer')</span>
                @endif
            </div>
        </div>
    </div>
</div>
