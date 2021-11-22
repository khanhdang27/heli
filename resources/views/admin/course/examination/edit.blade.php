@php
use App\Models\Examination;
use App\Models\Lecture;
@endphp

@extends('admin.layout')
@section('content')

    <script src="{{ asset('js/admin/vimeo-upload.js') }}"></script>
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
                        {!! Form::open(['method' => 'put', 'url' => route('admin.course.examination.update', ['course' => $course->id, 'exam' => $exam->id]), 'class' => 'mb-3']) !!}
                        @csrf
                        <div class="form-group">
                            <label class="required" for="name"> Name </label>
                            {!! Form::text('name', $exam->name, ['class' => 'form-control', 'required']) !!}
                            @error('name') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label class="required" for="index">Index</label>
                            {!! Form::number('index', $exam->index, ['class' => 'form-control', 'required']) !!}
                            @error('index') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label class="required" for="type">Type</label>
                            {!! Form::select('type', \Constants::EXAMINATION_TYPES, $exam->type, ['class' => 'form-control', 'required']) !!}
                            @error('type') <span class="error">{{ $message }}</span> @enderror
                        </div>

                        <div class="d-flex">
                            <button type="submit" class="btn btn-success ml-auto"> Save </button>
                        </div>
                        {!! Form::close() !!}
                        <hr>
                        <div class="border border-rounder p-3">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @foreach ($quizzes as $quiz)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="set_{{ $quiz->set }}" data-toggle="tab"
                                            href="#set-{{ $quiz->set }}" role="tab"
                                            aria-controls="set-{{ $quiz->set }}" aria-selected="true">Set
                                            {{ $quiz->set }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <br>
                            <div class="tab-content">
                                @foreach ($quizzes as $quiz)
                                    <div class="tab-pane fade {{ $quiz->set == 1 ? 'show active' : '' }} "
                                        id="set-{{ $quiz->set }}" role="tabpanel"
                                        aria-labelledby="set_{{ $quiz->set }}">
                                        <div class="accordion" id="accordionExample">
                                            @switch($course->type_part)
                                                @case(\Constants::COURSE_READING)
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapseReadingSet1"
                                                                    aria-expanded="true" aria-controls="collapseReadingSet1">
                                                                    Reading
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseReadingSet1" class="collapse show"
                                                            aria-labelledby="headingOne" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <x-admin.create-read-question :quiz="$quiz">
                                                                </x-admin.create-read-question>
                                                                <br>
                                                                <x-admin.list-reading-question :quiz="$quiz">
                                                                </x-admin.list-reading-question>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break
                                                @case(\Constants::COURSE_WRITING)
                                                    <div class="card">
                                                        <div class="card-header" id="headingTwo">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left collapsed"
                                                                    type="button" data-toggle="collapse"
                                                                    data-target="#collapseWritingSet1" aria-expanded="false"
                                                                    aria-controls="collapseWritingSet1">
                                                                    Writing
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseWritingSet1" class="collapse show"
                                                            aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                @if ($exam->type == \Constants::EXAMINATION_QUIZ)
                                                                    <x-admin.create-writing-quiz-question :quiz="$quiz">
                                                                    </x-admin.create-writing-quiz-question>
                                                                    <br>
                                                                    <x-admin.list-writing-quiz-question :quiz="$quiz">
                                                                    </x-admin.list-writing-quiz-question>
                                                                @else
                                                                    <x-admin.create-writing-question :quiz="$quiz">
                                                                    </x-admin.create-writing-question>
                                                                    <br>
                                                                    <x-admin.list-writing-question :quiz="$quiz">
                                                                    </x-admin.list-writing-question>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break
                                                @case(\Constants::COURSE_LISTENING)
                                                    <div class="card">
                                                        <div class="card-header" id="headingThree">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left collapsed"
                                                                    type="button" data-toggle="collapse"
                                                                    data-target="#collapseListeningSet1" aria-expanded="false"
                                                                    aria-controls="collapseListeningSet1">
                                                                    Listening
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseListeningSet1" class="collapse show"
                                                            aria-labelledby="headingThree" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <x-admin.create-listening-question :quiz="$quiz">
                                                                </x-admin.create-listening-question>
                                                                <x-admin.list-listening-question :quiz="$quiz">
                                                                </x-admin.list-listening-question>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break
                                                @case(\Constants::COURSE_SPEAKING)
                                                    <div class="card">
                                                        <div class="card-header" id="headingThree">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left collapsed"
                                                                    type="button" data-toggle="collapse"
                                                                    data-target="#collapseSpeakingSet1" aria-expanded="false"
                                                                    aria-controls="collapseSpeakingSet1">
                                                                    Speaking
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseSpeakingSet1" class="collapse show"
                                                            aria-labelledby="headingThree" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                @if ($exam->type == \Constants::EXAMINATION_EXERCISES)
                                                                    <x-admin.create-speaking-question :quiz="$quiz">
                                                                    </x-admin.create-speaking-question>
                                                                    <x-admin.list-speaking-question :quiz="$quiz">
                                                                    </x-admin.list-speaking-question>
                                                                @else
                                                                    <x-admin.create-speaking-quiz-question :quiz="$quiz">
                                                                    </x-admin.create-speaking-quiz-question>
                                                                    <x-admin.list-speaking-quiz-question :quiz="$quiz">
                                                                    </x-admin.list-speaking-quiz-question>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break
                                                @default
                                            @endswitch
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
    <script type="application/javascript">
        window.onload = function() {
            CKEDITOR.replaceAll('rich-text');
        };
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            if (localStorage.quizQuestionSet) {
                if ({{ $exam->type }}) {
                    let quizSet = localStorage.getItem("quizQuestionSet")
                    $(`a[id="${quizSet}"]`).tab('show');
                } else {
                    $(`a[id="set_1"]`).tab('show');
                }
            }
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(event) {
                localStorage.setItem("quizQuestionSet", event.target.id);
            })

            if (localStorage.collapseQuestion) {
                let quizSet = localStorage.getItem("collapseQuestion")
                $(`div[id="${quizSet}"]`).collapse('show');
            }
            $('#accordionExample').on('shown.bs.collapse', function(event) {
                var scrollPosition = event.target.offsetTop;
                localStorage.setItem("scrollPosition", scrollPosition);
                if (event.target.dataset.parent == '#accordionExample') {
                    localStorage.setItem("collapseQuestion", event.target.id);
                }
            })
            if (localStorage.scrollPosition) {
                let pos = localStorage.getItem("scrollPosition")
                window.scrollTo(0, pos + 20);
            }
        });
    </script>
@endsection
