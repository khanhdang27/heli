@php

use App\Utilities\SelectionByClass;
use App\Models\Tutor;
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
                                <a class="btn btn-outline-dark btn-sm" href="{{ route('admin.course.index') }}">
                                    <i class="fe fe-arrow-left"></i>
                                </a>
                            </div>
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Create Course
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => 'admin.course.store', 'enctype' => 'multipart/form-data', 'id' => 'create_course']) !!}
                            @csrf
                            <div class="form-group ">
                                {{ Form::label('course_name:en', 'Course Name (English)', ['class' => 'required']) }}
                                {{ Form::text('course_name:en', old('course_name:en'), ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_name:cn', 'Course Name (Traditional Chinese)', ['class' => 'required']) }}
                                {{ Form::text('course_name:cn', old('course_name:cn'), ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_name:sc', 'Course Name (Simplify Chinese)', ['class' => 'required']) }}
                                {{ Form::text('course_name:sc', old('course_name:sc'), ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="row justify-content-between">
                                <div class="form-group col-12 col-md-4">
                                    {{ Form::label('subject_id', 'Subject', ['class' => 'required']) }}
                                    {{ Form::select(
                                        'subject_id',
                                        array_filter(
                                            SelectionByClass::getValues(Subject::class, 'subject_name', 'id'),
                                            function ($var, $id) {
                                                return $id;
                                            },
                                            ARRAY_FILTER_USE_BOTH,
                                        ),
                                        null,
                                        ['class' => 'form-control'],
                                    ) }}
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    {{ Form::label('type', 'Type', ['class' => 'required']) }}
                                    {{ Form::select('type', \Constants::COURSE_TYPES, null, ['class' => 'form-control', 'v-on:change' => 'setDefaultInvisible']) }}
                                </div>
                                <div class="form-group col-12 col-md-4" id="tutor">
                                    {{ Form::label('tutor_id', 'Tutor', ['class' => 'required']) }}
                                    {{ Form::select(
                                        'tutor_id',
                                        array_filter(
                                            SelectionByClass::getValues(Tutor::class, 'full_name', 'id'),
                                            function ($var, $id) {
                                                return $id;
                                            },
                                            ARRAY_FILTER_USE_BOTH,
                                        ),
                                        null,
                                        ['class' => 'form-control'],
                                    ) }}
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="level">Level</label>
                                    {{ Form::select('level', \Constants::LEVELS, old('level'), ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="type_part">Type Part</label>
                                    {{ Form::select('type_part', \Constants::COURSE_PARTS, old('type_part'), ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_description:en', 'Course Description (English)', ['class' => 'required']) }}
                                {{ Form::text('course_description:en', old('course_description:en'), ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_description:cn', 'Course Description (Traditional Chinese)', ['class' => 'required']) }}
                                {{ Form::text('course_description:cn', old('course_description:cn'), ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_description:sc', 'Course Description (Simplify Chinese)', ['class' => 'required']) }}
                                {{ Form::text('course_description:sc', old('course_description:sc'), ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_overview', 'Course Overview', ['class' => 'required']) }}
                                {{ Form::textarea('course_overview', old('course_overview'), ['class' => 'form-control', 'id' => 'ckeditor', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_price', 'Course Price', ['class' => 'required']) }}
                                {{ Form::text('course_price', old('course_price'), ['class' => 'form-control', 'required', 'min' => 4]) }}
                            </div>
                            {{ Form::submit('Save', ['class' => 'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
    <script type="application/javascript">
        window.onload = function() {
            CKEDITOR.replace('ckeditor');
        };
    </script>
    <script type="text/javascript">
        var create_course = new Vue({
            el: '#create_course',
            methods: {
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
