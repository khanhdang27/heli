<?php
/**
 * @var \Collective\Html\FormBuilder
 */
use App\Utilities\SelectionByClass;
?>

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
                                    Study Session
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => 'admin.study-session.store', 'enctype'=>'multipart/form-data']) !!}
                            <div class="form-group ">
                                {{ Form::label('session_name', 'Course') }}
                                {{ Form::text('session_name', null,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('session_start', 'Course') }}
                                {{ Form::date('session_start', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('session_end', 'Course') }}
                                {{ Form::date('session_end', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                            </div>
                            
                            {{ Form::submit('Save', ['class'=>'btn btn-primary my-5']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
@endsection
