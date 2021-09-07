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
                                Create News
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body">
                        {!! Form::open(['route' => 'admin.news.store', 'enctype' => 'multipart/form-data' ]) !!}
                        <div class="form-group">
                            {{ Form::label('announcement_date', 'Date') }}
                            {{ Form::date('announcement_date',null,['class' => 'form-control'] ) }}
                            @error('announcement_date')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{ Form::label('title', 'News title') }}
                            {{ Form::text('title', old('title'),['class' => 'form-control'] ) }}
                            @error('title')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('content', 'News Content') }}
                            {{ Form::textarea('content', old('content'),['class' => 'form-control', 'id'=> 'ckeditor'] ) }}
                            @error('content')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="custom-file ">
                            {{ Form::label('file', 'News File',['class'=>'custom-file-label']) }}
                            {{ Form::file('file',['class' => 'custom-file-input', 'accept'=>"image/*, application/pdf"]) }}
                            <sub class="text-dark"> accept image file, PDF </sub>
                            @error('file')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
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