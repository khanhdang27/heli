@php
use \App\Utilities\SelectionByClass;
use \App\Models\Subject;

@endphp

@extends('admin.layout')
@section('content')
<script src="{{ asset('js/admin/upload-file-project.js') }}"></script>
<!-- CARDS -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
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
                                Create Moderator
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body d-flex">
                    <div class="card-body">
                        {!! Form::open(['route'=> 'admin.moderator.store', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group ">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', old('name'), ['class'=>'form-control']) }}
                        </div>
                        @error('name')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group ">
                            {{ Form::label('full_name', 'Full name') }}
                            {{ Form::text('full_name', old('full_name'), ['class'=>'form-control']) }}
                        </div>
                        @error('full_name')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group ">
                            {{ Form::label('phone', 'Phone number') }}
                            {{ Form::text('phone', old('phone'), ['class'=>'form-control']) }}
                        </div>
                        @error('phone')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group ">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', old('email'), ['class'=>'form-control']) }}
                        </div>
                        @error('email')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group ">
                            {{ Form::label('password', 'Password') }}
                            {{ Form::password('password', ['class'=>'form-control']) }}
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