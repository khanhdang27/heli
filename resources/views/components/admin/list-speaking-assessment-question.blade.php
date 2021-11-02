<ul class="list-group" id="listQuestionSpeakingAssessment_{{ $quiz->set }}">   
    
    @foreach ($questions as $question)
    @if ($question->questionContent())
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-info selectable"
        id="headingQuestion_{{ $question->id }}">
        <div class="w-75" data-toggle="collapse"
            data-target="#collapseAnswerSpeakingAssessment__{{ $question->id }}" aria-expanded="true"
            aria-controls="collapseAnswerSpeakingAssessment__{{ $question->id }}">
            {{ $question->index }} - {{ $question->questionContent()->question }}
        </div>
        <div class="ml-auto w-25">
            <button class="btn btn-warning btn-sm m-1 w-100" data-toggle="modal"
                data-target="#modalSpeakingAssessmentQuestion{{ $question->id }}"> Update </button>
            <button class="btn btn-danger btn-sm  m-1 w-100"
            onclick="itemDelete('{{ route('admin.quiz.question.speaking.assessment.destroy', [ 'quiz'=> $quiz->id, 'question' => $question->id]) }}')"
            > Delete </button>
        </div>

        <div class="modal fade" id="modalSpeakingAssessmentQuestion{{ $question->id }}" tabindex="0" role="dialog"
            aria-labelledby="modalSpeakingAssessmentQuestion{{ $question->id }}_Title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark">
                            Listen Question
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['methods' => 'put', 'url' => route('admin.quiz.question.speaking.assessment.update', ['quiz' => $quiz->id, 'question' => $question->id]), 'id' => 'formReadingQuestion_{{ $question->id }}']) !!}
                        <div class="form-group">
                            <label for="index" class="required text-dark">Index</label>
                            {{ Form::number('index', $question->index, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            <label for="question" class="required text-dark">Question</label>
                            {{ Form::text('question', $question->questionContent()->question, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            <label for="audio_ref" class="required text-dark">Audio</label>
                            {{ Form::text('audio_ref', $question->questionContent()->audio_ref, ['class' => 'form-control', 'required']) }}
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
            </li>
    <div id="collapseAnswerSpeakingAssessment__{{ $question->id }}" class="collapse"
        aria-labelledby="headingQuestion_{{ $question->id }}"
        data-parent="#listQuestionSpeakingAssessment_{{ $quiz->set }}">
        <div class="card-body">
            <div class="d-flex">
                <button class="btn btn-success ml-auto btn-sm" data-toggle="modal"
                    data-target="#modalSpeakingAssessmentAnswer{{ $question->id }}">
                    Add Answer
                </button>
            </div>
            <script type="application/javascript"> 
                function addAnswer_{{$question->id}}() {
                    var data = $('#formAnswerReading_{{$question->id}}').serializeArray()
                    console.log(data);
                    $.ajax({
                        type: "POST",
                        url: "{{ route('admin.speaking.assessment.answer.store') }}",
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
                            $('#modalSpeakingAssessmentAnswer{{ $question->id }}').modal('hide')
                        }
                        console.log(data);

                    })
                    .fail(function (err) {

                    })
                }
            </script>
            <!-- Modal -->
            <div class="modal fade" id="modalSpeakingAssessmentAnswer{{ $question->id }}" tabindex="-1" aria-labelledby="modalSpeakingAssessmentAnswer{{ $question->id }}Label"
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
            {!! Form::open([ 'url' => route("admin.quiz.question.speaking.assessment.setAnswerTrue", ['quiz' => $quiz->id, 'question' => $question->questionContent()->id]), 'method'=>"PUT"]) !!}
                <ul class="list-group list-group-flush mt-3" id="listAnswerOf_{{ $question->id }}">
                    @foreach ($question->questionContent()->answers as  $item)    
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="answer_{{$item->id}}" name="answer" value="{{$item->id}}" {{ $item->is_correct == 1 ? 'checked=true' : ''}}>
                                <label class="form-check-label " for="answer_{{$item->id}}">{{$item->answer}}</label>
                            </div>
                            
                            <a href="javascript:void(0)"
                                onclick="itemDelete('{{ route('admin.speaking.assessment.answer.destroy', ['answer' => $item->id]) }}')">
                                <i class="fe fe-trash mr-2 text-danger"></i>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <button class="btn btn-success mt-2 mb-3 btn-sm">
                    Set Answer
                </button>
            {!! Form::close() !!}
        </div>
    </div>
    @endif
    @endforeach
</ul>


<script src="{{ asset('js/admin/delete_data_item.js') }}"></script>