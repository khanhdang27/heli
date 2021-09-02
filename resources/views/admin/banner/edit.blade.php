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
                            <button class="btn btn-outline-dark btn-sm" onclick="window.history.go(-1)">
                                <i class="fe fe-arrow-left"></i>
                            </button>
                        </div>
                        <div>
                            <!-- Title -->

                            <h4 class="card-header-title">
                                Edit Banner
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                @if ($banner->image != null)
                                <img class="w-100 img-thumbnail" src="{{ asset('/file/'.$banner->image->id) }}" alt="">
                                @endif
                            </div>
                            <div class="col-6">
                                {!! Form::open(['route' => ['admin.banner.update',$banner->id],'method'=>'put',
                                'enctype'=>'multipart/form-data']) !!}
                                @csrf

                                <div class="form-group ">
                                    {{ Form::label('banner_title', 'Banner title', ['class' => 'required']) }}
                                    {{ Form::text('banner_title', $banner->banner_title,['class' => 'form-control', 'required'] ) }}
                                    @error('banner_title')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="custom-file ">
                                    {{ Form::label('file', 'File', ['class' => 'custom-file-label']) }}
                                    {{ Form::file('file', ['class' => 'custom-file-input', 'accept'=>"image/*"])}}
                                    <sub class="text-dark"> accept image file </sub>
                                    @error('file')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                    <script>
                        // Add the following code if you want the name of the file appear on select
                            $(document).ready(function () {
                                $(".custom-file-input").on("change", function () {
                                    var fileName = $(this).val().split("\\").pop();
                                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                });
                            });
                    </script>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div>
@endsection