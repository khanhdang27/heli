@php
    use App\Post;
    //$posts = Post::all();
    $posts = \Illuminate\Support\Facades\DB::table('users')
->join('posts', 'users.id', '=', 'posts.user_id')
->join('post_tags', 'posts.tag_id','=','post_tags.id')
->get();
@endphp
@foreach($posts as $value)
    <div class="">
        <div class="row row-question border-secondary pt-5 pb-5">
            <div class="col-sm-3">
                <div class="d-flex">
                    <img src="{{asset("images/ava2.jpg")}}" width="98" height="98">
                    <div class="pl-3 pt-2">
                        <p class="text-25">{{$value->name}}</p>
                        <p class="text-20-blue">{{$value->created_at}}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 p-0">
                <p class="question text-28">
                    {{$value->title}}
                </p>
                <div class="pt-3 pb-3 ">
                    <img class="img-question" src="/file/{{$value->file_id}}">
                </div>
                <div class="text-28">
                    <span class="mr-3">
                        <img class="ic-action" src="{{asset("images/ic/ic_bookmark.svg")}}">
                    </span>
                    <span class="mr-5">
                        @if($value->like_no>0)
                            <img class="ic-action" src="{{asset("images/ic/ic_fullHeart.svg")}}">
                        @else
                            <img class="ic-action" src="{{asset("images/ic/ic_heart.svg")}}">
                        @endif
                            {{$value->like_no}}
                    </span>
                    <a href="{{ route('user.post.show', $value->id)}}">
                        <img class="ic-action" src="{{asset("images/ic/ic_mess.svg")}}">
                        {{$value->comment_no}}
                    </a>

                </div>
            </div>
            <div class="col-sm-3 d-flex flex-column justify-content-between align-items-end">
                <div class="pt-3">
                    <button class="btn-hashtag text-20">
                        {{$value->tag_name}}
                    </button>
                </div>
                <p class="text-28 pt-2 ">
                    @if($value->block==0)
                        @lang('keywords.solved')
                    @else
                        @lang('keywords.waitingForAnswer')
                    @endif
                </p>
            </div>
        </div>
    </div>
@endforeach
