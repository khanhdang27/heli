@extends('layout.app')

@section('title','Course Page')

@section('content')
    <div class="container  p-5">
        <div class="m-auto shadow p-5 ">
            {!! Form::open(['route' => 'site.passwords.email']) !!}
            <div class="form-group">
                {{Form::label('email','Enter your email')}}
                {{Form::email('email',null,['class'=>'form-control mb-3','placeholder'=>'name@gmail.com'])}}
            </div>
            {{Form::submit('Send Mail',['class'=>'btn btn-primary pl-4 pr-4 text-20'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
