@php
    use App\Models\Examination;
    use App\Models\StudentExamination;
    use App\Models\Quiz;
    use App\Models\Question;
    use App\Models\WritingQuizQuestion;
    use App\Models\ListenAssessmentQuestion
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
                            <span class="font-weight-bold">Exam type: </span>{{ Examination::TYPES[$exam_details[0]->exam->type] }}
                        </h5>
                        <h5>
                            @if($exam_details[0]->exam->type != Examination::ASSESSMENT)
                                Set: {{ Quiz::SET_LIST[$exam_details[0]->quiz->set] }}
                            @endif
                        </h5>
                    </div>
                    <div class="col-md-6">
                        <h3 class="font-weight-bold">Time For Process</h3>
                        <h5>Reading: {{$reading}} (s)</h5>
                        <h5>Writing: {{ $writing }} (s)</h5>
                        <h5>Listening: {{$listening}} (s)</h5>
                        <h5>Speaking: {{$speaking}} (s)</h5>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table mt-3">
                        <tr>
                            <th class="c-40">Question</th>
                            <th class="c-10 text-center">Time</th>
                            <th class="c-20">Answer</th>
                            <th class="c-10">Correct</th>
                            <th class="c-10">Score</th>
                        </tr>
                        <tbody>
                        @foreach ($exam_details as $detail)
                            <tr>
                                <td class="c-40">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-truncate" style="max-width: 200px">
                                            {{$detail->question->questionContent()->question}}
                                        </p>
                                        <a class="text-success text-nowrap" type="button" data-toggle="modal"
                                           data-target="#viewDetailsQuestion_{{$detail->question->id}}">
                                            View <i class="fe fe-eye"></i>
                                        </a>
                                    </div>

                                    <!-- Modal question details-->
                                    <div class="modal fade" id="viewDetailsQuestion_{{$detail->question->id}}"
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
                                                        <h5>{{$detail->question->questionContent()->question}}</h5>
                                                    </div>
                                                    <hr/>
                                                    <div class="p-3">
                                                        @if($detail->question->type == Question::READING)
                                                            <h4 class="font-weight-bold mr-2">Passage:</h4>
                                                            {!! $detail->quiz->passage->content !!}
                                                        @elseif($detail->question->type == \App\Models\Question::LISTENING)
                                                            <h4 class="font-weight-bold">
                                                                Audio {{$detail->question->questionContent()->part}}</h4>
                                                            @if($detail->question->type == Question::LISTENING
                                                            && $detail->quiz->audioListen)
                                                                @php
                                                                    $audio_1 = $detail->quiz->audioListen
                                                                    ->where('part', ListenAssessmentQuestion::PART_1)->first();
                                                                    $audio_2 = $detail->quiz->audioListen
                                                                    ->where('part', ListenAssessmentQuestion::PART_2)->first();
                                                                @endphp
                                                                @if($detail->question->questionContent()->part == ListenAssessmentQuestion::PART_1
                                                                    && !empty($audio_1))
                                                                    <embed id="audio" type="text/html" height="30" width="100%"
                                                                           src="{{ asset(route('audio',$audio_1->audio_code)) }}"
                                                                    >
                                                                @elseif(!empty($audio_2))
                                                                    <embed id="audio" type="text/html" height="30" width="100%"
                                                                           src="{{ asset(route('audio',$audio_2->audio_code)) }}"
                                                                    >
                                                                @endif
                                                            @endif
                                                        @elseif($detail->question->type == Question::SPEAKING)
                                                            @if($detail->exam->type == Examination::EXERCISES
                                                                && !empty($detail->question->questionContent()->video_code))
                                                                <vimeo-player
                                                                    class="embed-responsive embed-responsive-16by9"
                                                                    ref="player"
                                                                    :video-id="{{$detail->question->questionContent()->video_code}}">
                                                                </vimeo-player>
                                                            @endif
                                                        @else
                                                            @if($detail->exam->type == Examination::QUIZ)
                                                                @if($detail->question->questionContent()->part == WritingQuizQuestion::PART_1
                                                                    && !empty($detail->question->questionContent()->file))
                                                                    <img
                                                                        src="{{ asset('/file/' . $detail->question->questionContent()->file->id) }}"
                                                                        alt="" width="100%">
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
                                <td class="c-10 text-center">
                                    {{$detail->time}}
                                </td>
                                <td class="c-20">
                                    <div class="d-flex justify-content-between">
                                        @if ($detail->answer_type === StudentExamination::ANSWER_MC)
                                            <p class="text-truncate" style="max-width: 200px">
                                                {{$detail->question->questionContent()->findAnswerById($detail->answer)->answer}}
                                            </p>
                                        @endif
                                        <a type="button" class="text-success text-nowrap" data-toggle="modal"
                                           data-target="#viewDetailsAnswer_{{$detail->question->id}}">
                                            View <i class="fe fe-eye"></i>
                                        </a>
                                    </div>
                                    <!-- Modal answer details-->
                                    <div class="modal fade" id="viewDetailsAnswer_{{$detail->question->id}}"
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
                                                        @if ($detail->answer_type === StudentExamination::ANSWER_MC)
                                                            {{$detail->question->questionContent()->findAnswerById($detail->answer)->answer}}
                                                        @elseif ($detail->answer_type === StudentExamination::ANSWER_TEXT)
                                                            <h5>{{$detail->answer}}</h5>
                                                        @else
                                                            @if(!empty($detail->answer))
                                                            <vimeo-player
                                                                class="embed-responsive embed-responsive-16by9"
                                                                ref="player"
                                                                :video-id="{{$detail->answer}}">
                                                            </vimeo-player>
                                                            @endif
                                                        @endif

                                                    </div>
                                                    <div class="col-md-6">
                                                        <h4 class="font-weight-bold">Score: {{$detail->score}}</h4>
                                                        <hr/>
                                                        <h4 class="font-weight-bold">Comment:</h4>
                                                        <h5>{{ $detail->comment }}</h5>
                                                    </div>
                                                </div>
                                                <div class="modal-footer border-0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="c-10">
                                    @if ($detail->answer_type === StudentExamination::ANSWER_MC)
                                        @if($detail->question->questionContent()->findAnswerById($detail->answer)->is_correct)
                                            <i class="fe fe-check text-success h3"></i>
                                        @else
                                            <i class="fe fe-x text-danger h3"></i>
                                        @endif
                                    @endif
                                </td>
                                <td id="score-show{{$detail->id}}" class="c-10">
                                    {{$detail->score}}
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
