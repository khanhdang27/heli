@php
use App\Models\Examination;
use App\Models\StudentExamination;
use App\Models\Quiz;
@endphp

@extends('admin.layout')
@section('content')
    <!-- CARDS -->
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="pr-2">
                                <a class="btn btn-outline-dark btn-sm"
                                    href="{{ route('admin.student-examination.index') }}">
                                    <i class="fe fe-arrow-left"></i>
                                </a>
                            </div>
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Grade Exam
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <h3>
                                    Exam: {{ $exam_details[0]->exam->name }}
                                </h3>
                                <h5>
                                    Exam type: {{ \Constants::EXAMINATION_TYPES[$exam_details[0]->exam->type] }}
                                </h5>
                                <h5>
                                    Set: {{ Quiz::SET_LIST[$exam_details[0]->quiz->set] }}
                                </h5>
                            </div>
                            <div class="col-3">
                                <h3>
                                    Time For Process
                                </h3>
                                <h5>
                                    Reading: {{ $reading }} (s)
                                </h5>
                                <h5>
                                    Writing: {{ $writing }} (s)
                                </h5>
                                <h5>
                                    Listening: {{ $listening }} (s)
                                </h5>
                                <h5>
                                    Speaking: {{ $speaking }} (s)
                                </h5>
                            </div>
                            <div class="col-4">
                                <div class="d-flex">

                                    <label class="ml-auto btn btn-primary" for="check-reviewed"> Check Reviewed </label>
                                </div>
                            </div>
                        </div>
                        {!! Form::open([
    'url' => route('admin.student-examination.handleGrade', [
        'student' => $exam_details[0]->student->id,
        'course' => $exam_details[0]->course->id,
        'exam' => $exam_details[0]->exam->id,
        'quiz' => $exam_details[0]->quiz->id,
    ]),
    'method' => 'post',
]) !!}
                        <table class="table">
                            <tr>
                                <th class="c-40">Question</th>
                                <th class="c-10">Time</th>
                                <th class="c-20">Answer</th>
                                <th class="c-10">Score</th>
                                <th class="c-10">Reviewed</th>
                            </tr>
                            <tbody>
                                @foreach ($exam_details as $detail)
                                    <tr>
                                        <td class="text-limit-2">
                                            {{ $detail->question->questionContent()->question }}
                                        </td>
                                        <td class="c-10">
                                            {{ $detail->time }}
                                        </td>
                                        <td class="c-20">
                                            @if ($detail->answer_type === StudentExamination::ANSWER_MC)
                                                {{ $detail->question->questionContent()->findAnswerById($detail->answer)->answer }}
                                            @elseif ($detail->answer_type === StudentExamination::ANSWER_TEXT)
                                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal"
                                                    data-target="#reviewTextAnswer" data-answer="{{ $detail->answer }}"
                                                    data-comment-url="{{ route('admin.student-examination.comment', ['studentExam' => $detail->id]) }}"
                                                    data-detail-id="{{ $detail->id }}"
                                                    data-detail-comment="{{ $detail->comment }}">
                                                    View Answer <i class="fe fe-eye"></i>
                                                </button>
                                            @else
                                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal"
                                                    data-target="#reviewVideoAnswer"
                                                    data-comment-url="{{ route('admin.student-examination.comment', ['studentExam' => $detail->id]) }}"
                                                    data-answer="{{ 'https://player.vimeo.com/video/' . $detail->answer . '?badge=0&autopause=0&app_id=' . config('app.vimeo_app_id') }}"
                                                    data-detail-id="{{ $detail->id }}"
                                                    data-detail-comment="{{ $detail->comment }}">
                                                    View Answer <i class="fe fe-eye"></i>
                                                </button>
                                            @endif
                                        </td>
                                        <td id="score-show{{ $detail->id }}" class="c-10">
                                            {{ $detail->score }}
                                        </td>
                                        <td class="c-10">
                                            <div class="custom-control custom-checkbox">
                                                <input name="is_review[]" value="{{ $detail->id }}" type="checkbox"
                                                    class="custom-control-input" id="review_{{ $detail->id }}"
                                                    {{ $detail->reviewed == 1 ? 'checked' : '' }}>
                                                <label class="custom-control-label"
                                                    for="review_{{ $detail->id }}"></label>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex">
                            <button id="check-reviewed" name="check-reviewed" class="btn btn-primary ml-auto">
                                Check Reviewed
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>

    <div class="modal fade" id="reviewTextAnswer" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <form id='commentForm'>
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Related Lecture</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mx-3 my-5 lead" id="anwser-text" style="overflow: auto; height: 300px"></div>
                        </div>
                        <div class="col-6">
                            @csrf
                            <label for="score"> Score </label>
                            <input type="number" min="0" max="10" step="1" class="form-control" name="score" id="score">
                            <label for="comment"> Comment </label>
                            <textarea class="form-control rich-text mb-3" name="comment" id="ckeditor"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="handleGrade()" class="btn btn-primary"> Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="reviewVideoAnswer" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <form id='commentForm'>
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Related Lecture</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe id="answerVideo" allow="autoplay; fullscreen; picture-in-picture"
                                        allowfullscreen style="position:absolute;top:0;left:0;" height="320" width="640"
                                        frameborder="0"></iframe>
                                </div>
                                <script type="application/javascript" src="https://player.vimeo.com/api/player.js"></script>
                            </div>
                            <div class="col-lg-6">
                                @csrf
                                <label for="scoreVideo"> Score </label>
                                <input type="number" min="0" max="10" step="1" class="form-control" name="score"
                                    id="scoreVideo">
                                <label for="comment"> Comment </label>
                                <textarea class="form-control rich-text mb-3" name="comment" id="ckeditorVideo"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" onclick="handleGrade()" class="btn btn-primary"> Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var submitUrl = '';
        var detailId = '';

        function handleGrade() {
            let com = CKEDITOR.instances['ckeditor'].getData();
            let comVideo = document.getElementById('ckeditorVideo').value;
            let scoreText = document.getElementById('score').value;
            let scoreVideo = document.getElementById('scoreVideo').value;
            $.ajax({
                type: 'POST',
                url: submitUrl,
                dataType: 'json',
                data: {
                    _token: '{{ csrf_token() }}',
                    comment: com || comVideo,
                    score: scoreText || scoreVideo
                },
                success: function(data) {
                    if (data.message == 'success') {
                        var scoreCol = document.getElementById('score-show' + detailId);
                        window.location.reload();
                    }
                }
            })
        }

        $(document).ready(function() {
            CKEDITOR.replace('ckeditor');
            $('#reviewTextAnswer').on('shown.bs.modal', function(event) {
                let textAnswer = document.getElementById('anwser-text');
                var button = $(event.relatedTarget) // Button that triggered the modal
                var anwser = button.data('answer') // Extract info from data-* attributes
                textAnswer.innerHTML = anwser
                submitUrl = button.data('commentUrl')
                detailId = button.data('detailId')
                detailComment = button.data('detailComment')
                CKEDITOR.instances['ckeditor'].setData(detailComment)
            })
            $('#reviewVideoAnswer').on('shown.bs.modal', function(event) {
                let textAnswer = document.getElementById('answerVideo');
                var button = $(event.relatedTarget) // Button that triggered the modal
                var anwser = button.data('answer') // Extract info from data-* attributes
                textAnswer.setAttribute('src', anwser);
                submitUrl = button.data('commentUrl')
                detailId = button.data('detailId')
                detailComment = button.data('detailComment')
                // CKEDITOR.instances['ckeditorVideo'].setData(detailComment)
            })
        })
    </script>
@endsection
