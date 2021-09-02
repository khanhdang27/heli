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
                                Subscribe
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body d-flex">
                    <div class="card-body">
                        {!! Form::open(['route' => 'admin.user-subscribe.subscribe', 'enctype' => 'multipart/form-data'
                        ]) !!}
                        <div class="form-group ">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', null, ['class'=>'form-control']) }}
                        </div>
                        {{ Form::submit('Subscribe', ['class'=>'btn btn-primary mt-5']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- / .row -->
</div>

@endsection