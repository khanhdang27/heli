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
                                    Edit Material
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => ['admin.material.update', $material->id],'method'=>'put', 'enctype'=>'multipart/form-data']) !!}
                            @csrf
                            <div class="form-group ">
                                {{ Form::label('material_name:en', 'Material Name (English)') }}
                                {{ Form::text('material_name:en', $material->translate('en')->material_name,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_name:cn', 'Material Name (Traditional Chinese)') }}
                                {{ Form::text('material_name:cn', $material->translate('cn')->material_name,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_name:sc', 'Material Name (Traditional Chinese)') }}
                                {{ Form::text('material_name:sc',$material->translate('sc')->material_name,['class' => 'form-control']) }}
                            </div>
                            <div class="custom-file mb-4">
                                {{ Form::label('file', 'Image', ['class' => 'custom-file-label']) }}
                                {{ Form::file('material_image', ['class' => 'custom-file-input'])}}
                            </div>
                            <div class="custom-file mb-4">
                                {{ Form::label('file', 'File', ['class' => 'custom-file-label']) }}
                                {{ Form::file('material_file', ['class' => 'custom-file-input'])}}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_price', 'Price') }}
                                {{ Form::text('material_price', $material->material_price,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_description:en', 'Description (English)') }}
                                {{ Form::textarea('material_description:en', $material->translate('en')->material_description,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_description:cn', 'Description (Traditional Chinese)') }}
                                {{ Form::textarea('material_description:cn', $material->translate('cn')->material_description,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_description:sc', 'Description (Simplify Chinese)') }}
                                {{ Form::textarea('material_description:sc', $material->translate('sc')->material_description,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_origin:en', 'Material Origin (English)') }}
                                {{ Form::text('material_origin:en', $material->translate('en')->material_origin,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_origin:cn', 'Material Origin (Traditional Chinese)') }}
                                {{ Form::text('material_origin:cn', $material->translate('cn')->material_origin,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('material_origin:sc', 'Material Origin (Simplify Chinese)') }}
                                {{ Form::text('material_origin:sc', $material->translate('sc')->material_origin,['class' => 'form-control']) }}
                            </div>
                            {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}
                        </div>
                        <script>
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

