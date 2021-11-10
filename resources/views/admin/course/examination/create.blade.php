@php
use App\Models\Examination;
use App\Models\Lecture;
@endphp

@extends('admin.layout')
@section('content')
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
                                    Examination
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        {!! Form::open(['method' => 'post', 'url' => route('admin.course.examination.store', $course->id)]) !!}
                        <div class="form-group">
                            <label for="name"> Name </label>
                            {!! Form::text('name', old('name'), ['class' => 'form-control', 'required', 'wire:model' => 'examination.name']) !!}
                            @error('examination.name') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="index">Index</label>
                            {!! Form::number('index', old('index'), ['class' => 'form-control', 'required', 'wire:model' => 'examination.index']) !!}
                            @error('examination.index') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            {!! Form::select('type', Examination::TYPES, old('type'), ['class' => 'form-control', 'required']) !!}
                            @error('examination.type') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            {!! Form::select('level', Lecture::LEVELS, old('level'), ['class' => 'form-control', 'required']) !!}
                            @error('examination.level') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="d-flex">
                            <button type="submit" class="btn btn-success ml-auto"> Save </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>

@endsection
