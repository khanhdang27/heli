@extends('admin.layout')
@section('content')
    @php
        use App\Utilities\SelectionByClass;
        $tags=SelectionByClass::getValues(\App\Models\Tag::class,'tag_name', 'id');

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
                                    Edit Certificate
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => ['admin.blog.update', $blog->id], 'method'=> 'put', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group ">
                                {{ Form::label('photo', 'Photo') }}
                                {{ Form::file('photo', ['class' => 'form-control']) }}
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

                                @foreach($tags as $id => $tag)
                                    {{ Form::checkbox('tag_id[]',$id,in_array($id, array_column($blog->tags->toArray(),'id'))) }}
                                    {{ Form::label($id, $tag,['class'=>'mr-3'] ) }}
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
        window.onload = function() {
            CKEDITOR.replace( 'ckeditor');
        };
    </script>
@endsection

