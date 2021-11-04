@php
use App\Models\Examination;
use App\Models\ListenAssessmentQuestion;
@endphp

<div class="d-flex">
    <button type="button" class="btn btn-success ml-auto" data-toggle="modal"
        data-target="#modalSpeakingAssessment_{{ $quiz->id }}"> Add
        Question </button>
</div>

<div class="modal fade" id="modalSpeakingAssessment_{{ $quiz->id }}" tabindex="0" role="dialog"
    aria-labelledby="modalSpeakingAssessment_{{ $quiz->id }}_Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5 class="modal-title">
                    Speaking Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['methods' => 'POST', 
                        'url' => route('admin.quiz.question.speaking.assessment.store', ['quiz' => $quiz->id]), 
                        'enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                    <label for="index" class="required">Index</label>
                    {{ Form::number('index', old('index'), ['class' => 'form-control', 'required']) }}
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="audioSpeakingAssessment" name="audio" accept=".mp3">
                    <label class="custom-file-label" for="audioSpeakingAssessment">Choose file</label>
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

<script type="application/javascript">
    $("#audioSpeakingAssessment").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>