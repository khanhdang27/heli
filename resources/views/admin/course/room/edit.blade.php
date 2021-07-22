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
                        <div class="row align-items-center">
                            <div class="col">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Edit Course
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        {!! Form::open(['url' => route('admin.course.room.store', $course->id), 'enctype'=>'multipart/form-data']) !!}
                        @csrf
                        <div class="form-group ">
                            {{ Form::label('study_session_id', 'Study Session') }}
                            {{ Form::select('study_session_id', 
                                SelectionByClass::getValues(StudySession::class,'session_name','id'),
                                $room->study_session_id
                                ) }}
                        </div>
                        <div class="form-group ">

                            {{ Form::label('start_date', 'Date Start') }}
                            {{ Form::date('start_date',$room->start_date,['class' => 'form-control', 'required', 'id'=> 'start_date']) }}
                        </div>
                        
                        <div class="form-group ">
                            {{ Form::label('number_session', 'Number Session') }}
                            {{ Form::number('number_session',$room->number_session,['class' => 'form-control', 'required']) }}
                        </div>

                        <div class="form-group ">
                            {{ Form::label('number_member_maximum', 'Number Member Maximum') }}
                            {{ Form::number('number_member_maximum',$room->number_member_maximum,['class' => 'form-control', 'required']) }}
                        </div>

                        {{ Form::submit('Save', ['class'=>'btn btn-primary my-5']) }}
                        
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>

@endsection
