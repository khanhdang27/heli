@php

use App\Utilities\SelectionByClass;
use App\Models\Tutor;
use App\Models\Subject;

@endphp

@extends('admin.layout')
@section('content')
<script src="{{asset("js/admin/vimeo-upload.js")}}"></script>
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
                                Create Course
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    {!! Form::open(['url' => route('admin.course.lecture.store', $course->id),
                    'enctype'=>'multipart/form-data']) !!}
                    @csrf
                    <div class="form-group ">
                        {{ Form::label('lectures_name', 'Name') }}
                        {{ Form::text('lectures_name',old('lectures_name'),['class' => 'form-control', 'required', 'id'=> 'lectures_name']) }}
                    </div>
                    <div class="form-group ">
                        {{ Form::label('lectures_description', 'Description') }}
                        {{ Form::text('lectures_description',old('lectures_description'),['class' => 'form-control', 'required', 'id'=> 'lectures_description']) }}
                    </div>
                    <div class="form-group ">
                        Pick up video
                        <label class="btn btn-block btn-info">
                            Browse&hellip; <input id="browse" type="file" style="display: none;">
                        </label>
                        <div class="col-md-12">
                            <div id="results"></div>
                        </div>
                        <div id="progress-container" class="progress">
                            <div id="progress" class="progress-bar progress-bar-info progress-bar-striped active"
                                role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"
                                style="width: 0%">&nbsp;0%
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div> <!-- / .row -->
</div>


<script type="text/javascript">
    /**
         * Called when files are dropped on to the drop target or selected by the browse button.
         * For each file, uploads the content to Drive & displays the results when complete.
         */
        function handleFileSelect(evt) {
            evt.stopPropagation()
            evt.preventDefault()
            
            var files = evt.dataTransfer ? evt.dataTransfer.files : $(this).get(0).files
            var results = document.getElementById('results')

            if ( 
                document.getElementById('lectures_name').value.length === 0 ||
                document.getElementById('lectures_description').value.length === 0 
            ) {

                console.log(document.getElementById('lectures_name').value)
                showMessage('<strong>Error</strong>: ' + ' lectures name and description is required', 'danger')

            } else {
                /* Clear the results div */
                while (results.hasChildNodes()) results.removeChild(results.firstChild)

                /* Rest the progress bar and show it */
                updateProgress(0)
                document.getElementById('progress-container').style.display = 'block'

                /* Instantiate Vimeo Uploader */
                ;(new VimeoUpload({
                    name: document.getElementById('lectures_name').value,
                    description: document.getElementById('lectures_description').value,
                    private: true,
                    file: files[0],
                    token: 'a4e21d56502edc34f8e27e0244fc46b9',
                    upgrade_to_1080: true,
                    onError: function(data) {
                        showMessage('<strong>Error</strong>: ' + JSON.parse(data).error, 'danger')
                    },
                    onProgress: function(data) {
                        updateProgress(data.loaded / data.total)
                    },
                    onComplete: function(videoId, index) {
                        
                        console.log(videoId)
                        console.log(index)
                        var url = 'https://vimeo.com/' + videoId

                        if (index > -1) {
                            /* The metadata contains all of the uploaded video(s) details see: https://developer.vimeo.com/api/endpoints/videos#/{video_id} */
                            url = this.metadata[index].link //

                            /* add stringify the json object for displaying in a text area */
                            var pretty = JSON.stringify(this.metadata[index], null, 2)
    
                            axios.post("{{ route('admin.course.lecture.store', $course->id)}}", {
                                    lectures_name: this.metadata[index].name,
                                    lectures_description: this.metadata[index].description,
                                    video_resource: videoId,
                                }).then(function (response) {
                                    console.info(response);
                                })
                                .catch(function (error) {
                                    console.error(error);
                                });
                        }
                        showMessage('<strong>Upload Successful</strong>: check uploaded video @ <a href="' + url + '">' + url + '</a>. Open the Console for the response details.')
                    }
                })).upload()
            }

            // /* local function: show a user message */
            function showMessage(html, type) {
                /* hide progress bar */
                document.getElementById('progress-container').style.display = 'none'
                /* display alert message */
                var element = document.createElement('div')
                element.setAttribute('class', 'alert alert-' + (type || 'success'))
                element.innerHTML = html
                results.appendChild(element)
            }
        }

        /**
         * Dragover handler to set the drop effect.
         */
        function handleDragOver(evt) {
            evt.stopPropagation()
            evt.preventDefault()
            evt.dataTransfer.dropEffect = 'copy'
        }

        /**
         * Updat progress bar.
         */
        function updateProgress(progress) {
            progress = Math.floor(progress * 100)
            var element = document.getElementById('progress')
            element.setAttribute('style', 'width:' + progress + '%')
            element.innerHTML = '&nbsp;' + progress + '%'
        }
        /**
         * Wire up drag & drop listeners once page loads
         */
        document.addEventListener('DOMContentLoaded', function() {
            var browse = document.getElementById('browse')
            browse.addEventListener('change', handleFileSelect, false)
        })

</script>

@endsection