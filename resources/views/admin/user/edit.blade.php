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
                                    Edit Membership
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => ['admin.user.update',$user->id],'method'=>'put', 'enctype'=>'multipart/form-data'])  !!}
                            @csrf
                            <div class="form-group ">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', $user->name ,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::text('email', $user->email,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('password', 'Password') }}
                                {{ Form::text('password', $user->password,['class' => 'form-control']) }}
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

