@php

use App\Utilities\SelectionByClass;
use App\Models\StudySession;

@endphp

@extends('admin.layout')
@section('content')
<script src="{{asset("js/admin/vimeo-upload.js")}}"></script>
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
                                Create Room
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    {!! Form::open(['url' => route('admin.course.room.store', $course->id),
                    'enctype'=>'multipart/form-data']) !!}
                    @csrf
                    <div class="form-group ">
                        {{ Form::label('study_session_id', 'Study Session') }}
                        {{ Form::select('study_session_id', 
                                SelectionByClass::getValues(StudySession::class,'session_name','id'), null,['class' => 'form-control']) }}
                    </div>

                    <div class="form-group ">
                        {{ Form::label('room_live_code', 'Live Code') }}
                        {{ Form::text('room_live_code',null,['class' => 'form-control', 'required', 'id'=> 'start_date']) }}
                    </div>

                    <div class="form-group ">
                        {{ Form::label('start_date', 'Date Start') }}
                        {{ Form::date('start_date',null,['class' => 'form-control', 'required', 'id'=> 'start_date']) }}
                    </div>

                    <div class="form-group ">
                        {{ Form::label('number_session', 'Number Session') }}
                        {{ Form::number('number_session',0,['class' => 'form-control', 'required']) }}
                    </div>

                    <div class="form-group ">
                        {{ Form::label('number_member_maximum', 'Number Member Maximum') }}
                        {{ Form::number('number_member_maximum',0,['class' => 'form-control', 'required']) }}
                    </div>

                    {{ Form::submit('Save', ['class'=>'btn btn-primary my-5']) }}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div>

@endsection