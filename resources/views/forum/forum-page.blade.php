@extends('layout.app')

@section('title','Forum Page')

@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page h1">
            @lang('keywords.navBar.q&aArea')
        </div>
        <div class="container-fluid pt-5 pb-5">
            <div class="m-auto d-flex pl-5 flex-wrap w-75">
                @foreach($tags as $value)
                    <a class="btn btn-hashtag mx-3" href="#">
                        {{ $value }}
                    </a>
                @endforeach
            </div>
            @if(!empty(\Illuminate\Support\Facades\Auth::user()))
                <div class="w-75 mx-auto text-right mt-5">
                    <a href="#" class="btn btn-secondary text-primary" data-toggle="modal"
                       data-target="#modalCreate">
                        <h3 class="mb-0">Post your question</h3>
                    </a>
                </div>
                <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Post your question</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body pt-3">
                                {!! Form::open(['url' => URL::route('site.post.store',['type'=>'post', 'ref'=>0]), 'enctype' => 'multipart/form-data' ]) !!}
                                <div class="form-group">
                                    {{ Form::label('tag_id', 'Tag') }}
                                    {{ Form::select('tag_id',$tags,null, ['class' => 'form-control','required']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('title', 'Title') }}
                                    {{ Form::text('title',old('title'),['class' => 'form-control']) }}
                                </div>
                                <div class="form-group ">
                                    {{ Form::label('content', 'Content') }}
                                    {{ Form::textarea('content',old('content'),['class' => 'form-control', 'rows' => '7']) }}
                                </div>
                                <div class="custom-file ">
                                    {{ Form::label('file', 'Image',['class'=>'custom-file-label']) }}
                                    {{ Form::file('file',['class' => 'custom-file-input']) }}
                                </div>

                            </div>
                            <div class="modal-footer">
                                {{ Form::submit('Submit', ['class'=>'btn btn-primary']) }}
                            </div>
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
        </div>
        @endif
    </div>
    <div class="container-fluid pb-5 ml-auto mr-auto body-forum-page">
        @foreach($posts as $value)
            <x-forum.forum-post :post=$value :tags=$tags>
            </x-forum.forum-post>
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
@endsection
