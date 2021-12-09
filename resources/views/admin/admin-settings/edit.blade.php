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
                                    Edit Admin
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <h3>Update Email</h3>
                            <hr>
                            {!! Form::open(['route' => ['admin.adminOwner', Auth::user()->id], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::email('email', null, ['class' => 'form-control']) }}

                                <sub> email account will be the owner </sub>
                                <sub> new <b style="text-color: red;"> password will send into </b> this please verify this
                                    mail </sub>
                            </div>
                            <div class="form-group">
                                {{ Form::label('password', 'password') }}
                                {{ Form::password('password', ['class' => 'form-control']) }}

                                <sub> Comfirm old password </sub>
                            </div>
                            {{ Form::submit('Save', ['class' => 'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}

                            {!! Form::open(['url' => URL::route('site.userUpdatePassword', Auth::user()->id), 'method' => 'post']) !!}
                            @csrf
                            <div class="border rounded p-4 mt-3">
                                <h3>Update Password</h3>
                                <hr>
                                <div class="form-group ">
                                    {{ Form::label('old_password', 'Old Password') }}
                                    {{ Form::password('old_password', ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group ">
                                    {{ Form::label('password', 'New Password') }}
                                    {{ Form::password('password', ['class' => 'form-control']) }}
                                </div>

                            </div>
                            {{ Form::submit('Save', ['class' => 'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>

@endsection
