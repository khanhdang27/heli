<?php
$subjectList = new \App\Models\Subject();
?>


@extends('admin.layout')
@section('content')
    @push('scripts')
        <script>
            var dropzone = new Dropzone('#uploadFile', {
                previewTemplate: document.querySelector('#preview-template').innerHTML,
                parallelUploads: 3,
                thumbnailHeight: 120,
                thumbnailWidth: 120,
                maxFilesize: 6,
                filesizeBase: 1500,
                thumbnail: function (file, dataUrl) {
                    if (file.previewElement) {
                        file.previewElement.classList.remove("dz-file-preview");
                        var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                        for (var i = 0; i < images.length; i++) {
                            var thumbnailElement = images[i];
                            thumbnailElement.alt = file.name;
                            thumbnailElement.src = dataUrl;
                        }
                        setTimeout(function () {
                            file.previewElement.classList.add("dz-image-preview");
                        }, 1);
                    }
                }
            });

            var minSteps = 6,
                maxSteps = 60,
                timeBetweenSteps = 100,
                bytesPerStep = 100000;

            dropzone.uploadFiles = function (files) {
                var self = this;

                for (var i = 0; i < files.length; i++) {

                    var file = files[i];
                    totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

                    for (var step = 0; step < totalSteps; step++) {
                        var duration = timeBetweenSteps * (step + 1);
                        setTimeout(function (file, totalSteps, step) {
                            return function () {
                                file.upload = {
                                    progress: 100 * (step + 1) / totalSteps,
                                    total: file.size,
                                    bytesSent: (step + 1) * file.size / totalSteps
                                };

                                self.emit('uploadprogress', file, file.upload.progress, file.upload
                                    .bytesSent);
                                if (file.upload.progress === 100) {
                                    file.status = Dropzone.SUCCESS;
                                    self.emit("success", file, 'success', null);
                                    self.emit("complete", file);
                                    self.processQueue();
                                }
                            };
                        }(file, totalSteps, step), duration);
                    }
                }
            }
        </script>

    @endpush
    <!-- CARDS -->
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
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
                    <div class="card-body d-flex">
                        <div class="card-body">
                            {!! Form::open(['route'=> 'admin.tutor.store', 'enctype' => 'multipart/form-data']) !!}
                            @csrf
                            <div class="form-group ">
                                {{ Form::label('full_name', 'Tutor name') }}
                                {{ Form::text('full_name', old('full_name'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">

                                {{ Form::label('subject_id', 'Subject') }}
                                {{ Form::select('subject_id', $subjectList->getName(),null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:en', 'Tutor Info (English)') }}
                                {{ Form::text('tutor_info:en', old('tutor_info:en'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:cn', 'Tutor Info (Traditional Chinese)') }}
                                {{ Form::text('tutor_info:cn', old('tutor_info:cn'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:sc', 'Tutor Info (Simplify Chinese)') }}
                                {{ Form::text('tutor_info:sc', old('tutor_info:sc'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:en', 'Tutor Level (English)') }}
                                {{ Form::text('tutor_level:en', old('tutor_level:en'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:cn', 'Tutor Level (Traditional Chinese)') }}
                                {{ Form::text('tutor_level:cn', old('tutor_level:cn'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:sc', 'Tutor Level (Simplify Chinese)') }}
                                {{ Form::text('tutor_level:sc', old('tutor_level:sc'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:en', 'Tutor Specialized (English)') }}
                                {{ Form::text('tutor_specialized:en', old('tutor_specialized:en'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:cn', 'Tutor Specialized (Traditional Chinese)') }}
                                {{ Form::text('tutor_specialized:cn', old('tutor_specialized:cn'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:sc', 'Tutor Specialized (Simplify Chinese)') }}
                                {{ Form::text('tutor_specialized:sc', old('tutor_specialized:sc'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:en', 'Tutor Experience (English)') }}
                                {{ Form::text('tutor_experience:en', old('tutor_experience:en'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:cn', 'Tutor Experience (Traditional Chinese)') }}
                                {{ Form::text('tutor_experience:cn', old('tutor_experience:cn'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:sc', 'Tutor Experience (Simplify Chinese)') }}
                                {{ Form::text('tutor_experience:sc', old('tutor_experience:sc'), ['class'=>'form-control']) }}
                            </div>
                            {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Add photo for Tutor
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        {!! Form::open([
                                'route' => 'admin.banner.store',
                                'enctype'=>'multipart/form-data',
                                'class'=>'dropzone',
                                'id'=>"uploadFile"
                            ])  !!}
                        @csrf
                        <div class="dz-message">
                            Drag 'n' Drop Files<br>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
@endsection
