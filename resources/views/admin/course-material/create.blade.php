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
                                    Create Material
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => 'admin.course-material.store', 'enctype'=>'multipart/form-data']) !!}
                            <div class="form-group ">
                                {{ Form::label('course_id', 'Course') }}
                                {{ Form::select('course_id', SelectionByClass::getValues(\App\Models\Course::class,'course_name','id') ,null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_name:en', 'Material Name (English)') }}
                                {{ Form::text('course_material_name:en', old('course_material_name:en'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_name:cn', 'Material Name (Traditional Chinese)') }}
                                {{ Form::text('course_material_name:cn', old('course_material_name:cn'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_name:sc', 'Material Name (Traditional Chinese)') }}
                                {{ Form::text('course_material_name:sc', old('course_material_name:sc'),['class' => 'form-control']) }}
                            </div>
{{--                            <div class="form-group ">--}}
{{--                                {{ Form::label('material_price', 'Price') }}--}}
{{--                                {{ Form::text('material_price', old('material_price'),['class' => 'form-control']) }}--}}
{{--                            </div>--}}
                            <div class="form-group ">
                                {{ Form::label('course_material_description:en', 'Description (English)') }}
                                {{ Form::textarea('course_material_description:en', old('course_material_description:en'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_description:cn', 'Description (Traditional Chinese)') }}
                                {{ Form::textarea('course_material_description:cn', old('course_material_description:cn'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_description:sc', 'Description (Simplify Chinese)') }}
                                {{ Form::textarea('course_material_description:sc', old('course_material_description:sc'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_origin:en', 'Material Origin (English)') }}
                                {{ Form::text('course_material_origin:en', old('course_material_origin:en'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_origin:cn', 'Material Origin (Traditional Chinese)') }}
                                {{ Form::text('course_material_origin:cn', old('course_material_origin:cn'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_origin:sc', 'Material Origin (Simplify Chinese)') }}
                                {{ Form::text('course_material_origin:sc', old('course_material_origin:sc'),['class' => 'form-control']) }}
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
