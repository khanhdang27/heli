@extends('admin.layout')
@section('content')
    <!-- CARDS -->
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="pr-2">
                                <a href="{{ route('admin.course.question.list', ['course' => $course->id, 'exam' => $exam, 'quiz' => $quiz]) }}"
                                    class="btn btn-outline-dark btn-sm">
                                    <i class="fe fe-arrow-left"></i>
                                </a>
                            </div>
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Question and Answers
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="border rounded p-4 mt-3">
                                <h3>Question</h3>
                                <hr>
                                <span>
                                    {{ $question->question }}
                                </span>
                            </div>
                            <div class="border rounded p-4 mt-3">
                                <h5>Message Recommend </h5>
                                <hr>
                                <span>
                                    {{ $question->message_wrong }}
                                </span>
                                <br>
                                <br>
                                <h5>Lecture Recommend</h5>
                                <hr>
                                <span>
                                    {{ $question->lecture_index }}
                                </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4>Add More Answer</h4>
                            <form class="from-inline border rounded p-4 mt-3" method="POST"
                                action="{{ route('admin.answer.store', ['question' => $question->id]) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-9 form-group">
                                        <input class="form-control" type="text" name="answer">
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-success">Add Answer</button>
                                    </div>
                                </div>
                            </form>
                            <br>
                            <h4>Answers List</h4>
                            <form class="border rounded p-4 mt-3" action="{{ route('admin.answer.update', $question) }}"
                                method="POST">
                                @csrf
                                @foreach ($answers as $answer)
                                    <div class="border rounded p-2 mt-1 d-flex">
                                        <a href="javascript:void(0)"
                                            onclick="itemDelete('{{ route('admin.answer.destroy', ['question' => $question->id, 'answer' => $answer->id]) }}')">
                                            <i class="fe fe-trash mr-2 text-danger"></i>
                                        </a>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="answer_{{ $answer->id }}"
                                                name="answer" value="{{ $answer->id }}"
                                                {{ $answer->is_correct ? 'checked' : '' }}>
                                            <label
                                                class="form-check-label  {{ $answer->is_correct ? 'text-primary' : '' }}"
                                                for="answer_{{ $answer->id }}">{{ $answer->answer }}</label>
                                        </div>
                                    </div>
                                @endforeach
                                <button type="submit" class="btn btn-primary mt-2">Save Answer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
    </div>
@endsection
@push('js')
    <script src="{{ asset('js/admin/delete_data_item.js') }}"></script>
@endpush
