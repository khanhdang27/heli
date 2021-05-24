@php

use App\Utilities\SelectionByClass;
use App\Models\Tutor;

@endphp

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
                                    Create Course
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => 'admin.course.store', 'enctype'=>'multipart/form-data']) !!}
                            @csrf
                            <div class="form-group ">
                                {{ Form::label('course_name:en', 'Course Name (English)') }}
                                {{ Form::text('course_name:en',old('course_name:en'),['class' => 'form-control', 'required']) }}
                            </div>

                            <div class="form-group ">
                                {{ Form::label('course_name:cn', 'Course Name (Traditional Chinese)') }}
                                {{ Form::text('course_name:cn',old('course_name:cn'),['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_name:sc', 'Course Name (Simplify Chinese)') }}
                                {{ Form::text('course_name:sc',old('course_name:sc'),['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_id', 'Tutor') }}
                                {{ Form::select('tutor_id', SelectionByClass::getValues(Tutor::class,'full_name','id') ,null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_description:en', 'Course Description (English)') }}
                                {{ Form::textarea('course_description:en',old('course_description:en'),['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_description:cn', 'Course Description (Traditional Chinese)') }}
                                {{ Form::textarea('course_description:cn',old('course_description:cn'),['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_description:sc', 'Course Description (Simplify Chinese)') }}
                                {{ Form::textarea('course_description:sc',old('course_description:sc'),['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_price', 'Course Price') }}
                                {{ Form::text('course_price',old('course_price'),['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_discount', 'Discount') }}
                                {{ Form::text('course_discount',old('course_discount'),['class' => 'form-control', 'required']) }}
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
