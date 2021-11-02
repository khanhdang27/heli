@php
use App\Models\Examination;
@endphp

<div class="d-flex">
    <button type="button" class="btn btn-success ml-auto" data-toggle="modal"
        data-target="#modalReading_{{ $quiz->id }}"> Add
        Question </button>
    @if ($passage)
        <button type="button" class="btn btn-warning ml-3" data-toggle="modal"
            data-target="#updatePassage_{{ $quiz->id }}"> Update
            Passage </button>
    @else
        <button type="button" class="btn btn-success ml-3" data-toggle="modal"
            data-target="#addPassage_{{ $quiz->id }}"> Add
            Passage {{ $quiz->id }} </button>
    @endif
</div>

<div class="modal fade" id="modalReading_{{ $quiz->id }}" tabindex="0" role="dialog"
    aria-labelledby="modalReading_{{ $quiz->id }}_Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5 class="modal-title">
                    Reading Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6"  style="overflow-y: auto;">
                        @if ($passage)
                        <div style="overflow: auto; height: 500px">
                            <h3 class="text-dark">
                                {{ $passage->title }}
                            </h3>
                            <span class="text-dark">
                                {!! $passage->content !!}
                            </span>
                        </div>
                        @else 
                            <h3 class="text-danger">You not set up Passage</h3>
                        @endif
                    </div>
                    <div class="col-6">
                        {!! Form::open(['methods' => 'POST', 'url' => route('admin.quiz.question.reading.store', ['quiz' => $quiz->id])]) !!}
                        <div class="form-group">
                            <label for="passage_id"> Passage </label>
                            @if ($passage)
                                {{ Form::select('passage_id', [$passage->id => $passage->title], $passage->id, ['class' => 'form-control', 'required', 'readonly']) }}
                            @else
                                <h5 class="text-danger">
                                    please add Passage content for Reading part
                                </h5>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="index" class="required">Index</label>
                            {{ Form::number('index', old('index'), ['class' => 'form-control', 'required']) }}
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
    </div>
</div>

<div class="modal fade" id="addPassage_{{ $quiz->id }}" tabindex="0" role="dialog"
    aria-labelledby="addPassage_{{ $quiz->id }}_Title" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Reading Passage</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['methods' => 'POST', 'url' => route('admin.passage.store')]) !!}
                @csrf
                <input type="text" hidden id="quiz_id" name="quiz_id" value={{ $quiz->id }}>
                <label for="title" required> title </label>
                {{ Form::text('title', old('title'), ['class' => 'form-control', 'required']) }}
                <div class="form-group">
                    <label class="required" for="content"> Content</label>
                    {{ Form::textarea('content', old('content'), ['class' => 'form-control rich-text', 'required_', 'id' => 'ckeditor' . $quiz->id]) }}
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

@if ($passage)
    <div class="modal fade" id="updatePassage_{{ $quiz->id }}" tabindex="0" role="dialog"
        aria-labelledby="updatePassage_{{ $quiz->id }}_Title" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Reading Passage</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['methods' => 'PUT', 'url' => route('admin.passage.update', $passage->id)]) !!}
                    @csrf
                    <label for="title" required> title </label>
                    {{ Form::text('title', $passage->title, ['class' => 'form-control', 'required']) }}
                    <div class="form-group">
                        <label class="required" for="content"> Content</label>
                        {{ Form::textarea('content', $passage->content, ['class' => 'form-control rich-text', 'required', 'id' => 'ckeditor_update_' . $quiz->id]) }}
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
@endif
