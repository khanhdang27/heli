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
                                    Edit Examination
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => ['admin.examination.update', $exam->id], 'method'=> 'put', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group ">
                                {{ Form::label('deadline', 'Deadline') }}
                                {{ Form::date('deadline', $exam->deadline,['class' => 'form-control']) }}
                            </div>
                            @error('deadline')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group ">
                                {{ Form::label('title', 'Title') }}
                                {{ Form::text('title', $exam->title,['class' => 'form-control']) }}
                            </div>
                            @error('title')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group ">
                                {{ Form::label('description', 'Description') }}
                                {{ Form::textarea('description', $exam->description,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('file', 'File') }}
                                {{ Form::file('file', null,['class' => 'form-control']) }}
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

