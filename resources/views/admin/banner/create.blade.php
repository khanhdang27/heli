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
                            <a class="btn btn-outline-dark btn-sm" href="{{route('admin.banner.index')}}">
                                <i class="fe fe-arrow-left"></i>
                            </a>
                        </div>
                        <div>
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
                            {{ Form::label('banner_title', 'Banner title', ['class' => 'required']) }}
                            {{ Form::text('banner_title', old('banner_title'),['class' => 'form-control', 'required'] ) }}
                            @error('banner_title')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="custom-file ">
                            {{ Form::label('file', 'Image',['class'=>'custom-file-label']) }}
                            {{ Form::file('file',['class' => 'custom-file-input', 'accept'=>"image/*"]) }}
                            <sub class="text-dark"> accept image file </sub>
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
<script src="{{ asset('js/admin/upload-file-project.js') }}"></script>
<script type="application/javascript">
    // Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
@endpush
@endsection