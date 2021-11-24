@php
use App\Models\Examination;
use App\Models\WritingQuizQuestion;
@endphp

<div class="d-flex">
    <button type="button" class="btn btn-success ml-auto" data-toggle="modal"
        data-target="#modalWritingQuiz_{{ $quiz->id }}"> Add
        Question </button>
</div>

<div class="modal fade" id="modalWritingQuiz_{{ $quiz->id }}" tabindex="0" role="dialog"
    aria-labelledby="modalWritingQuiz_{{ $quiz->id }}_Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Writing Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open([
                'methods' => 'POST',
                'url' => route('admin.quiz.question.writing.quiz.store', ['quiz' => $quiz->id]),
                'enctype' => 'multipart/form-data'
                ]) !!}
                <div class="form-group">
                    <label for="index" class="required">Index</label>
                    {{ Form::number('index', old('index'), ['class' => 'form-control', 'required']) }}
                </div>
                <div class="form-group">
                    <label for="part" class="required">Part</label>
                    {{ Form::select('part', \Constants::QUESTION_PARTS, old('part'), ['class' => 'form-control',
                    'required', 'id'=> 'part'.$quiz->id]) }}
                </div>
                <div class="form-group">
                    <label for="question" class="required">Question</label>
                    {{ Form::textarea('question', old('question'), ['class' => 'form-control', 'required']) }}
                </div>
                <div class="custom-file" id="pickFile{{ $quiz->id }}">
                    <label for="photo" class="custom-file-label">Photo</label>
                    <input type="file" name="photo" id="photo{{ $quiz->id }}" class="form-control custom-file-input " ,
                        accept="image/*">
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


<script type="text/javascript">
    $(document).ready(function () {
        $('#modalWritingQuiz_{{ $quiz->id }}').on('shown.bs.modal', function (event) {
            let partElement = document.getElementById("part{{ $quiz->id }}");
            let fileElement = document.getElementById("pickFile{{ $quiz->id }}");

            partElement.addEventListener('change', (event) => {
                if (event.target.value == 1) {
                    fileElement.style.visibility = 'visible';
                } else {
                    fileElement.style.visibility = 'hidden';
                }
            });
        })
    })
</script>


@push('inputFile')
<script type="application/javascript">
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
@endpush
