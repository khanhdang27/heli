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
                                    Edit Tutor
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => ['admin.tutor.update', $tutor->id],'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
                            @csrf
                            <div class="form-group ">
                                {{ Form::label('name', 'Username') }}
                                {{ Form::text('name', $tutor->name, ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('email', 'Tutor email') }}
                                {{ Form::email('email', $tutor->email, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('password', 'Password') }}
                                {{ Form::password('password', ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_name', 'Tutor name') }}
                                {{ Form::text('tutor_name', $tutor->tutor_name, ['class' => 'form-control']) }}
                            </div>
                            <div class="custom-file mb-4 ">
                                {{ Form::label('tutor_photo', 'Tutor Photo', ['class' => 'custom-file-label']) }}
                                {{ Form::file('tutor_photo', ['class' => 'custom-file-input']) }}
                            </div>
                            <div class="form-group ">
                                <?php
                                $subjectList = new \App\Models\Subject();
                                ?>
                                {{ Form::label('subject_id', 'Subject') }}
                                {{ Form::select('subject_id', $subjectList->getName(),null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:en', 'Tutor Info (English)') }}
                                {{ Form::text('tutor_info:en', $tutor->translate('en')->tutor_info, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:cn', 'Tutor Info (Traditional Chinese)') }}
                                {{ Form::text('tutor_info:cn', $tutor->translate('cn')->tutor_info, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:sc', 'Tutor Info (Simplify Chinese)') }}
                                {{ Form::text('tutor_info:sc', $tutor->translate('sc')->tutor_info, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:en', 'Tutor Level (English)') }}
                                {{ Form::text('tutor_level:en', $tutor->translate('en')->tutor_level, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:cn', 'Tutor Level (Traditional Chinese)') }}
                                {{ Form::text('tutor_level:cn', $tutor->translate('cn')->tutor_level, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:sc', 'Tutor Level (Simplify Chinese)') }}
                                {{ Form::text('tutor_level:sc', $tutor->translate('sc')->tutor_level, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:en', 'Tutor Specialized (English)') }}
                                {{ Form::text('tutor_specialized:en', $tutor->translate('en')->tutor_specialized, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:cn', 'Tutor Specialized (Traditional Chinese)') }}
                                {{ Form::text('tutor_specialized:cn', $tutor->translate('cn')->tutor_specialized, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:sc', 'Tutor Specialized (Simplify Chinese)') }}
                                {{ Form::text('tutor_specialized:sc', $tutor->translate('sc')->tutor_specialized, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:en', 'Tutor Experience (English)') }}
                                {{ Form::text('tutor_experience:en', $tutor->translate('en')->tutor_experience, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:cn', 'Tutor Experience (Traditional Chinese)') }}
                                {{ Form::text('tutor_experience:cn', $tutor->translate('cn')->tutor_experience, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:sc', 'Tutor Experience (Simplify Chinese)') }}
                                {{ Form::text('tutor_experience:sc', $tutor->translate('sc')->tutor_experience, ['class' => 'form-control']) }}
                            </div>
                            {{ Form::submit('Save', ['class' => 'btn btn-primary mt-5']) }}
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
