<div class="card container p-3">
    @if($commentModule == App\Models\Course::class)
    <div class="d-flex flex-wrap justify-content-end align-items-center mb-3">
        <h5 class="text-primary mb-0 mr-5">@lang('keywords.rate.rateCourse'):</h5>
        {{-- <x-rating.rating :course=$refComment></x-rating.rating> --}}
        <rating-component v-bind:rating="0" v-bind:read-only="false"></rating-component>
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
    'enctype' => 'multipart/form-data',
    'class' => 'form-inline justify-content-end',
    'id' => 'comment_form'
    ]) !!}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-group">
                    {{ Form::label('detail', 'Image',['class'=>'sr-only', 'form'=> 'comment_form']) }}
                    {{ Form::textarea('detail',old('detail'),
                                             ['class' => 'form-control w-100',
                                             'rows' => '1',
                                             'form'=> 'comment_form',
                                             'placeholder'=>'Content']) }}
                    @error('detail')
                    <div class="alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <div class="custom-file">
                        {{ Form::label('file','Photo',['class'=>'custom-file-label', 'form'=> 'comment_form']) }}
                        {{ Form::file('file',['class'=>' custom-file-input', 'form'=> 'comment_form']) }}
                        @error('file')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            {{ Form::text('ref_id',$refComment->id,['hidden'=>true, 'form'=> 'comment_form']) }}
            {{ Form::text('ref_module',$commentModule,['hidden'=>true, 'form'=> 'comment_form']) }}
            <div class="col-12 col-md-2">
                <div class="form-group ml-auto w-100">
                    {{ Form::submit('Save', ['class'=>'btn btn-primary ', 'form'=> 'comment_form']) }}
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>