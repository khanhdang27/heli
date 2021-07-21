@php

use App\Utilities\SelectionByClass;
use App\Models\StudySession;

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
                        <div class="row align-items-center">
                            <div class="col">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Create Course
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        {!! Form::open(['url' => route('admin.course.lecture.store', $course->id), 'enctype'=>'multipart/form-data']) !!}
                        @csrf
                        <div class="form-group ">
                            {{ Form::label('study_session_id', 'Study Session') }}
                            {{ Form::select('study_session_id', SelectionByClass::getValues(StudySession::class,'session_name','study_session_id'),['class' => 'form-control', 'required', 'id'=> 'study_session_id']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('start_date', 'Description') }}
                            {{ Form::text('start_date',old('start_date'),['class' => 'form-control', 'required', 'id'=> 'start_date']) }}
                        </div>
                        
                        <div class="form-group ">
                            {{ Form::label('number_session', 'Number Session') }}
                            {{ Form::text('number_session',old('number_session'),['class' => 'form-control', 'required']) }}
                        </div>

                        <div class="form-group ">
                            {{ Form::label('number_member', 'Number Member') }}
                            {{ Form::text('number_member',old('number_member'),['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('number_member_maximum', 'Number Member Maximum') }}
                            {{ Form::text('number_member_maximum',old('number_member_maximum'),['class' => 'form-control', 'required']) }}
                        </div>

                        
                        {{ Form::submit('Save', ['class'=>'btn btn-primary my-5']) }}
                        
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
                    token: '93db9f4146dbaa7c7616f83cc7ea1580',
                    upgrade_to_1080: true,
                    onError: function(data) {
                        showMessage('<strong>Error</strong>: ' + JSON.parse(data).error, 'danger')
                    },
                    onProgress: function(data) {
                        updateProgress(data.loaded / data.total)
                    },
                    onComplete: function(videoId, index) {
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
                                    is_live: false
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
