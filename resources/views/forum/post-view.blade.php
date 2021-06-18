@extends('layout.app')

@section('title','Forum Page')

@section('content')
    @php
        use App\Utilities\SelectionByClass;
        use Illuminate\Support\Facades\Auth;
    @endphp
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.navBar.q&aArea')
        </div>
        <div class="container-fluid pt-5 pb-5">
            <div class="ml-auto mr-auto pl-5 d-flex flex-wrap w-75">
                @foreach(SelectionByClass::getValues(\App\Models\Tag::class,'tag_name', 'id') as $key => $value)
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
                                <p class="text-comment">{{$post->user->name}}</p>
                                <p class="text-20-blue">{{$post->created_at}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p class="question text-forum">
                            {{$post->title}}
                        </p>
                        <p class="question text-forum">
                            {{$post->content}}
                        </p>
                        <div class="pt-3 pb-3 ">
                            @if($post->file_id!=null)
                                <img class="img-question" src="/file/{{$post->file_id}}">
                            @endif
                        </div>
                        <div class="text-forum d-flex">
                            <span class="mr-3"><img class="ic-action"
                                                    src="{{asset("images/ic/ic_bookmark.svg")}}"></span>

                            <x-like.like :likeRef=$post :likeModule=\App\Models\UserLike::$POST></x-like.like>
                            <span>
                                <img class="ic-action" src="{{asset("images/ic/ic_mess.svg")}}">{{$post->comment_no}}
                            </span>

                        </div>
                    </div>
                    <div class="col-sm-3 d-flex flex-column justify-content-between align-items-end">
                        <div>
                            <button class="btn-hashtag text-20">
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
            <!-- INDEX -->

            @if(!empty(\Illuminate\Support\Facades\Auth::user()))
                <div class="container mt-5">
                    <p class="text-primary text-20">
                        Add your answer
                    </p>
                    <div class="card card-body">
                        {!! Form::open(['url' => URL::route('site.comment.store',['type'=>'post', 'ref'=>0]),
                                        'enctype' => 'multipart/form-data' ]) !!}
                        <div class="form-group ">
                            {{ Form::label('detail', 'Content') }}
                            {{ Form::textarea('detail',old('content'),['class' => 'form-control', 'rows' => '3']) }}
                            @error('detail')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
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
{{--            @foreach($post->comments as $value)--}}
{{--                <x-forum.forum-comment :comment=$value>--}}

{{--                </x-forum.forum-comment>--}}
{{--            @endforeach--}}
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

