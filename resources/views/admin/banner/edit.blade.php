@extends('admin.layout')
@section('content')
    <!-- CARDS -->
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
                                    Edit Banner
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="mb-3">
                                <img
                                    src="{{ Storage::url($banner->banner_photo) }}"
                                    width="80px;" height="90px;" alt="">
                            </div>
                            {!! Form::open(['route' => ['admin.banner.update',$banner->id],'method'=>'put', 'enctype'=>'multipart/form-data'])  !!}
                            @csrf
                            <div class="custom-file ">
                                {{ Form::label('file', 'File', ['class' => 'custom-file-label']) }}
                                {{ Form::file('banner_photo', ['class' => 'custom-file-input', 'required'])}}
                            </div>
                            {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}
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

