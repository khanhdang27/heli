@php
use App\Models\WritingQuizQuestion;
@endphp

<ul class="list-group" id="listQuestionWriting_{{ $quiz->set }}">
    {{-- @dd($questions) --}}
    @foreach ($questions as $question)
        @if ($question->questionContent())
            <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-info selectable"
                id="headingQuestion_{{ $question->id }}">
                <div class="w-75 py-5" data-toggle="collapse"
                    data-target="#collapseAnswerWritingQuiz_{{ $question->id }}" aria-expanded="true"
                    aria-controls="collapseAnswerWritingQuiz_{{ $question->id }}">
                    {{ $question->index }} - {{ $question->questionContent()->question }}
                </div>
                <div class="ml-auto w-25">
                    <button class="btn btn-warning btn-sm m-1 w-100" data-toggle="modal"
                        data-target="#modalWritingQuizQuestion_{{ $question->id }}"> Update </button>
                    <button class="btn btn-danger btn-sm  m-1 w-100"
                        onclick="itemDelete('{{ route('admin.quiz.question.writing.quiz.destroy', ['quiz' => $quiz->id, 'question' => $question->id]) }}')">
                        Delete </button>
                </div>

                <div class="modal fade" id="modalWritingQuizQuestion_{{ $question->id }}" tabindex="0"
                    role="dialog" aria-labelledby="modalWritingQuizQuestion_{{ $question->id }}_Title"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable  modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark">
                                    Writing Question
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['methods' => 'put', 'url' => route('admin.quiz.question.writing.quiz.update', ['quiz' => $quiz->id, 'question' => $question->id]), 'id' => 'formReadingQuestion_{{ $question->id }}', 'enctype' => 'multipart/form-data']) !!}
                                <div class="form-group">
                                    <label for="index" class="required text-dark">Index</label>
                                    {{ Form::number('index', $question->index, ['class' => 'form-control', 'required']) }}
                                </div>
                                <div class="form-group">
                                    <label for="part" class="required text-dark">Part</label>
                                    {{ Form::select('part', Constants::QUESTION_PARTS, $question->questionContent()->part, ['class' => 'form-control', 'required', 'id' => 'part_update{{ $quiz->id }}']) }}
                                </div>
                                <div class="form-group">
                                    <label for="question" class="required text-dark">Question</label>
                                    {{ Form::text('question', $question->questionContent()->question, ['class' => 'form-control', 'required']) }}
                                </div>
                                <div id="pickFile_update{{ $quiz->id }}">
                                    @if ($question->questionContent()->file)
                                        <div id="preview_file_already" class="mb-4">
                                            <img src="{{ asset('/file/' . $question->questionContent()->file->id) }}"
                                                width=100% />
                                        </div>
                                    @endif
                                    <div class="custom-file">
                                        <label for="photo" class="custom-file-label">Photo</label>
                                        <input type="file" name="photo" id="photo"
                                            class="form-control custom-file-input " , accept="image/*">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message_wrong" class="required text-dark">Message Wrong</label>
                                    {{ Form::text('message_wrong', $question->questionContent()->message_wrong, ['class' => 'form-control', 'required']) }}
                                </div>
                                <div class="form-group">
                                    <label for="lecture_index" class="required text-dark">Lecture Index</label>
                                    {{ Form::text('lecture_index', $question->questionContent()->lecture_index, ['class' => 'form-control', 'required']) }}
                                </div>
                                <div class="d-flex">
                                    <button type="button" class="btn btn-secondary ml-auto"
                                        data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary ml-1">Save</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>

                <script type="application/javascript">
                    $(document).ready(function() {
                        $('#modalWritingQuizQuestion_{{ $question->id }}').on('shown.bs.modal', function() {

                            let partElement = document.getElementById("part_update{{ $quiz->id }}");
                            let fileElement = document.getElementById("pickFile_update{{ $quiz->id }}");

                            if (partElement.value == 1) {
                                fileElement.style.visibility = 'visible';
                            } else {
                                fileElement.style.visibility = 'hidden';
                            }
                            partElement.addEventListener('change', (event) => {
                                console.log(event.target.value);
                                if (event.target.value == 1) {
                                    fileElement.style.visibility = 'visible';
                                } else {
                                    fileElement.style.visibility = 'hidden';
                                }
                            });
                        });
                    });
                </script>

            </li>
            @push('inputFile')
                <script type="application/javascript">
                    // Add the following code if you want the name of the file appear on select
                    $(".custom-file-input").on("change", function() {
                        var fileName = $(this).val().split("\\").pop();
                        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                    });
                </script>
            @endpush

        @endif
    @endforeach
</ul>


<script src="{{ asset('js/admin/delete_data_item.js') }}"></script>
