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
            <div class="m-auto d-flex flex-wrap w-75">
                @foreach(SelectionByClass::getValues(\App\Models\PostTag::class,'tag_name', 'id') as $key => $value)
                    <button class="btn-hashtag ml-3 mr-3" type="button">
                        {{ $value }}
                    </button>
                @endforeach
            </div>
            <div class="container mt-4 mb-4">
                <div class="card card-body">
                    {!! Form::open(['url' => URL::route('user.post.store',['type'=>'post', 'ref'=>0]), 'enctype' => 'multipart/form-data' ]) !!}
                    <div class="form-group">
                        {{ Form::label('tag_id', 'Tag') }}
                        {{ Form::select('tag_id', SelectionByClass::getValues(\App\Models\PostTag::class,'tag_name', 'id'),null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title',old('title'),['class' => 'form-control']) }}
                    </div>
                    <div class="form-group ">
                        {{ Form::label('content', 'Content') }}
                        {{ Form::textarea('content',old('content'),['class' => 'form-control', 'rows' => '3']) }}
                    </div>
                    <div class="custom-file ">
                        {{ Form::label('file', 'Image',['class'=>'custom-file-label']) }}
                        {{ Form::file('file',['class' => 'custom-file-input']) }}
                    </div>
                    {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5 float-right']) }}
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
        <div class="container-fluid pb-5 ml-auto mr-auto body-forum-page">
            <x-forum.forum-post>

            </x-forum.forum-post>
{{--            <div class="">--}}
{{--                <div class="row row-question border-secondary pt-5 pb-5">--}}
{{--                    <div class="col-sm-3">--}}
{{--                        <div class="d-flex">--}}
{{--                            <img src="{{asset("images/ava2.jpg")}}" width="98" height="98">--}}
{{--                            <div class="pl-3 pt-2">--}}
{{--                                <p class="text-25">Kenny Or</p>--}}
{{--                                <p class="text-20-blue">10/03/2021</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 p-0">--}}
{{--                        <p class="question text-28">--}}
{{--                            請問呢題點做？--}}
{{--                        </p>--}}
{{--                        <div class="pt-3 pb-3 ">--}}
{{--                            <img class="img-question" src="{{asset("images/question.jpg")}}">--}}
{{--                        </div>--}}
{{--                        <div class="text-28">--}}
{{--                            <span class="mr-3"><img class="ic-action"--}}
{{--                                                    src="{{asset("images/ic/ic_bookmark.svg")}}"></span>--}}
{{--                            <span class="mr-5"><img class="ic-action" src="{{asset("images/ic/ic_heart.svg")}}">1</span>--}}
{{--                            <a href="{{URL::route('site.forumAnswers')}}"><img class="ic-action"--}}
{{--                                                                               src="{{asset("images/ic/ic_mess.svg")}}">2</a>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-3 d-flex flex-column justify-content-between">--}}
{{--                        <div class="pt-3">--}}
{{--                            <button class="btn-hashtag ">--}}
{{--                                #數學--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        <p class="text-28 pt-2 ">已解決</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="d-flex pt-5 mt-5 pb-5 justify-content-center">
                <button class="btn-read-more">
                    @lang('keywords.blog-page.readMore')
                    <img src="{{asset("images/ic/ic_drop.svg")}}" width="65">
                </button>
            </div>
        </div>

    </div>
    @push('inputFile')
        <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>
    @endpush
@endsection
