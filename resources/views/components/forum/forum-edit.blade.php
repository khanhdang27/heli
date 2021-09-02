@php
use App\Utilities\SelectionByClass;
@endphp
<div class="dropdown mr-2">
    <a href="#" class="btn btn-option ml-auto pb-0" role="button" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <h2 class="mb-0 text-primary">
            <i class="fe fe-edit-3"></i>
        </h2>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-option py-0">
        <a href="#" class="dropdown-item text-primary" data-toggle="modal" data-target="#modalEdit">
            Edit
        </a>
        <a href="javascript:void(0)" onclick="postDelete('{{ route('site.post.destroy', $post->id) }}')"
            class="dropdown-item delete-item text-primary">
            Delete
        </a>
    </div>
</div>
<div class="modal fade modal-index" id="modalEdit" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content text-primary">
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
                    {{ Form::select('tag_id', $tags,
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
                <div class="mt-3">
                    <p>Old image</p>
                    @if(empty($post->image))
                    <div class="border rounded p-3 text-center text-muted">None</div>
                    @else
                    <img class="border rounded" src="{{asset('/file/'.$post->image->id)}}" width="100%" />
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<script>
    function postDelete(url) {
    var choose = confirm('Do you want delete item?');

    if (choose) {
        axios.delete(url, {}).then(response => {
            console.log('response :>> ', response);
            if (response.status == 200) {
                console.log(response.message)
                // alert(response.message);
                location.href = "{{ route('site.post.index') }}"
            } else {
                alert(response.message);
            }
        })
    }
}

</script>
