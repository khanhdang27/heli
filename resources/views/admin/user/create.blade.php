@extends('admin.layout')
@section('content')
<!-- CARDS -->
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
            <!-- Goals -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="pr-2">
                            <button class="btn btn-outline-dark btn-sm" onclick="window.history.go(-1)">
                                <i class="fe fe-arrow-left"></i>
                            </button>
                        </div>
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Create Membership
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body">
                        {!! Form::open(['route' => 'admin.user.store', 'enctype'=>'multipart/form-data', '']) !!}
                        <div class="form-group">
                            {{ Form::label('name', 'Name', ['class' => 'required']) }}
                            {{ Form::text('name', old('name'),['class' => 'form-control', 'required']) }}
                        </div>
                        @error('name')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            {{ Form::label('email', 'Email', ['class' => 'required']) }}
                            {{ Form::email('email', old('email'),['class' => 'form-control', 'required']) }}
                        </div>
                        @error('email')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            {{ Form::label('password', 'Password', ['class' => 'required']) }}
                            {{ Form::text('password', old('password'),['class' => 'form-control', 'required']) }}
                        </div>
                        @error('password')
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