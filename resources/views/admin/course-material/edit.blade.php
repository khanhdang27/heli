@php
    use \App\Utilities\SelectionByClass;
@endphp

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
                            {!! Form::open(['route' => ['admin.course-material.update', $material->id],'method'=>'put', 'enctype'=>'multipart/form-data']) !!}

                            <div class="form-group ">
                                {{ Form::label('course_id', 'Course') }}
                                {{ Form::select('course_id', array_filter(SelectionByClass::getValues(\App\Models\Course::class,'course_name','id'), function($var, $id)
                                {
                                    return $id != 1;
                                }, ARRAY_FILTER_USE_BOTH) , 
                                $material->course_id, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_name:en', 'Material Name (English)') }}
                                {{ Form::text('course_material_name:en', $material->course_material_name,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_name:cn', 'Material Name (Traditional Chinese)') }}
                                {{ Form::text('course_material_name:cn', $material->course_material_name,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_name:sc', 'Material Name (Traditional Chinese)') }}
                                {{ Form::text('course_material_name:sc',$material->course_material_name,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_description:en', 'Description (English)') }}
                                {{ Form::textarea('course_material_description:en', $material->course_material_description,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_description:cn', 'Description (Traditional Chinese)') }}
                                {{ Form::textarea('course_material_description:cn', $material->course_material_description,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_description:sc', 'Description (Simplify Chinese)') }}
                                {{ Form::textarea('course_material_description:sc', $material->course_material_description,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_origin:en', 'Material Origin (English)') }}
                                {{ Form::text('course_material_origin:en', $material->course_material_origin,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_origin:cn', 'Material Origin (Traditional Chinese)') }}
                                {{ Form::text('course_material_origin:cn', $material->course_material_origin,['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('course_material_origin:sc', 'Material Origin (Simplify Chinese)') }}
                                {{ Form::text('course_material_origin:sc', $material->course_material_origin,['class' => 'form-control']) }}
                            </div>
                            <div class="row form-group">
                                <div class="col-md-6 col-12">
                                    <div class="custom-file">
                                        <input name="file" type="file" class="custom-file-input" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    </div>
                                </div>
                                @if (!empty($material->file))
                                <div class="col-md-6">
                                    <h4 class="form-control">{{$material->file->raw_name}}</h4>
                                </div>
                                @endif
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
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection

