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
                                    Add examination
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => 'admin.examination.store', 'enctype'=>'multipart/form-data']) !!}
                            {{ Form::hidden('course_id', $course_id, ['class' => 'form-control']) }}
                            <div class="form-group ">
                                {{ Form::label('deadline', 'Deadline') }}
                                {{ Form::date('deadline', old('deadline'),['class' => 'form-control']) }}
                            </div>
                            @error('deadline')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group ">
                                {{ Form::label('title', 'Title') }}
                                {{ Form::text('title', old('title'),['class' => 'form-control']) }}
                            </div>
                            @error('title')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group ">
                                {{ Form::label('description', 'Description') }}
                                {{ Form::textarea('description', old('description'),['class' => 'form-control']) }}
                            </div>
                            @error('description')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group ">
                                {{ Form::label('file', 'File') }}
                                {{ Form::file('file', old('file'),['class' => 'form-control']) }}
                            </div>
                            @error('file')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                            {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
@endsection
