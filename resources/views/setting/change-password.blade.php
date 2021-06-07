
@extends('layout.app')

@section('title','Blog Page')

@section('content')
    <hr class="mt-0"/>
    <div class="container mt-5 mb-5 pb-5">
        <div class="card flex-row flex-nowrap mx-auto pt-5 pb-5 pl-3 pr-3 mb-5">
            <div class="w-100">
                <div class="mt-5">
                    <h2 class="text-center">Change password</h2>
                    {!! Form::open(['url' => URL::route('site.resetPassword', Auth::user()->id),'method'=>'put', 'enctype' => 'multipart/form-data' ]) !!}
                    <div class="form-group">
                        {{Form::label('old_password', 'Old Password')}}
                        {{Form::password('old_password', ['class'=>'form-control','autocomplete'=>'off'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('password', 'New password')}}
                        {{Form::password('password', ['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('password_confirmation', 'Confirm password')}}
                        {{Form::password('password_confirmation', ['class'=>'form-control'])}}
                    </div>
                    <div class="d-flex">
                        {{ Form::submit('Save', ['class'=>'btn btn-primary ml-auto mt-3']) }}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

