@extends('admin.layout')
@section('content')
    <!-- CARDS -->
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Edit News
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => ['admin.news.update', $news->id], 'method'=> 'put', 'enctype' => 'multipart/form-data']) !!}
                            @csrf
                            <div class="form-group ">
                                {{ Form::label('title', 'News Title') }}
                                {{ Form::text('title', old('title'),['class' => 'form-control'] ) }}
                                @error('title')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                {{ Form::label('content', 'News Content') }}
                                {{ Form::text('content', old('content'),['class' => 'form-control'] ) }}
                                @error('content')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                {{ Form::label('file_id', 'News File') }}
                                {{ Form::file('file_id', old('file_id'),['class' => 'form-control'] ) }}
                                @error('file_id')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                {{ Form::label('content', 'News content') }}
                                {{ Form::textarea('content', $news->content, ['id'=>'ckeditor']) }}
                                @error('content')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
@endsection
