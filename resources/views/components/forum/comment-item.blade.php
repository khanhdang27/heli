<div class="card container p-3">
    {!! Form::open(['url' => URL::route('site.comment.store',['type'=>'post', 'ref'=>0]),
                'enctype' => 'multipart/form-data', 'class' => 'form-inline justify-content-end']) !!}
    <div class="form-group w-75">
        {{ Form::label('detail', 'Image',['class'=>'sr-only']) }}
        {{ Form::textarea('detail',old('content'),
                         ['class' => 'form-control mr-sm-2 w-100',
                         'rows' => '1',
                         'placeholder'=>'Content']) }}
        @error('detail')
        <div class="alert text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="custom-file w-25">
        {{ Form::label('file','Photo',['class'=>'custom-file-label']) }}
        {{ Form::file('file',['class'=>' custom-file-input']) }}
        @error('file')
        <div class="alert text-danger">{{ $message }}</div>
        @enderror
    </div>
    {{ Form::text('ref_id',$refComment->id,['hidden'=>true]) }}
{{--    {{ Form::text('ref_module',$commentModule,['hidden'=>true]) }}--}}
    {{ Form::submit('Save', ['class'=>'btn btn-primary mt-2']) }}
    {!! Form::close() !!}
</div>
