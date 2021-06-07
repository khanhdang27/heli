<div class="">
    <div class="row row-question pt-5 pb-5 border-secondary">
        <div class="col-sm-3">
            <div class="d-flex">
                <img src="{{asset("images/ava2.jpg")}}" width="98" height="98">
                <div class="pl-3 pt-2">
                    <p class="text-25">{{$comment->user->name}}</p>
                    <p class="text-20-blue">{{$comment->created_at}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <p class="question text-28">
                {{$comment->detail}}
            </p>
            <div class="pt-3 pb-3 ">
                @if($comment->file_id != null)
                    <img class="img-question" src="/file/{{$comment->file_id}}">
                @endif
            </div>
            <div class="text-28 d-flex">
                <span class="mr-5"><img class="ic-action" src="{{asset("images/ic/ic_heart.svg")}}"></span>
                <span><img class="ic-action" src="{{asset("images/ic/ic_mess.svg")}}"></span>

            </div>
        </div>
        <div class="col-sm-3 d-flex flex-column justify-content-end">

            <div class="d-flex text-28 pt-2 m-0">

                @if(\Auth::id()==$postUs)
                    {!! Form::open(['route' => ['user.post.update', $comment->id], 'method'=> 'put', 'enctype' => 'multipart/form-data']) !!}
                    @if($comment->pin_comment)
                        <button class="mr-2 btn btn-link"><img src="{{asset("images/ic/ic_star.svg")}}" width="40">
                        </button>
                        <span class="pt-1">最佳答案</span>
                    @else
                        <button class="mr-2 btn btn-link"><img src="{{asset("images/ic/ic_star_border.svg")}}"
                                                               width="40"></button>
                    @endif
                    {!! Form::close() !!}
                @else
                    @if($comment->pin_comment)
                        <span class="mr-2 btn btn-link"><img src="{{asset("images/ic/ic_star.svg")}}" width="40"></span>
                        <span class="pt-1">最佳答案</span>
                    @else
                        <span class="mr-2 btn btn-link"><img src="{{asset("images/ic/ic_star_border.svg")}}" width="40"></span>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>