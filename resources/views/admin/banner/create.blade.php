@extends('admin.layout')
@section('content')
<!-- CARDS -->
<script src="{{ asset('js/admin/upload-file-project.js') }}"></script>
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
            <!-- Goals -->
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Create Banner
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body">
                        {!! Form::open(['url' => URL::route('admin.banner.store',['type'=>'post', 'ref'=>0]), 'enctype'
                        => 'multipart/form-data' ]) !!}
                        <div class="form-group ">
                            {{ Form::label('banner_title', 'Banner title') }}
                            {{ Form::text('banner_title', old('banner_title'),['class' => 'form-control'] ) }}
                            @error('banner_title')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="custom-file ">
                            {{ Form::label('file', 'Image',['class'=>'custom-file-label']) }}
                            {{ Form::file('file',['class' => 'custom-file-input']) }}
                            @error('file')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                        {!! Form::close() !!}
                    </div>
                    <div id="editor">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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