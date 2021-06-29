<div class="card container p-3">

    @if($commentModule == App\Models\Course::class)
        <div class="d-flex flex-wrap justify-content-end align-items-center">
            <h4 class="text-primary mb-0 mr-5">@lang('keywords.rate.rateCourse'):</h4>
            <x-rating.rating></x-rating.rating>
        </div>
        <h5 class="text-primary">
            @lang('keywords.rate.addReview')
        </h5>
    @else
        <h5 class="text-primary">
            @lang('keywords.forum.addAnswer')
        </h5>
    @endif
    {!! Form::open(['url' => URL::route('site.comment.store',['type'=>'post', 'ref'=>0]),
                'enctype' => 'multipart/form-data', 'class' => 'form-inline justify-content-end']) !!}
    <div class="form-group w-50">
        {{ Form::label('detail', 'Image',['class'=>'sr-only']) }}
        {{ Form::textarea('detail',old('content'),
                         ['class' => 'form-control mr-sm-2 w-100',
                         'rows' => '1',
                         'placeholder'=>'Content']) }}
        @error('detail')
        <div class="alert text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group w-25">
        <div class="custom-file ">
            {{ Form::label('file','Photo',['class'=>'custom-file-label']) }}
            {{ Form::file('file',['class'=>' custom-file-input']) }}
            @error('file')
            <div class="alert text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    {{ Form::text('ref_id',$refComment->id,['hidden'=>true]) }}
    {{ Form::text('ref_module',$commentModule,['hidden'=>true]) }}
    <div class="form-group w-25">
        {{ Form::submit('Save', ['class'=>'btn btn-primary ml-auto']) }}
    </div>
    {!! Form::close() !!}
</div>
