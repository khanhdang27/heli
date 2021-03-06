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
                            <a class="btn btn-outline-dark btn-sm" href="{{route('admin.certificate.index')}}">
                                <i class="fe fe-arrow-left"></i>
                            </a>
                        </div>
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Create Certificate
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body">
                        {!! Form::open(['route' => 'admin.certificate.store', 'enctype' => 'multipart/form-data' ]) !!}
                        <div class="form-group ">
                            {{ Form::label('certificate_code', 'Code', ['class' => 'required']) }}
                            {{ Form::text('certificate_code', old('certificate_code'),['class' => 'form-control', 'required'] ) }}
                            @error('certificate_code')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('certificate_name', 'Name', ['class' => 'required']) }}
                            {{ Form::text('certificate_name', old('certificate_name'),['class' => 'form-control', 'required'] ) }}
                            @error('certificate_name')
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
