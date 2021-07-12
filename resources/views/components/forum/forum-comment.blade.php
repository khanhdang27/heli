{{--{{dd($comment->comment)}}--}}
@foreach($comment->comment as $item)
<div class="">
    <div class="row row-question pt-5 pb-5 border-secondary">
        <div class="col-xl-3">
            <div class="d-flex flex-wrap text-primary">
                <img src="{{asset("images/ava2.jpg")}}" width="98" height="98">
                <div class="pl-3 pt-2">
                    <p class="text-comment">{{$item->user->name}}</p>
                    <h3 class="m-0">{{ substr($item->created_at,0,10) }}</h3>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <p class="question text-forum">
                {{$item->detail}}
            </p>
            <div class="pt-3 pb-3 ">
                @if($item->image!=null)
                    <img class="img-question" src="{{asset('/file/'.$item->image->id)}}">
                @endif
            </div>
            <div class="text-forum d-flex">
                <x-like.like :likeRef=$comment :likeModule=\App\Models\UserComment::class></x-like.like>
                {{-- <span><img class="ic-action" src="{{asset("images/ic/ic_mess.svg")}}"></span> --}}
            </div>
        </div>
        <div class="col-xl-3 d-flex flex-column justify-content-between text-right">
            @if($comment->user_id == Auth::user()->id)
                <div class="dropdown">
                    <a href="#" class="btn btn-option py-0" role="button"
                       data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <h2 class="mb-0">
                            <i class="fe fe-more-horizontal"></i>
                        </h2>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-option p-2">
                        <a href="{{route('site.pinComment',[$comment->id,$item->id])}}" class="dropdown-item text-primary">
                            Accept the answer
                        </a>
                    </div>
                </div>
            @endif
            <div class="d-flex justify-content-end text-forum pt-2 m-0">
                @if($comment->pin_comment == $item->id)
                    <span class="mr-2"><img src="{{asset("images/ic/ic_star.svg")}}" width="40"></span>
                    <span class="pt-1">@lang('keywords.forum.bestAnswer')</span>
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach
