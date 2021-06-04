@extends('layout.app')

@section('title','Forum Page')

@section('content')
    @php
        use App\Utilities\SelectionByClass;
    @endphp
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.navBar.q&aArea')
        </div>
        <div class="container-fluid pt-5 pb-5">
            <div class="ml-auto mr-auto pl-5 d-flex flex-wrap w-75">
                @foreach(SelectionByClass::getValues(\App\Models\PostTag::class,'tag_name', 'id') as $key => $value)
                    <button class="btn-hashtag ml-3 mr-3" type="button">
                        {{ $value }}
                    </button>
                @endforeach
            </div>
        </div>
        <div class="container-fluid pb-5 ml-auto mr-auto body-forum-page">

            <!-- INDEX -->
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
                    <div class="col-sm-6">
                        <p class="question text-28">
                            {{$post->title}}
                        </p>
                        <p class="question text-28">
                            {{$post->content}}
                        </p>
                        <div class="pt-3 pb-3 ">
                            <img class="img-question" src="/file/{{$post->file_id}}">
                        </div>
                        <div class="text-28">
                            <span class="mr-3"><img class="ic-action"
                                                    src="{{asset("images/ic/ic_bookmark.svg")}}"></span>
{{--                            {!! Form::open(['url' => URL::route('user.user-like.store'), 'enctype' => 'multipart/form-data' ]) !!}--}}
{{--                            {{ Form::text('user_id',$post->user_id,['hidden'=>true]) }}--}}
{{--                            {{ Form::text('post_id',$post->id,['hidden'=>true]) }}--}}
{{--                            {{ Form::submit(null, ['class'=>'btn-like mt-5 float-right']) }}--}}
{{--                            {!! Form::close() !!}--}}
                            <button id="likePost" class="mr-5 border-0 bg-white text-primary"><img class="ic-action" src="{{asset("images/ic/ic_heart.svg")}}">{{$post->like_no}}</button>
                            <span><img class="ic-action" src="{{asset("images/ic/ic_mess.svg")}}">{{$post->comment_no}}</span>

                        </div>
                    </div>
                    <div class="col-sm-3 d-flex flex-column justify-content-between align-items-end">
                        <div>
                            <button class="btn-hashtag text-20">
                                {{$postTag->tag_name}}
                            </button>
                        </div>
                        <p class="text-28 pt-2 ">
                            @if($post->block==0)
                                @lang('keywords.solved')
                            @else
                                @lang('keywords.waitingForAnswer')
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <!-- INDEX -->

            @if(!empty(\Illuminate\Support\Facades\Auth::user()))
                <div class="container mt-5">
                    <p class="text-primary text-20">
                        Add your answer
                    </p>
                    <div class="card card-body">
                        {!! Form::open(['url' => URL::route('user.comment.store',['type'=>'post', 'ref'=>0]), 'enctype' => 'multipart/form-data' ]) !!}
                        <div class="form-group ">
                            {{ Form::label('detail', 'Content') }}
                            {{ Form::textarea('detail',old('content'),['class' => 'form-control', 'rows' => '3']) }}
                        </div>
                        <div class="custom-file ">
                            {{ Form::label('file', 'Image',['class'=>'custom-file-label']) }}
                            {{ Form::file('file',['class' => 'custom-file-input']) }}
                        </div>
                        {{ Form::text('post_id',$post->id,['hidden'=>true]) }}
                        {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5 float-right']) }}
                        {!! Form::close() !!}
                    </div>

                </div>
            @endif
{{--            @php--}}
{{--                $post_id= $post->id;--}}
{{--            @endphp--}}

            @foreach($comments as $value)
                <x-forum.forum-comment :comment=$value>

                </x-forum.forum-comment>
            @endforeach
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
    @push('likePost')
    <script>
        $(function () {
            $('#likePost').click(function (e) {
                e.preventDefault();
                var post_id = {{$post->id}};
                var user_id = {{$post->user_id}};

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: "{{ route('user.user-like.store') }}",
                    data: {post_id: post_id, user_id:user_id}
                })
                console.log("ok");
            });
        });
    </script>
    @endpush
@endsection

