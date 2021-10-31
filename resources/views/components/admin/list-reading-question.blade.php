<ul class="list-group" id="listQuestionReading_{{ $quiz->set }}">
    {{-- @dd($questions) --}}
    @foreach ($questions as $question)
    @if ($question->questionContent())
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-info"
        id="headingQuestion_{{ $question->id }}">
        <div class="w-75"  data-toggle="collapse"
        data-target="#collapseAnswerReading_{{ $question->id }}" aria-expanded="true"
        aria-controls="collapseAnswerReading_{{ $question->id }}">
            {{ $question->index }} - {{ $question->questionContent()->question }}
        </div>
        <div class="ml-auto w-25">
            <button class="btn btn-warning btn-sm m-1 w-100" data-toggle="modal"
                data-target="#modalReadingQuestion_{{ $question->id }}"> Update </button>
            <button class="btn btn-danger btn-sm  m-1 w-100"
            onclick="itemDelete('{{ route('admin.quiz.question.reading.destroy', [ 'quiz'=> $quiz->id, 'question' => $question->id]) }}')"
            > Delete </button>
        </div>

        <div class="modal fade" id="modalReadingQuestion_{{ $question->id }}" tabindex="0" role="dialog"
            aria-labelledby="modalReadingQuestion_{{ $question->id }}_Title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark">
                            Reading Question
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['methods' => 'put', 'url' => route('admin.quiz.question.reading.update', ['quiz' => $quiz->id, 'question' => $question->id]), 'id' => 'formReadingQuestion_{{ $question->id }}']) !!}
                        <div class="form-group">
                            <label for="index" class="required text-dark">Index</label>
                            {{ Form::number('index', $question->index, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            <label for="question" class="required text-dark">Question</label>
                            {{ Form::text('question', $question->questionContent()->question, ['class' => 'form-control', 'required']) }}
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
                $('#modalReadingQuestion_{{ $question->id }}').on('shown.bs.modal', function() {
                    var scrollPosition = window.pageYOffset;
                    localStorage.setItem("scrollPosition", scrollPosition);
                });
            });
        </script>

    </li>
    <div id="collapseAnswerReading_{{ $question->id }}" class="collapse"
        aria-labelledby="headingQuestion_{{ $question->id }}"
        data-parent="#listQuestionReading_{{ $quiz->set }}">
        <div class="card-body">
            <div class="d-flex">
                <button class="btn btn-success ml-auto btn-sm" data-toggle="modal"
                    data-target="#modalReadingAnswer{{ $question->id }}">
                    Add Answer
                </button>
            </div>
            <script type="application/javascript"> 
                function addAnswer_{{$question->id}}() {
                    var data = $('#formAnswerReading_{{$question->id}}').serializeArray()
                    console.log(data);
                    $.ajax({
                        type: "POST",
                        url: "{{ route('admin.reading.answer.store') }}",
                        data: data
                    }).done(function (data) {
                        if (data.message == 'Success') {
                            let answerHTML = `<li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="answer_${data.answer.id}" name="answer">
                                        <label class="form-check-label " for="answer_${data.answer.id}">${data.answer.answer}</label>
                                    </div>
                                    <a href="javascript:void(0)">
                                        <i class="fe fe-trash mr-2 text-danger"></i>
                                    </a>
                                </li>`;

                            document.getElementById('listAnswerOf_{{ $question->id }}').innerHTML += answerHTML;
                            $('#modalReadingAnswer{{ $question->id }}').modal('hide')
                        }
                        console.log(data);

                    })
                    .fail(function (err) {

                    })
                }
            </script>
            <!-- Modal -->
            <div class="modal fade" id="modalReadingAnswer{{ $question->id }}" tabindex="-1" aria-labelledby="modalReadingAnswer{{ $question->id }}Label"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Answer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formAnswerReading_{{$question->id}}">
                                @csrf
                                <input name="question_id" type="text" hidden value="{{ $question->questionContent()->id }}"/>
                                <label for="answer"> Answer </label>
                                <input type="text" name="answer" class="form-control" required>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button id="btnAddAnswer" onclick="addAnswer_{{$question->id}}()" type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <form>
                <ul class="list-group list-group-flush mt-3" id="listAnswerOf_{{ $question->id }}">
                    
                    @foreach ($question->questionContent()->answers as  $item)    
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="answer_{{$item->id}}" name="answer">
                                <label class="form-check-label " for="answer_{{$item->id}}">{{$item->answer}}</label>
                            </div>
                            
                            <a href="javascript:void(0)"
                                onclick="itemDelete('{{ route('admin.reading.answer.destroy', ['answer' => $item->id]) }}')">
                                <i class="fe fe-trash mr-2 text-danger"></i>
                            </a>
                        </li>
                        
                    @endforeach
                </ul>
                <button class="btn btn-success mt-2 mb-3 btn-sm">
                    Set Answer
                </button>
            </form>
        </div>
    </div>
    @endif
    @endforeach
</ul>


<script src="{{ asset('js/admin/delete_data_item.js') }}"></script>