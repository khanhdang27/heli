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
                        <div class="card-body">
                            {!! Form::open(['route' => ['admin.course.update', $course->id], 'method' => 'put', 'enctype' => 'multipart/form-data', 'id'=>'create_course']) !!}
                            @csrf
                            <div class="form-group ">
                                {{ Form::label('course_name:en', 'Course Name (English)') }}
                                {{ Form::text('course_name:en', $course->course_name, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_name:cn', 'Course Name (Traditional Chinese)') }}
                                {{ Form::text('course_name:cn', $course->course_name, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_name:sc', 'Course Name (Simplify Chinese)') }}
                                {{ Form::text('course_name:sc', $course->course_name, ['class' => 'form-control']) }}
                            </div>
                            <div class="row justify-content-between">
                                <div class="form-group col-12 col-md-4">
                                    {{ Form::label('subject_id', 'Subject') }}
                                    {{ Form::select('subject_id', 
                                        array_filter(SelectionByClass::getValues(Subject::class,'subject_name','id'), function($var, $id)
                                        {
                                            return $id != 1;
                                        }, ARRAY_FILTER_USE_BOTH) , 
                                        $course->subject->id, ['class' => 'form-control']) 
                                    }}
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    {{ Form::label('tutor_id', 'Tutor') }}
                                    {{ Form::select('tutor_id',
                                        array_filter(SelectionByClass::getValues(\App\Models\Tutor::class,'full_name','id'), function($var, $id)
                                            {
                                                return $id != 1;
                                            }, ARRAY_FILTER_USE_BOTH),
                                        $course->tutor->id, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    {{ Form::label('type', 'Type') }}
                                    {{ Form::select('type', Course::COURSE_TYPE,$course->type,['class'=>'form-control']) }}
                                </div>
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_description:en', 'Course Description (English)') }}
                                {{ Form::text('course_description:en', $course->course_description, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_description:cn', 'Course Description (Traditional Chinese)') }}
                                {{ Form::text('course_description:cn', $course->course_description, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_description:sc', 'Course Description (Simplify Chinese)') }}
                                {{ Form::text('course_description:sc', $course->course_description, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_overview', 'Course Overview') }}
                                {{ Form::textarea('course_overview',$course->course_overview,['class' => 'form-control','id'=>'ckeditor', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_price', 'Course Price') }}
                                {{ Form::text('course_price', $course->course_price, ['class' => 'form-control']) }}
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
                        console.log(type.value);
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
