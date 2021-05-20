<?php
$subjectList = new \App\Models\Subject();
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
                                    Create Subject
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route'=> 'admin.tutor.store', 'enctype' => 'multipart/form-data']) !!}
                            @csrf
                            <div class="form-group ">
                                {{ Form::label('tutor_name', 'Tutor name') }}
                                {{ Form::text('tutor_name', old('tutor_name'), ['class'=>'form-control']) }}
                            </div>
                            <div class="custom-file mb-4">
                                {{ Form::label('tutor_photo', 'Photo', ['class' => 'custom-file-label']) }}
                                {{ Form::file('tutor_photo', ['class' => 'custom-file-input']) }}
                            </div>
                            <div class="form-group ">

                                {{ Form::label('subject_id', 'Subject') }}
                                {{ Form::select('subject_id', $subjectList->getName(),null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:en', 'Tutor Info (English)') }}
                                {{ Form::text('tutor_info:en', old('tutor_info:en'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:cn', 'Tutor Info (Traditional Chinese)') }}
                                {{ Form::text('tutor_info:cn', old('tutor_info:cn'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:sc', 'Tutor Info (Simplify Chinese)') }}
                                {{ Form::text('tutor_info:sc', old('tutor_info:sc'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:en', 'Tutor Level (English)') }}
                                {{ Form::text('tutor_level:en', old('tutor_level:en'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:cn', 'Tutor Level (Traditional Chinese)') }}
                                {{ Form::text('tutor_level:cn', old('tutor_level:cn'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:sc', 'Tutor Level (Simplify Chinese)') }}
                                {{ Form::text('tutor_level:sc', old('tutor_level:sc'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:en', 'Tutor Specialized (English)') }}
                                {{ Form::text('tutor_specialized:en', old('tutor_specialized:en'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:cn', 'Tutor Specialized (Traditional Chinese)') }}
                                {{ Form::text('tutor_specialized:cn', old('tutor_specialized:cn'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:sc', 'Tutor Specialized (Simplify Chinese)') }}
                                {{ Form::text('tutor_specialized:sc', old('tutor_specialized:sc'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:en', 'Tutor Experience (English)') }}
                                {{ Form::text('tutor_experience:en', old('tutor_experience:en'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:cn', 'Tutor Experience (Traditional Chinese)') }}
                                {{ Form::text('tutor_experience:cn', old('tutor_experience:cn'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:sc', 'Tutor Experience (Simplify Chinese)') }}
                                {{ Form::text('tutor_experience:sc', old('tutor_experience:sc'), ['class'=>'form-control']) }}
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
