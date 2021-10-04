@php

use App\Models\Exams;
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
                                    Edit Exams
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        {!! Form::open(['url' => route('admin.course.exam.update', ['course' => $course->id, 'exam' => $exam]), 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
                        @csrf
                        <div class="form-group ">
                            {{ Form::label('name', 'Name', ['class' => 'required']) }}
                            {{ Form::text('name', $exam->name, ['class' => 'form-control', 'required', 'id' => 'name']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('index', 'Index', ['class' => 'required']) }}
                            {{ Form::number('index', $exam->index, ['class' => 'form-control', 'required', 'id' => 'index']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('type', 'Type', ['class' => 'required']) }}
                            {{ Form::select('type', Exams::TYPES, $exam->type, ['placeholder' => 'Pick a type...', 'class' => 'form-control', 'required', 'id' => 'type']) }}
                        </div>

                        {{ Form::submit('Save', ['class' => 'btn btn-primary mt-5']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
@endsection
