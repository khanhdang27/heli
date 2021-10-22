@php

use App\Models\Examination;
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
                                    href="{{ route('admin.course.quiz.list', ['course' => $course->id, 'exam' => $exam]) }}">
                                    <i class="fe fe-arrow-left"></i>
                                </a>
                            </div>
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Edit Quiz
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        {!! Form::open(['url' => route('admin.course.exam.store', ['course' => $course->id, 'exam' => $exam, 'quiz' => $quiz]), 'enctype' => 'multipart/form-data']) !!}
                        @csrf
                        <div class="form-group ">
                            {{ Form::label('version', 'Name', ['class' => 'required']) }}
                            {{ Form::number('version', $quiz->version, ['class' => 'form-control', 'required', 'id' => 'version']) }}
                        </div>

                        {{ Form::submit('Save', ['class' => 'btn btn-primary mt-5']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
@endsection
