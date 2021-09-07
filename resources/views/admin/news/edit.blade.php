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
                            <a href="{{ route('admin.news.index') }}" class="btn btn-outline-dark btn-sm" >
                                <i class="fe fe-arrow-left"></i>
                            </a>
                        </div>
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Edit News
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body">
                        {!! Form::open(['route' => ['admin.news.update', $news->id], 'method'=> 'put', 'enctype' =>
                        'multipart/form-data']) !!}
                        <div class="form-group">
                            {{ Form::label('announcement_date', 'Date') }}
                            {{ Form::date('announcement_date', $news->announcement_date,['class' => 'form-control'] ) }}
                            @error('announcement_date')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('title', 'News Title') }}
                            {{ Form::text('title', $news->title,['class' => 'form-control'] ) }}
                            @error('title')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{ Form::label('content', 'News content') }}
                            {{ Form::textarea('content', $news->content, ['id'=>'ckeditor']) }}
                            @error('content')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="custom-file">
                                    <input name="file" type="file" class="custom-file-input" id="validatedCustomFile"
                                        accept="image/*, application/pdf" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <sub class="text-dark"> accept image file, PDF </sub>
                                </div>
                            </div>
                            <div class="col-6">
                                @if (!empty($news->file))
                                <h4 class="form-control">{{$news->file->raw_name}}</h4>
                                @endif
                            </div>
                        </div>
                        {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div>
<script>
    window.onload = function () {
        CKEDITOR.replace('ckeditor');
    };
</script>
@push('inputFile')
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
@endpush
@endsection