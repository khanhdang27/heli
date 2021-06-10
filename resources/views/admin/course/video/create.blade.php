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
                                    Create Video
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => ['admin.course.video.store', $course->id], 'enctype' => 'multipart/form-data'])!!}
                            @csrf
                            <div class="form-group ">
                                {{ Form::label('course_video_name:en', 'Video Name (English)') }}
                                {{ Form::text('course_video_name:en', old('course_video_name:en'), ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_video_name:cn', 'Video Name (Traditional Chinese)') }}
                                {{ Form::text('course_video_name:cn', old('course_video_name:cn'), ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_video_name:sc', 'Video Name (Simplify Chinese)') }}
                                {{ Form::text('course_video_name:sc', old('course_video_name:sc'), ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_video_description:en', 'Video Description (English)') }}
                                {{ Form::text('course_video_description:en', old('course_video_description:en'), ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_video_description:cn', 'Video Description (Traditional Chinese)') }}
                                {{ Form::text('course_video_description:cn', old('course_video_description:cn'), ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_video_description:sc', 'Video Description (Simplify Chinese)') }}
                                {{ Form::text('course_video_description:sc', old('course_video_description:sc'), ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="custom-file mb-4">
                                {{ Form::label('course_video_file', 'Video', ['class' => 'custom-file-label']) }}
                                {{ Form::file('course_video_file', ['class' => 'custom-file-input']) }}
                            </div>
                            {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}

                        </div>
                        <script>
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
