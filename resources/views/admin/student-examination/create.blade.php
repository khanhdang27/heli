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
                            <a class="btn btn-outline-dark btn-sm" href="{{route('admin.student-examination.index')}}">
                                <i class="fe fe-arrow-left"></i>
                            </a>
                        </div>
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Create Post
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div id="editBlog" class="card-body">
                        {!! Form::open(['route' => 'admin.student-examination.store', 'enctype' => 'multipart/form-data' ]) !!}
                        <div class="form-group">
                            student_id
                            {{ Form::text('student_id', 12, ['class'=>"form-control"] ) }}
                        </div>
                        <div class="form-group">
                            course_id
                            {{ Form::text('course_id', 2, ['class'=>"form-control"] ) }}
                        </div>
                        <div class="form-group">
                            exam_id
                            {{ Form::text('exam_id', 4, ['class'=>"form-control"] ) }}
                        </div>
                        <div class="form-group">
                            quiz_id
                            {{ Form::text('quiz_id', 1, ['class'=>"form-control"] ) }}
                        </div>
                        <div class="form-group">
                            question_id
                            {{ Form::text('question_id', null, ['class'=>"form-control"] ) }}
                        </div>
                        <div class="form-group">
                            time
                            {{ Form::text('time', null, ['class'=>"form-control"] ) }}
                        </div>
                        <div class="form-group">
                            answer
                            {{ Form::text('answer', null, ['class'=>"form-control"] ) }}
                        </div>
                        <div class="form-group">
                            answer_type
                            {{ Form::text('answer_type', null, ['class'=>"form-control"] ) }}
                        </div>
                        {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                        {!! Form::close() !!}
                    </>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div>

<script type="text/javascript">
    const displayPhoto = new Vue({
            el: '#editBlog',
            data() {
                return {
                    url: null,
                }
            },
            methods: {
                onFileChange(e) {
                    const file = e.target.files[0];
                    this.url = URL.createObjectURL(file);
                    document.getElementById('preview').style = 'block';
                    document.getElementById('preview_file_already').hidden = 'true';
                }
            }
        })
</script>
<script type="application/javascript">
    window.onload = function () {
            CKEDITOR.replace('ckeditor');
        };
</script>
<script type="application/javascript">
    $(document).ready(function() {
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        $('.option-multiple-select').select2();
    });
</script>

@endsection
