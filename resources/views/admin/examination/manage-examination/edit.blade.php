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
                            <a href="{{ route('admin.manage-examination', $exam->id) }}"
                                class="btn btn-outline-dark btn-sm">
                                <i class="fe fe-arrow-left"></i>
                            </a>
                        </div>
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Edit Examination
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body">
                        {!! Form::open(['route' => ['admin.examination.update', $exam->id], 'method'=> 'put', 'enctype'
                        => 'multipart/form-data']) !!}
                        <div class="form-group ">
                            {{ Form::label('deadline', 'Deadline') }}
                            {{ Form::date('deadline', $exam->deadline,['class' => 'form-control']) }}
                        </div>
                        @error('deadline')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group ">
                            {{ Form::label('title', 'Title') }}
                            {{ Form::text('title', $exam->title,['class' => 'form-control']) }}
                        </div>
                        @error('title')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group ">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::textarea('description', $exam->description,['class' => 'form-control']) }}
                        </div>
                        <div class="form-group ">
                            <div class="custom-file">
                                <input name="file" type="file" class="custom-file-input" id="validatedCustomFile"
                                    accept="application/pdf">
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <sub class="text-dark"> accept file PDF </sub>
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
<script type="application/javascript">
    // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
</script>
@endsection