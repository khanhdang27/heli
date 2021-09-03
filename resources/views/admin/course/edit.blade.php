@php
use \App\Utilities\SelectionByClass;

use App\Models\Subject;
use App\Models\Course;
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
                    <div class="d-flex align-items-center">
                        <div class="pr-2">
                            <button class="btn btn-outline-dark btn-sm" onclick="window.history.go(-1)">
                                <i class="fe fe-arrow-left"></i>
                            </button>
                        </div>
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Edit Course
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body">
                        {!! Form::open(['route' => ['admin.course.update', $course->id], 'method' => 'put', 'enctype' =>
                        'multipart/form-data', 'id'=>'create_course']) !!}
                        @csrf
                        <div class="form-group ">
                            {{ Form::label('course_name:en', 'Course Name (English)', ['class' => 'required']) }}
                            {{ Form::text('course_name:en', $course->translate('en')->course_name, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('course_name:cn', 'Course Name (Traditional Chinese)', ['class' => 'required']) }}
                            {{ Form::text('course_name:cn', $course->translate('cn')->course_name, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('course_name:sc', 'Course Name (Simplify Chinese)', ['class' => 'required']) }}
                            {{ Form::text('course_name:sc', $course->translate('sc')->course_name, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="row justify-content-between">
                            <div class="form-group col-12 col-md-4">
                                {{ Form::label('subject_id', 'Subject', ['class' => 'required']) }}
                                {{ Form::select('subject_id', 
                                        array_filter(SelectionByClass::getValues(Subject::class,'subject_name','id'), function($var, $id)
                                        {
                                            return $id != 1;
                                        }, ARRAY_FILTER_USE_BOTH) , 
                                        $course->subject->id, ['class' => 'form-control', 'required']) 
                                    }}
                            </div>
                            <div class="form-group col-12 col-md-4">
                                {{ Form::label('tutor_id', 'Tutor', ['class' => 'required']) }}
                                {{ Form::select('tutor_id',
                                        array_filter(SelectionByClass::getValues(\App\Models\Tutor::class,'full_name','id'), function($var, $id)
                                            {
                                                return $id != 1;
                                            }, ARRAY_FILTER_USE_BOTH),
                                        $course->tutor->id, ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group col-12 col-md-4">
                                {{ Form::label('type', 'Type', ['class' => 'required']) }}
                                {{ Form::select('type', Course::COURSE_TYPE,$course->type,['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group ">
                            {{ Form::label('course_description:en', 'Course Description (English)', ['class' => 'required']) }}
                            {{ Form::text('course_description:en', $course->translate('en')->course_description, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('course_description:cn', 'Course Description (Traditional Chinese)', ['class' => 'required']) }}
                            {{ Form::text('course_description:cn', $course->translate('cn')->course_description, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('course_description:sc', 'Course Description (Simplify Chinese)', ['class' => 'required']) }}
                            {{ Form::text('course_description:sc', $course->translate('sc')->course_description, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('course_overview', 'Course Overview', ['class' => 'required']) }}
                            {{ Form::textarea('course_overview',$course->course_overview,['class' => 'form-control', 'required', 'id'=>'ckeditor']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('course_price', 'Course Price', ['class' => 'required']) }}
                            {{ Form::text('course_price', $course->course_price, ['class' => 'form-control', 'required', 'min'=> 4]) }}
                        </div>
                        {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div>
<script>
    window.onload = function () {
            CKEDITOR.replace('ckeditor');
        };
</script>
<script>
    var create_course = new Vue({
            el: '#create_course',
            methods:
                {
                    setDefaultInvisible() {
                        let type = document.getElementById('type');
                        if (type.value === "3") {
                            document.getElementById('tutor').hidden = true;
                        } else {
                            document.getElementById('tutor').hidden = false;
                        }
                    }
                }
        })
</script>
@endsection