<div class="card text-primary mb-5">
    <div class="card-header">
        <h5 class="font-weight-bold mb-0">Examination</h5>
    </div>
    <div class="card-body">
        @foreach($courseDetail->membershipCourses->course->examinations as $item)
            @php
                $submit = $item->submitExams;
                $submitItem = $submit->filter(function($query) {
                    return $query->student_id == Auth::user()->id;
                })->first();
            @endphp
            <div class="border-bottom">
                <div class="d-flex justify-content-between flex-wrap">
                    <p>
                        {{$item->title}} (deadline: {{$item->deadline}})
                    </p>
                    @if(empty($submitItem))
                        <a href="#" data-toggle="modal"
                           data-target="#modalUploadAvatar">Submit</a>
                    @endif
                    <a href="{{ route('site.file.download', $item->file) }}">Download</a>
                    <div class="modal fade" id="modalUploadAvatar" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Submit
                                        examination</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {!! Form::open(['url' => URL::route('site.submit-examination'),
                                                                    'enctype' => 'multipart/form-data',
                                                                    'id' => 'submitExam_'.$item->id
                                                                    ]) !!}
                                <div class="modal-body">
                                    <div class="form-group">
                                        {{ Form::text('examination_id', $item->id, ['class' => 'form-control', 'hidden' => true]) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('title','Title') }}
                                        {{ Form::text('title',old('title'), ['class' => 'form-control']) }}
                                    </div>
                                    @error('title')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        {{ Form::label('description','Description') }}
                                        {{ Form::textarea('description',old('description'), 
                                            [
                                                'class' => 'form-control',
                                                'rows' => '3'
                                            ]) }}
                                    </div>
                                    @error('description')
                                        <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                    <p>Your exam</p>
                                    <div class="d-flex">
                                        <div class="custom-file ">
                                            {{ Form::label('file','File',['class'=>'custom-file-label']) }}
                                            {{ Form::file('file',['class'=>' custom-file-input']) }}
                                        </div>
                                        @error('file')
                                            <div class="alert text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    {{ Form::submit('Save', ['class'=>'btn btn-primary ml-auto',
                                                             'form' => 'submitExam_'.$item->id]) }}
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <ul>
                    @if(!empty($submitItem))
                        <li>
                            <div class="d-flex justify-content-between">
                                {{ $submitItem->title }} - {{ $submitItem->description }}
                                <a href="{{route('site.unsubmit-examination',$submitItem->id)}}" class="font-weight-bold">Cancel</a>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        @endforeach
    </div>
</div>