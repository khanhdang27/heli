<ul class="list-group" id="listQuestionReading_{{ $quiz->set }}">
    @foreach ($questions as $question)
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-info"
            id="headingQuestion_{{ $question->id }}" data-toggle="collapse"
            data-target="#collapseAnswerReading_{{ $question->id }}" aria-expanded="true"
            aria-controls="collapseAnswerReading_{{ $question->id }}">
            <div>
                {{ $question->index }} - {{ $question->questionContent()->question }}
            </div>
            <div class="ml-auto w-25">
                <button class="btn btn-warning btn-sm m-1 w-100" data-toggle="modal"
                    data-target="#modalReadingQuestion_{{ $question->id }}"> Update </button>
                <button class="btn btn-danger btn-sm  m-1 w-100"> Delete </button>
            </div>

            <div class="modal fade" id="modalReadingQuestion_{{ $question->id }}" tabindex="0" role="dialog"
                aria-labelledby="modalReadingQuestion_{{ $question->id }}_Title" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                Reading Question
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {!! Form::open(['methods' => 'put', 'url' => route('admin.quiz.question.reading.update', ['quiz' => $quiz->id, 'question' => $question->id])]) !!}
                            <div class="form-group">
                                <label for="index" class="required">Index</label>
                                {{ Form::number('index', $question->index, ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group">
                                <label for="question" class="required">Question</label>
                                {{ Form::text('question', $question->questionContent()->question, ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group">
                                <label for="message_wrong" class="required">Message Wrong</label>
                                {{ Form::text('message_wrong', $question->questionContent()->message_wrong, ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group">
                                <label for="lecture_index" class="required">Lecture Index</label>
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
        </li>
        <div id="collapseAnswerReading_{{ $question->id }}" class="collapse"
            aria-labelledby="headingQuestion_{{ $question->id }}"
            data-parent="#listQuestionReading_{{ $quiz->set }}">
            <div class="card-body">
                <div class="d-flex">
                    <button class="btn btn-success ml-auto btn-sm">
                        Add Answer
                    </button>
                </div>
                <form>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="answer_1" name="answer">
                                <label class="form-check-label " for="answer_1">An item</label>
                            </div>
                            <a href="javascript:void(0)">
                                <i class="fe fe-trash mr-2 text-danger"></i>
                            </a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="answer_1" name="answer">
                                <label class="form-check-label " for="answer_1">An item</label>
                            </div>
                            <a href="javascript:void(0)">
                                <i class="fe fe-trash mr-2 text-danger"></i>
                            </a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="answer_1" name="answer">
                                <label class="form-check-label " for="answer_1">An item</label>
                            </div>
                            <a href="javascript:void(0)">
                                <i class="fe fe-trash mr-2 text-danger"></i>
                            </a>
                        </li>
                    </ul>
                    <button class="btn btn-success mt-2 mb-3 btn-sm">
                        Set Answer
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</ul>
