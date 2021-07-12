@php
    use App\Utilities\SelectionByClass;
@endphp
<div class="dropdown">
    <a href="#" class="btn btn-option py-0" role="button"
       data-toggle="dropdown" aria-haspopup="true"
       aria-expanded="false">
        <h2 class="mb-0">
            <i class="fe fe-more-horizontal"></i>
        </h2>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-option py-0">
        <a href="#" class="dropdown-item text-primary" data-toggle="modal"
           data-target="#modalEdit">
            Edit
        </a>
        <a href="javascript:void(0)"
           onclick="itemDelete('{{ route('site.post.destroy', $post->id) }}')"
           class="dropdown-item delete-item text-primary">
            Delete
        </a>
    </div>
</div>
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit your question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['url' => URL::route('site.post.update',['type'=>'post', 'ref'=>0,$post->id]),
                                'enctype' => 'multipart/form-data', 'method' => 'put' ]) !!}
            <div class="modal-body">
                <div class="form-group">
                    {{ Form::label('tag_id', 'Tag') }}
                    {{ Form::select('tag_id', SelectionByClass::getValues(\App\Models\Tag::class,'tag_name', 'id'),
                                    $post->postTag->id,
                                    ['class' => 'form-control','required']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title',$post->title,['class' => 'form-control']) }}
                </div>
                <div class="form-group ">
                    {{ Form::label('content', 'Content') }}
                    {{ Form::textarea('content',$post->content,['class' => 'form-control', 'rows' => '7']) }}
                </div>
                <div class="custom-file ">
                    {{ Form::label('file', 'Image',['class'=>'custom-file-label']) }}
                    {{ Form::file('file',['class' => 'custom-file-input']) }}
                </div>

            </div>
            <div class="modal-footer">
                {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
