<?php
/**
 * @var \Collective\Html\FormBuilder
 */
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
                            {!! Form::open(['route' => 'admin.material.store', 'enctype'=>'multipart/form-data']) !!}
                            @csrf
                            <div class="form-group ">
                                {{ Form::label('material_name:en', 'Material Name (English)') }}
                                {{ Form::text('material_name:en', old('material_name:en'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_name:cn', 'Material Name (Traditional Chinese)') }}
                                {{ Form::text('material_name:cn', old('material_name:cn'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_name:sc', 'Material Name (Traditional Chinese)') }}
                                {{ Form::text('material_name:sc', old('material_name:sc'),['class' => 'form-control']) }}
                            </div>
                            <div class="custom-file mb-4">
                                {{ Form::label('file', 'Image', ['class' => 'custom-file-label']) }}
                                {{ Form::file('material_image', ['class' => 'custom-file-input'])}}
                            </div>
                            <div class="custom-file mb-4">
                                {{ Form::label('file', 'File', ['class' => 'custom-file-label']) }}
                                {{ Form::file('material_file', ['class' => 'custom-file-input'])}}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_price', 'Price') }}
                                {{ Form::text('material_price', old('material_price'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_description:en', 'Description (English)') }}
                                {{ Form::textarea('material_description:en', old('material_description:en'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_description:cn', 'Description (Traditional Chinese)') }}
                                {{ Form::textarea('material_description:cn', old('material_description:cn'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_description:sc', 'Description (Simplify Chinese)') }}
                                {{ Form::textarea('material_description:sc', old('material_description:sc'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_origin:en', 'Material Origin (English)') }}
                                {{ Form::text('material_origin:en', old('material_origin:en'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_origin:cn', 'Material Origin (Traditional Chinese)') }}
                                {{ Form::text('material_origin:cn', old('material_origin:cn'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_origin:sc', 'Material Origin (Simplify Chinese)') }}
                                {{ Form::text('material_origin:sc', old('material_origin:sc'),['class' => 'form-control']) }}
                            </div>
                            {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}

                        </div>
                        <script>
                            // Add the following code if you want the name of the file appear on select
                            $(document).ready(function () {
                                $(".custom-file-input").on("change", function () {
                                    var fileName = $(this).val().split("\\").pop();
                                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                });
                            });
                        </script>
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection
