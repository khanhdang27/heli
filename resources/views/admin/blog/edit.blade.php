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
                            <a class="btn btn-outline-dark btn-sm" href="{{route('admin.blog.index')}}">
                                <i class="fe fe-arrow-left"></i>
                            </a>
                        </div>
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Edit Post
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div id="editBlog" class="card-body">
                        {!! Form::open(['route' => ['admin.blog.update', $blog->id], 'method'=> 'put', 'enctype' =>
                        'multipart/form-data']) !!}
                        <div class="custom-file mb-5">
                            {{ Form::label('photo', 'Photo',['class'=>'custom-file-label']) }}
                            {{ Form::file('photo',['class' => 'custom-file-input', '@change'=>'onFileChange', 'accept'=>"image/*"]) }}
                            <sub class="text-dark"> accept image file </sub>
                        </div>
                        <div>
                            @if (empty($blog->photo))
                            <div id="preview_file_already">
                            </div>
                            @else
                            <div id="preview_file_already" class="mb-4">
                                <img class="img-thumbnail" src="{{asset('/file/'.$blog->photo->id)}}" width=100% />
                            </div>
                            @endif
                            <div id="preview" class="mb-4" style="display: none">
                                <img class="img-thumbnail" v-if="url" :src="url" width=100% />
                            </div>
                        </div>
                        <div class="form-group ">
                            {{ Form::label('title', 'Title') }}
                            {{ Form::text('title', $blog->title,['class' => 'form-control']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('content', 'Content') }}
                            {{ Form::textarea('content', $blog->content,['id'=>'ckeditor']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('tag_id', 'Post tag:', ['class'=>'mr-3']) }}
                            <select id="tags_select" class="option-multiple-select" name="tag_id[]" multiple="multiple">
                                @foreach($tags as $id => $tag)
                                <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                        {!! Form::close() !!}
                    </div>
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
    window.onload = function() {
        CKEDITOR.replace( 'ckeditor');
    };
    $(document).ready(function() {
        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        $('.option-multiple-select').select2();

        $('#tags_select').val(@json(array_column($blog->tags->toArray(),'id')));

        $('#tags_select').trigger('change');
    });
</script>
@endsection
