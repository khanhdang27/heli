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
                                    Create Certificate
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => 'admin.certificate.store', 'enctype' => 'multipart/form-data' ]) !!}
                            <div class="form-group ">
                                {{ Form::label('certificate_code', 'Code') }}
                                {{ Form::text('certificate_code', old('certificate_code'),['class' => 'form-control'] ) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('certificate_name', 'Name') }}
                                {{ Form::text('certificate_name', old('certificate_name'),['class' => 'form-control'] ) }}
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

