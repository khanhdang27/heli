@php

use App\Utilities\SelectionByClass;
use App\Models\Tutor;
use App\Models\Subject;
use App\Models\Lecture;

@endphp

@extends('admin.layout')
@section('content')
    <script src="{{ asset('js/admin/vimeo-upload.js') }}"></script>
    <!-- CARDS -->
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="pr-2">
                                <a class="btn btn-outline-dark btn-sm"
                                    href="{{ route('admin.course.lecture.list', $course->id) }}">
                                    <i class="fe fe-arrow-left"></i>
                                </a>
                            </div>
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Create Lectures
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        {!! Form::open(['url' => route('admin.course.lecture.store', $course->id), 'enctype' => 'multipart/form-data']) !!}
                        @csrf
                        <div class="form-group ">
                            {{ Form::label('lectures_name', 'Name') }}
                            {{ Form::text('lectures_name', old('lectures_name'), ['class' => 'form-control', 'required', 'id' => 'lectures_name']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('lectures_description', 'Description') }}
                            {{ Form::text('lectures_description', old('lectures_description'), ['class' => 'form-control', 'required', 'id' => 'lectures_description']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('index', 'Index') }}
                            {{ Form::number('index', old('index'), ['class' => 'form-control', 'required', 'id' => 'index']) }}
                        </div>
                        <div class="form-group ">
                            Pick up video
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="browse"
                                    accept="video/mp4,video/x-m4v,video/*">
                                <label class="custom-file-label" for="customFile">Browse&hellip; </label>
                            </div>
                            <div id="results"></div>
                            <div id="progress-container" class="progress">
                                <div id="progress" class="progress-bar progress-bar-info progress-bar-striped active"
                                    role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 0%">&nbsp;0%
                                </div>
                            </div>
                            {{ Form::label('video_resource', 'Video Resource') }}
                            {{ Form::text('video_resource', old('video_resource'), ['class' => 'form-control', 'required', 'id' => 'index']) }}
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="file" accept=".pdf">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            {{ Form::select('level', Lecture::LEVELS, old('level'), ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            {{ Form::select('type', Lecture::TYPES, old('type'), ['class' => 'form-control']) }}
                        </div>
                        <button type="submit" class="btn btn-primary"> Save </button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
    <script src="{{ asset('js/vimeo_upload_process.js') }}"></script>
    <script type="application/javascript">
        $("#customFile").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

@endsection
