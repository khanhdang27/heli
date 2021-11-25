@php
use App\Models\Examination;
use App\Models\StudentExamination;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\WritingQuizQuestion;
use App\Models\ListenAssessmentQuestion;
@endphp
@extends('layout.app')

@section('title', 'Course Page')

@section('content')
<div class="container-fluid text-center top-news-page">
    Review Exam
</div>
<div class="container my-5 text-primary">
    <div class="card">
        <div class="card-body p-4">
            <div class="row">
                <div class="col-md-6">
                    <h3>
                        <span class="font-weight-bold">Exam: </span>{{ $exam_details[0]->exam->name }}
                    </h3>
                    <h5>
                        <span class="font-weight-bold">Exam type:
                        </span>{{ \Constants::EXAMINATION_TYPES[$exam_details[0]->exam->type] }}
                    </h5>
                    <h5>
                        @if ($exam_details[0]->exam->type != \Constants::EXAMINATION_ASSESSMENT)
                        Set: {{ \Constants::SET_LIST[$exam_details[0]->quiz->set] }}
                        @endif
                    </h5>
                </div>
                <div class="col-md-6">
                    <h3 class="font-weight-bold">Time For Process</h3>
                    <h5>Reading: {{ $reading }} (s)</h5>
                    <h5>Writing: {{ $writing }} (s)</h5>
                    <h5>Listening: {{ $listening }} (s)</h5>
                    <h5>Speaking: {{ $speaking }} (s)</h5>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table mt-3">
                    <tr>
                        <th>Question</th>
                        <th class="text-center">Time</th>
                        <th>Answer</th>
                        <th>Correct</th>
                        <th>Score</th>
                        <th>Had update</th>
                    </tr>
                    <tbody>
                        @foreach ($exam_details as $detail)
                        <tr>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <p class="text-truncate" style="max-width: 200px">
                                        {{ $detail->question->questionContent()->question }}
                                    </p>
                                    <a class="text-success text-nowrap" type="button" data-toggle="modal"
                                        data-target="#viewDetailsQuestion_{{ $detail->question->id }}">
                                        View <i class="fe fe-eye"></i>
                                    </a>
                                </div>

                                <!-- Modal question details-->
                                <div class="modal fade" id="viewDetailsQuestion_{{ $detail->question->id }}"
                                    aria-labelledby="viewDetailsQuestion" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-lg text-primary">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title font-weight-bold"
                                                    id="exampleViewDetailsQuestion">
                                                    Question details</h3>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="p-3">
                                                    <h4 class="font-weight-bold mr-2">Question:</h4>
                                                    <h5>{{ $detail->question->questionContent()->question }}</h5>
                                                </div>
                                                <hr />
                                                <div class="p-3">
                                                    @if ($detail->question->type == \Constants::COURSE_READING)
                                                    <h4 class="font-weight-bold mr-2">Passage:</h4>
                                                    {!! $detail->quiz->passage->content !!}
                                                    @elseif($detail->question->type ==
                                                    \Constants::COURSE_LISTENING)
                                                    <h4 class="font-weight-bold">
                                                        Audio
                                                        {{ $detail->question->questionContent()->part }}
                                                    </h4>
                                                    @if ($detail->question->type == \Constants::COURSE_LISTENING &&
                                                    $detail->quiz->audioListen)
                                                    @php
                                                    $audio_1 =
                                                    $detail->quiz->audioListen->where('part',\Constants::QUESTION_PART_1)->first();
                                                    $audio_2 = $detail->quiz->audioListen->where('part',
                                                    \Constants::QUESTION_PART_2)->first();
                                                    @endphp
                                                    @if ($detail->question->questionContent()->part ==
                                                    \Constants::QUESTION_PART_1 && !empty($audio_1))
                                                    <audio id="audio" controls>
                                                        <source src="{{ asset(route('audio', $audio_1->audio_code)) }}"
                                                            type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                    @elseif(!empty($audio_2))
                                                    <audio id="audio" controls>
                                                        <source src="{{ asset(route('audio', $audio_2->audio_code)) }}"
                                                            type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                    @endif
                                                    @endif
                                                    @elseif($detail->question->type ==
                                                    \Constants::COURSE_SPEAKING)
                                                    @else
                                                    @if ($detail->exam->type == \Constants::EXAMINATION_QUIZ)
                                                    @if ($detail->question->questionContent()->part ==
                                                    \Constants::QUESTION_PART_2 &&
                                                    !empty($detail->question->questionContent()->file))
                                                    <img class="img-thumbnail"
                                                        src="{{ asset('/file/' . $detail->question->questionContent()->file->id) }}"
                                                        alt="" width="500">
                                                    @endif
                                                    @endif
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="modal-footer border-0"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                {{ $detail->time }}
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    @if ($detail->answer_type === \Constants::ANSWER_MC)
                                    <p class="text-truncate" style="max-width: 200px">
                                        {{ $detail->question->questionContent()->findAnswerById($detail->answer)->answer }}
                                    </p>
                                    @endif
                                    <a type="button" class="text-success text-nowrap" data-toggle="modal"
                                        data-target="#viewDetailsAnswer_{{ $detail->question->id }}">
                                        View <i class="fe fe-eye"></i>
                                    </a>
                                </div>
                                <!-- Modal answer details-->
                                <div class="modal fade" id="viewDetailsAnswer_{{ $detail->question->id }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-xl text-primary">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title font-weight-bold">
                                                    Answer details</h3>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body row">
                                                <div class="col-md-6">
                                                    <h4 class="font-weight-bold">Answer:</h4>
                                                    @if ($detail->answer_type === \Constants::ANSWER_MC)
                                                    {{ $detail->question->questionContent()->findAnswerById($detail->answer)->answer }}
                                                    @elseif ($detail->answer_type ===
                                                    \Constants::ANSWER_TEXT)
                                                    <h5>{!! $detail->answer !!}</h5>
                                                    @else
                                                    @if (!empty($detail->answer))
                                                    <vimeo-player class="embed-responsive embed-responsive-16by9"
                                                        ref="player" :video-id="{{ $detail->answer }}">
                                                    </vimeo-player>
                                                    @endif
                                                    @endif

                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="font-weight-bold">Score: {{ $detail->score }}</h4>
                                                    <hr />
                                                    <h4 class="font-weight-bold">Comment:</h4>
                                                    <h5>{!! $detail->comment !!}</h5>
                                                </div>
                                            </div>
                                            <div class="modal-footer border-0"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if ($detail->answer_type === \Constants::ANSWER_MC)
                                @if ($detail->question->questionContent()->findAnswerById($detail->answer)->is_correct)
                                <i class="fe fe-check text-success h3"></i>
                                @else
                                <i class="fe fe-x text-danger h3"></i>
                                @endif
                                @endif
                            </td>
                            <td id="score-show{{ $detail->id }}">
                                @if ($detail->answer_type !== \Constants::ANSWER_MC)
                                @if ($detail->score < 5) <div class="text-danger">
                                    {{ $detail->score }}
            </div>
            @elseif($detail->score >=8 )
            <div class="text-success">
                {{ $detail->score }}
            </div>
            @else
            <div class="text-warning">
                {{ $detail->score }}
            </div>
            @endif
            @else
            {{ $detail->score }}
            @endif
            </td>
            <td>
                @if ($detail->had_update)
                <a href="{{ route('site.exam.viewedExam', ['studentExam' => $detail->id]) }}">
                    <span class="badge badge-danger">Updated</span>
                </a>
                @endif
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
