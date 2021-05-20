@extends('admin.layout')
@section('content')
    <!-- CARDS -->
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
                        <div id="editor">
                        </div>

                    </div>
                </div>

            </div>
        </div>
        @stack('scripts')
    </div>
@endsection

