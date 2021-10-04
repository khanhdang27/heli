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
                                <a class="btn btn-outline-dark btn-sm"
                                    href="{{ route('admin.course.question.list', ['course' => $course->id, 'exam' => $exam, 'quiz' => $quiz]) }}">
                                    <i class="fe fe-arrow-left"></i>
                                </a>
                            </div>
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Create Question
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        {!! Form::open(['url' => route('admin.course.question.store', ['course' => $course->id, 'exam' => $exam, 'quiz' => $quiz]), 'enctype' => 'multipart/form-data']) !!}
                        @csrf
                        <div class="form-group ">
                            {{ Form::label('question', 'Question', ['class' => 'required']) }}
                            {{ Form::text('question', old('question'), ['class' => 'form-control', 'required', 'id' => 'question']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('message_wrong', 'Message Wrong', ['class' => 'required']) }}
                            {{ Form::text('message_wrong', old('message_wrong'), ['class' => 'form-control', 'required', 'id' => 'message_wrong']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('lecture_index', 'Lecture Index', ['class' => 'required']) }}
                            {{ Form::number('lecture_index', old('lecture_index'), ['class' => 'form-control', 'required', 'id' => 'lecture_index']) }}
                        </div>
                        {{ Form::submit('Save', ['class' => 'btn btn-primary mt-5']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
@endsection
