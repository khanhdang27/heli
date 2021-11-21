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

                            </div>
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Examination Assessment
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="border border-rounder p-3">
                            <br>
                            <div class="tab-content">
                                <div class="tab-pane fade {{ $quiz->set == 1 ? 'show active' : '' }} "
                                    id="set-{{ $quiz->set }}" role="tabpanel" aria-labelledby="set_{{ $quiz->set }}">
                                    <div class="accordion" id="accordionAssessment">
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
                                                aria-labelledby="headingOne" data-parent="#accordionAssessment">
                                                <div class="card-body">
                                                    <x-admin.create-read-question :quiz="$quiz">
                                                    </x-admin.create-read-question>
                                                    <br>
                                                    <x-admin.list-reading-question :quiz="$quiz">
                                                    </x-admin.list-reading-question>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseWritingSet1"
                                                        aria-expanded="false" aria-controls="collapseWritingSet1">
                                                        Writing
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseWritingSet1" class="collapse"
                                                aria-labelledby="headingTwo" data-parent="#accordionAssessment">
                                                <div class="card-body">
                                                    <x-admin.create-writing-question :quiz="$quiz">
                                                    </x-admin.create-writing-question>
                                                    <br>
                                                    <x-admin.list-writing-question :quiz="$quiz">
                                                    </x-admin.list-writing-question>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseListeningSet1"
                                                        aria-expanded="false" aria-controls="collapseListeningSet1">
                                                        Listening
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseListeningSet1" class="collapse"
                                                aria-labelledby="headingThree" data-parent="#accordionAssessment">
                                                <div class="card-body">
                                                    <x-admin.create-listening-question :quiz="$quiz">
                                                    </x-admin.create-listening-question>
                                                    <x-admin.list-listening-question :quiz="$quiz">
                                                    </x-admin.list-listening-question>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseSpeakingSet1"
                                                        aria-expanded="false" aria-controls="collapseSpeakingSet1">
                                                        Speaking
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseSpeakingSet1" class="collapse"
                                                aria-labelledby="headingThree" data-parent="#accordionAssessment">
                                                <div class="card-body">
                                                    <x-admin.create-speaking-assessment-question :quiz="$quiz">
                                                    </x-admin.create-speaking-assessment-question>
                                                    <x-admin.list-speaking-assessment-question :quiz="$quiz">
                                                    </x-admin.list-speaking-assessment-question>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

            $('a[data-toggle="tab"]').on('shown.bs.tab', function(event) {
                localStorage.setItem("quizQuestionSet", event.target.id);
            })

            if (localStorage.collapseQuestion) {
                let quizSet = localStorage.getItem("collapseQuestion")
                $(`div[id="${quizSet}"]`).collapse('show');
            }
            $('#accordionAssessment').on('shown.bs.collapse', function(event) {
                var scrollPosition = event.target.offsetTop;
                localStorage.setItem("scrollPosition", scrollPosition);
                if (event.target.dataset.parent == '#accordionAssessment') {
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
