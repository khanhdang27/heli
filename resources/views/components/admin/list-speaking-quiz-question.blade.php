<ul class="list-group" id="listQuestionSpeakingQuiz_{{ $quiz->set }}">
    @foreach ($questions as $question)
    @if ($question->questionContent())
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-info"
        id="headingQuestion_{{ $question->id }}">
        <div class="w-75" data-toggle="collapse"
        data-target="#collapseAnswerSpeakingQuiz_{{ $question->id }}" aria-expanded="true"
        aria-controls="collapseAnswerSpeakingQuiz_{{ $question->id }}">
            {{ $question->index }} - {{ $question->questionContent()->question }}
        </div>
        <div class="ml-auto w-25">
            <button class="btn btn-warning btn-sm m-1 w-100" data-toggle="modal"
                data-target="#modalSpeakingQuizQuestion_{{ $question->id }}"> Update </button>
            <button class="btn btn-danger btn-sm  m-1 w-100"
            onclick="itemDelete('{{ route('admin.quiz.question.speaking.quiz.destroy', [ 'quiz'=> $quiz->id, 'question' => $question->id]) }}')"
            > Delete </button>
        </div>

        <div class="modal fade" id="modalSpeakingQuizQuestion_{{ $question->id }}" tabindex="0" role="dialog"
            aria-labelledby="modalSpeakingQuizQuestion_{{ $question->id }}_Title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark">
                            Speaking Question
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['methods' => 'put', 'url' => route('admin.quiz.question.speaking.quiz.update', ['quiz' => $quiz->id, 'question' => $question->id]), 'id' => 'formReadingQuestion_{{ $question->id }}']) !!}
                        
                        <div class="form-group">
                            <label for="index" class="required text-dark">Index</label>
                            {{ Form::number('index', $question->index, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            <label for="question" class="required text-dark">Question</label>
                            {{ Form::textarea('question', $question->questionContent()->question, ['class' => 'form-control', 'required']) }}
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
                if (localStorage.scrollPosition) {
                    let pos = localStorage.getItem("scrollPosition")
                    window.scrollTo(0, pos);
                }
                $('#modalSpeakingQuizQuestion_{{ $question->id }}').on('shown.bs.modal', function() {
                    var scrollPosition = window.pageYOffset;
                    localStorage.setItem("scrollPosition", scrollPosition);
                });
            });
        </script>
    </li>
        @endif
    @endforeach
</ul>


<script src="{{ asset('js/admin/delete_data_item.js') }}"></script>