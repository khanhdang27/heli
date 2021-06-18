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
            <div class="m-auto d-flex pl-5 flex-wrap w-75">
                @foreach($tags as $value)
                    <button class="btn-hashtag ml-3 mr-3" type="button">
                        {{ $value->tag_name }}
                    </button>
                @endforeach
            </div>
            @if(!empty(\Illuminate\Support\Facades\Auth::user()))
                <div class="container mt-4 mb-4">
                    <div class="card card-body">
                        {!! Form::open(['url' => URL::route('site.post.store',['type'=>'post', 'ref'=>0]), 'enctype' => 'multipart/form-data' ]) !!}
                        <div class="form-group">
                            {{ Form::label('tag_id', 'Tag') }}
                            {{ Form::select('tag_id', SelectionByClass::getValues(\App\Models\Tag::class,'tag_name', 'id'),null, ['class' => 'form-control','required']) }}
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
            @endif
        </div>
        <div class="container-fluid pb-5 ml-auto mr-auto body-forum-page">
            @foreach($posts as $value)
                <x-forum.forum-post :post=$value>
                </x-forum.forum-post>
            @endforeach
            {{--            <div class="d-flex pt-5 mt-5 pb-5 justify-content-center">--}}
            {{--                <button class="btn-read-more">--}}
            {{--                    @lang('keywords.blog-page.readMore')--}}
            {{--                    <img src="{{asset("images/ic/ic_drop.svg")}}" width="65">--}}
            {{--                </button>--}}
            {{--            </div>--}}
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
