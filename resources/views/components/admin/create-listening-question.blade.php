@php
use App\Models\Examination;
use App\Models\ListenAssessmentQuestion;

$audio_1 = $quiz->audioListen->where('part', 1)->first();
$audio_2 = $quiz->audioListen->where('part', 2)->first();

@endphp

<div class="d-flex mb-3">
    <button type="button" class="btn btn-success ml-auto" data-toggle="modal"
        data-target="#modalListening_{{ $quiz->id }}"> Add Question </button>
    @if (!empty($audio_1))
        <button type="button" class="btn btn-outline-warning ml-2" data-toggle="modal"
            data-target="#modalAudioUpdate_{{ $quiz->id }}" data-quiz="{{ $quiz->id }}"
            data-exam="{{ $quiz->exam_id }}" data-course="{{ $quiz->exams->course_id }}"
            data-audio="{{ asset(route('audio', $audio_1->audio_code)) }}"
            data-url="{{ route('admin.audio-listen.update', ['audioListen' => $audio_1->id]) }}" data-part="1"> Update
            Audio
            Part 1
        </button>
    @else
        <button type="button" class="btn btn-outline-success ml-2" data-toggle="modal"
            data-target="#modalAudio_{{ $quiz->id }}" data-quiz="{{ $quiz->id }}"
            data-exam="{{ $quiz->exam_id }}" data-course="{{ $quiz->exams->course_id }}" data-part="1"> Add Audio
            Part 1 </button>
    @endif
    @if (!empty($audio_2))
        <button type="button" class="btn btn-outline-warning ml-2" data-toggle="modal"
            data-target="#modalAudioUpdate_{{ $quiz->id }}" data-quiz="{{ $quiz->id }}"
            data-exam="{{ $quiz->exam_id }}" data-course="{{ $quiz->exams->course_id }}"
            data-audio="{{ asset(route('audio', $audio_2->audio_code)) }}"
            data-url="{{ route('admin.audio-listen.update', ['audioListen' => $audio_2->id]) }}" data-part="2">
            Update Audio
            Part 2
        </button>
    @else
        <button type="button" class="btn btn-outline-success ml-2" data-toggle="modal"
            data-target="#modalAudio_{{ $quiz->id }}" data-quiz="{{ $quiz->id }}"
            data-exam="{{ $quiz->exam_id }}" data-course="{{ $quiz->exams->course_id }}" data-part="2"> Add Audio
            Part 2 </button>
    @endif


</div>

<div class="modal fade" id="modalListening_{{ $quiz->id }}" tabindex="0" role="dialog"
    aria-labelledby="modalListening_{{ $quiz->id }}_Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Listening Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method' => 'POST', 'url' => route('admin.quiz.question.listening.assessment.store', ['quiz' => $quiz->id])]) !!}
                <div class="form-group">
                    <label for="index" class="required">Index</label>
                    {{ Form::number('index', old('index'), ['class' => 'form-control', 'required']) }}
                </div>
                <div class="form-group">
                    <label for="part" class="required">Part</label>
                    {{                     Form::select('part', Constants::QUESTION_PARTS, old('part'), ['class' => 'form-control', 'required']) }}
                </div>
                <div class="form-group">
                    <label for="question" class="required">Question</label>
                    {{ Form::text('question', old('question'), ['class' => 'form-control', 'required']) }}
                </div>
                <div class="form-group">
                    <label for="message_wrong" class="required">Message Wrong</label>
                    {{ Form::text('message_wrong', old('message_wrong'), ['class' => 'form-control', 'required']) }}
                </div>
                <div class="form-group">
                    <label for="lecture_index" class="required">Lecture Index</label>
                    {{ Form::text('lecture_index', old('lecture_index'), ['class' => 'form-control', 'required']) }}
                </div>
                <div class="d-flex">
                    <button type="button" class="btn btn-secondary ml-auto" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ml-1">Save</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalAudioUpdate_{{ $quiz->id }}" tabindex="0" role="dialog"
    aria-labelledby="modalAudio_Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Listening Audio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method' => 'PUT', 'enctype' => 'multipart/form-data', 'id' => 'audio-listen-update' . $quiz->id]) !!}
                @csrf
                <input type="text" hidden id="quiz_update{{ $quiz->id }}" name="quiz">
                <input type="text" hidden id="exam_update{{ $quiz->id }}" name="exam">
                <input type="text" hidden id="course_update{{ $quiz->id }}" name="course">
                <audio id="audio{{ $quiz->id }}" controls>
                    <source src="" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <div class="form-group">
                    <label for="part" class="required">Part</label>
                    {{                     Form::text('part', old('part'), ['class' => 'form-control', 'required', 'readonly', 'id' => 'part_audio_update' . $quiz->id]) }}
                </div>

                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile_update{{ $quiz->id }}" name="audio"
                        accept="audio/*">
                    <label class="custom-file-label" for="customFile_update{{ $quiz->id }}">Choose file</label>
                </div>

                <div class="d-flex mt-3">
                    <button type="button" class="btn btn-secondary ml-auto" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ml-1">Save</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalAudio_{{ $quiz->id }}" tabindex="0" role="dialog"
    aria-labelledby="modalAudio_Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Listening Audio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['methods' => 'POST', 'url' => route('admin.audio-listen.store'), 'enctype' => 'multipart/form-data']) !!}
                @csrf
                <input type="text" hidden id="quiz{{ $quiz->id }}" name="quiz">
                <input type="text" hidden id="exam{{ $quiz->id }}" name="exam">
                <input type="text" hidden id="course{{ $quiz->id }}" name="course">
                <div class="form-group">
                    <label for="part" class="required">Part</label>
                    {{                     Form::text('part', old('part'), ['class' => 'form-control', 'required', 'readonly', 'id' => 'part_audio' . $quiz->id]) }}
                </div>

                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile{{ $quiz->id }}" name="audio"
                        accept="audio/*">
                    <label class="custom-file-label" for="customFile{{ $quiz->id }}">Choose file</label>
                </div>

                <div class="d-flex mt-3">
                    <button type="button" class="btn btn-secondary ml-auto" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ml-1">Save</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


<script type="application/javascript">
    // Add the following code if you want the name of the file appear on select
    $("#customFile{{ $quiz->id }}").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $("#customFile_update{{ $quiz->id }}").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $(document).ready(function() {

        $('#modalAudio_{{ $quiz->id }}').on('shown.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            // data-quiz="{{ $quiz->id }}" data-part="1"
            var quiz = button.data('quiz');
            var part = button.data('part');
            var exam = button.data('exam');
            var course = button.data('course');
            document.getElementById('part_audio{{ $quiz->id }}').value = part;
            document.getElementById('quiz{{ $quiz->id }}').value = quiz;
            document.getElementById('exam{{ $quiz->id }}').value = exam;
            document.getElementById('course{{ $quiz->id }}').value = course;
        })

        $('#modalAudioUpdate_{{ $quiz->id }}').on('shown.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var quiz = button.data('quiz');
            var part = button.data('part');
            var exam = button.data('exam');
            var course = button.data('course');
            var audio = button.data('audio');
            var url = button.data('url');
            document.getElementById('part_audio_update{{ $quiz->id }}').value = part;
            document.getElementById('quiz_update{{ $quiz->id }}').value = quiz;
            document.getElementById('exam_update{{ $quiz->id }}').value = exam;
            document.getElementById('course_update{{ $quiz->id }}').value = course;
            document.getElementById('audio{{ $quiz->id }}').src = audio;

            let fmt = document.getElementById('audio-listen-udate{{ $quiz->id }}');
            console.log(fmt);
            fmt.action = url;
        })
    })
</script>
