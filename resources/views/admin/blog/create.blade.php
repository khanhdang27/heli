@extends('admin.layout')
@section('content')
    @php
        use App\Utilities\SelectionByClass;
        $postTag=SelectionByClass::getValues(\App\Models\Tag::class,'tag_name', 'id');
    @endphp
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
                                    Create post
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => 'admin.blog.store', 'enctype' => 'multipart/form-data' ]) !!}
                            <div class="custom-file mb-5">
                                {{ Form::label('photo', 'Photo',['class'=>'custom-file-label']) }}
                                {{ Form::file('photo',['class' => 'custom-file-input']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('title', 'Title') }}
                                {{ Form::text('title', old('title'),['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('content', 'Content') }}
                                {{ Form::textarea('content', old('content'),['id'=>'ckeditor']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('tag_id', 'Post tag') }}

                                @foreach($postTag as $id => $tag)
                                    {{ Form::checkbox('tag_id[]',$id,null) }}
                                    {{ Form::label($tag, $tag) }}
                                @endforeach
                            </div>
                            {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div>
    <script>

        window.onload = function () {
            CKEDITOR.replace('ckeditor');
        };
    </script>
    @push('inputFile')
        <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function () {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>
    @endpush

@endsection



