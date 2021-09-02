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
                            {{ Form::label('name', 'Name', ['class' => 'required']) }}
                            {{ Form::text('name', $moderator->user->name, ['class'=>'form-control', 'required']) }}
                        </div>
                        @error('name')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group ">
                            {{ Form::label('full_name', 'Full name', ['class' => 'required']) }}
                            {{ Form::text('full_name', $moderator->full_name, ['class'=>'form-control', 'required']) }}
                        </div>
                        @error('full_name')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group ">
                            {{ Form::label('phone', 'Phone number', ['class' => 'required']) }}
                            {{ Form::text('phone', $moderator->phone, ['class'=>'form-control', 'required']) }}
                        </div>
                        @error('phone')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group ">
                            {{ Form::label('email', 'Email', ['class' => 'required']) }}
                            {{ Form::email('email', $moderator->user->email, ['class'=>'form-control', 'required']) }}
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