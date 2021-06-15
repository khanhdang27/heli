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
                                    Create Membership
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => 'admin.user.store', 'enctype'=>'multipart/form-data', ''])  !!}
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', old('name'),['class' => 'form-control']) }}
                            </div>
                            @error('name')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::email('email', old('email'),['class' => 'form-control']) }}
                            </div>
                            @error('email')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                {{ Form::label('password', 'Password') }}
                                {{ Form::text('password', old('password'),['class' => 'form-control']) }}
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

