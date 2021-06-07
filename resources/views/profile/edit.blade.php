@extends('layout.app')

@section('title','Blog Page')

@section('content')
    <hr class="mt-0"/>
    <div class="container mt-5 mb-5 pb-5">
        <div class="card flex-row flex-nowrap mx-auto pt-5 pb-5 pl-3 pr-3 mb-5">
            <div>
                <img src="{{asset('images/user_default.png')}}">
                <div class="p-3 d-flex justify-content-center align-items-center">
                    <img src="{{asset("images/ic/ic_search.svg")}}">
                    <a href="#">Edit your photo</a>
                </div>
            </div>
            <div class="w-100">
                <div>
                    <h2 class="text-center">Update your profile</h2>
                    {!! Form::open(['url' => URL::route('user.profile.update', Auth::user()->id),'method'=>'put', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::label('name', 'Name')}}
                        {{Form::text('name',Auth::user()->name, ['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('full_name', 'Full Name')}}
                        {{Form::text('full_name',$student->full_name, ['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('day_of_birth', 'Date of birth')}}
                        {{ Form::date('day_of_birth', $student->day_of_birth, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{Form::label('phone_no', 'Phone')}}
                        {{Form::text('phone_no',$student->phone_no, ['class'=>'form-control'])}}
                    </div>
                    <div class="d-flex">
                        {{ Form::submit('Save', ['class'=>'btn btn-primary ml-auto mt-3']) }}
                    </div>

                    {!! Form::close() !!}

                </div>
                <hr class="mt-5"/>
                <div class="mt-5">
                    <h2 class="text-center">Change password</h2>
                    {!! Form::open(['url' => URL::route('site.resetPassword', Auth::user()->id),'method'=>'put', 'enctype' => 'multipart/form-data' ]) !!}
                    <div class="form-group">
                        {{Form::label('old_password', 'Old Password')}}
                        {{Form::text('old_password',null, ['class'=>'form-control','autocomplete'=>'off'])}}
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

