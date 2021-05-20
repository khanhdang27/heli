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
                                    Create Subject
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => 'admin.subject.store', 'enctype' => 'multipart/form-data' ]) !!}
                            @csrf
                            <div class="form-group ">
                                {{ Form::label('subject_name:en', 'Name (English)') }}
                                {{ Form::text('subject_name:en', old('subject_name:en'),['class' => 'form-control', 'required'] ) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('subject_name:cn', 'Name (Traditional Chinese)') }}
                                {{ Form::text('subject_name:cn', old('subject_name:cn'),['class' => 'form-control', 'required'] ) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('subject_name:sc', 'Name (Simplify Chinese)') }}
                                {{ Form::text('subject_name:sc', old('subject_name:sc'),['class' => 'form-control', 'required'] ) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('subject_color', 'Color') }}
                                {{ Form::color('subject_color','#dddddd', ['class' => 'form-control'] ) }}
                            </div>
                            {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection
