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
                                    Edit Moderator
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => ['admin.user-manager.moderator.update', $moderator->id],
                                            'method'=> 'put','enctype' => 'multipart/form-data']) !!}
                            <div class="form-group ">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', $moderator->user->name, ['class'=>'form-control']) }}
                            </div>
                            @error('name')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group ">
                                {{ Form::label('full_name', 'Full name') }}
                                {{ Form::text('full_name', $moderator->full_name, ['class'=>'form-control']) }}
                            </div>
                            @error('full_name')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group ">
                                {{ Form::label('phone', 'Phone number') }}
                                {{ Form::text('phone', $moderator->phone, ['class'=>'form-control']) }}
                            </div>
                            @error('phone')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group ">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::email('email', $moderator->user->email, ['class'=>'form-control']) }}
                            </div>
                            @error('email')
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

