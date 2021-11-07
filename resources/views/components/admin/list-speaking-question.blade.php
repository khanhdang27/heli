<ul class="list-group" id="listQuestionSpeakingExercises_{{ $quiz->set }}">
    @foreach ($questions as $question)
        @if ($question->questionContent())
            <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-info selectable"
                id="headingQuestion_{{ $question->id }}">
                <div class="w-75" data-toggle="collapse"
                    data-target="#collapseAnswerSpeakingExercises_{{ $question->id }}" aria-expanded="true"
                    aria-controls="collapseAnswerSpeakingExercises_{{ $question->id }}">
                    {{ $question->index }} - {{ $question->questionContent()->question }}
                </div>
                <div class="ml-auto w-25">
                    <button class="btn btn-warning btn-sm m-1 w-100" data-toggle="modal"
                        data-target="#modalSpeakingExercisesQuestion_{{ $question->id }}"> Update </button>
                    <button class="btn btn-danger btn-sm  m-1 w-100"
                        onclick="itemDelete('{{ route('admin.quiz.question.speaking.exercises.destroy', ['quiz' => $quiz->id, 'question' => $question->id]) }}')">
                        Delete </button>
                </div>

                <div class="modal fade" id="modalSpeakingExercisesQuestion_{{ $question->id }}" tabindex="0"
                    role="dialog" aria-labelledby="modalSpeakingExercisesQuestion_{{ $question->id }}_Title"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark">
                                    Speaking Question
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['methods' => 'put', 'url' => route('admin.quiz.question.speaking.exercises.update', ['quiz' => $quiz->id, 'question' => $question->id]), 'id' => 'formReadingQuestion_{{ $question->id }}', 'enctype' => 'multipart/form-data']) !!}

                                <div class="form-group">
                                    <label for="index" class="required text-dark">Index</label>
                                    {{ Form::number('index', $question->index, ['class' => 'form-control', 'required']) }}
                                </div>
                                <div class="form-group">
                                    <label for="question" class="required text-dark">Question</label>
                                    {{ Form::text('question', $question->questionContent()->question, ['class' => 'form-control', 'required']) }}
                                </div>
                                <div class="form-group">
                                    <label for="video_code_practice" class="required text-dark"> Video Practice </label>
                                    {{ Form::text('video_code_practice', $question->questionContent()->video_code_practice, ['class' => 'form-control', 'required']) }}
                                </div>
                                <div class="form-group">
                                    <label for="video_code_response" class="required text-dark"> Video Response </label>
                                    {{ Form::text('video_code_response', $question->questionContent()->video_code_response, ['class' => 'form-control', 'required']) }}
                                </div>
                                <div class="form-group ">
                                    Pick up video
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input"
                                            id="browse_{{ $question->index }}"
                                            accept="video/mp4,video/x-m4v,video/*">
                                        <label class="custom-file-label" for="customFile">Browse&hellip; </label>
                                    </div>
                                    <div id="results_{{ $question->index }}"></div>
                                    <div id="progress-container_{{ $question->index }}" class="progress">
                                        <div id="progress_{{ $question->index }}"
                                            class="progress-bar progress-bar-info progress-bar-striped active"
                                            role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 0%">&nbsp;0%
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="message_wrong" class="required text-dark">Message Wrong</label>
                                    {{ Form::text('message_wrong', $question->questionContent()->message_wrong, ['class' => 'form-control', 'required']) }}
                                </div>
                                <div class="form-group">
                                    <label for="lecture_index" class="required text-dark">Lecture Index</label>
                                    {{ Form::text('lecture_index', $question->questionContent()->lecture_index, ['class' => 'form-control', 'required']) }}
                                </div>
                                <div class="d-flex">
                                    <button type="button" class="btn btn-secondary ml-auto"
                                        data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary ml-1">Save</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <script src="{{ asset('js/vimeo_upload_process.js') }}"></script>
            <script type="application/javascript">
                function handleFileSelect_{{ $question->index }}(evt) {
                    evt.stopPropagation()
                    evt.preventDefault()
                    var fileName = $(this).val().split("\\").pop();

                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);

                    var files = evt.dataTransfer ? evt.dataTransfer.files : $(this).get(0).files
                    var results = document.getElementById('results_{{ $question->index }}')
                    /* Clear the results div */
                    while (results.hasChildNodes()) results.removeChild(results.firstChild)

                    /* Rest the progress bar and show it */
                    updateProgress_{{ $question->index }}(0)
                    document.getElementById('progress-container_{{ $question->index }}').style.display = 'block'

                    /* Instantiate Vimeo Uploader */
                    ;
                    (new VimeoUpload({
                        name: fileName,
                        description: fileName,
                        private: true,
                        file: files[0],
                        token: 'a4e21d56502edc34f8e27e0244fc46b9',
                        upgrade_to_1080: true,
                        onError: function(data) {
                            showMessage_{{ $question->index }}('<strong>Error</strong>: ' + JSON.parse(data).error,
                                'danger')
                        },
                        onProgress: function(data) {
                            updateProgress_{{ $question->index }}(data.loaded / data.total)
                        },
                        onComplete: function(videoId, index) {

                            showMessage_{{ $question->index }}(`<strong>Upload Successful</strong>: \nThis is ID of video, please copy this <input readonly id="video_id_result" value="${videoId}"></input> &nbsp;
                <button id="copy-button_{{ $question->index }}" class="btn btn-outline-success btn-sm" type="button" onclick="handleCopy_{{ $question->index }}()" ><i class="fe fe-copy"></i></button>
                    to resource field`)
                        }
                    })).upload()

                    // /* local function: show a user message */
                    function showMessage_{{ $question->index }}(html, type) {
                        /* hide progress bar */
                        document.getElementById('progress-container_{{ $question->index }}').style.display = 'none'
                        /* display alert message */
                        var element = document.createElement('div')
                        element.setAttribute('class', 'text-dark p-3 rounded border border-' + (type || 'success'))
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
                 * Update progress bar.
                 */
                function updateProgress_{{ $question->index }}(progress) {
                    progress = Math.floor(progress * 100)
                    var element = document.getElementById('progress_{{ $question->index }}')
                    element.setAttribute('style', 'width:' + progress + '%')
                    element.innerHTML = '&nbsp;' + progress + '%'
                }
                /**
                 * Wire up drag & drop listeners once page loads
                 */
                document.addEventListener('DOMContentLoaded', function() {
                    var browse = document.getElementById('browse_{{ $question->index }}')
                    browse.addEventListener('change', handleFileSelect_{{ $question->index }}, false)
                })

                function handleCopy_{{ $question->index }}() {
                    /* Get the text field */
                    var copyText = document.getElementById("video_id_result_{{ $question->index }}");

                    var copyButton = document.getElementById("copy-button_{{ $question->index }}");

                    /* Select the text field */
                    copyText.select();
                    copyText.setSelectionRange(0, 99999); /* For mobile devices */

                    /* Copy the text inside the text field */
                    navigator.clipboard.writeText(copyText.value);

                    copyButton.classList.remove('btn-outline-success');
                    copyButton.classList.add('btn-success');
                    copyButton.innerHTML = "copied"
                    // 641400179
                }
            </script>
        @endif
    @endforeach

</ul>



<script src="{{ asset('js/admin/delete_data_item.js') }}"></script>
