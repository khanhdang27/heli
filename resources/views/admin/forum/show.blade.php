@extends('admin.layout')
@section('content')
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
                Forum Post Review
              </h4>
            </div>
          </div> <!-- / .row -->
        </div>
        <div class="card-body">
          <div class="card-body">
            <div class="d-flex">
              @if ($post->deleted_at)
              <a class="btn btn-outline-warning ml-auto" href="javascript:void(0)"
                onclick="itemRestore('{{ route('admin.forum.restore', $post) }}')" class="dropdown-item delete-item">
                Restore
              </a>
              @else
              <a class="btn btn-outline-danger ml-auto" href="javascript:void(0)"
                onclick="itemDelete('{{ route('admin.forum.destroy', $post) }}')" class="dropdown-item delete-item">
                Delete
              </a>
              @endif
            </div>
            <div class="border rounded p-4 mt-3">
              <h3>Title</h3>
              <hr>
              <span>
                {{ $post->title }}
              </span>
            </div>
            <div class="border rounded p-4 mt-3">
              <h3>Content</h3>
              <hr>
              <span>
                {{ $post->content }}
              </span>
            </div>
            <div class="border rounded p-4 mt-3">
              <h3>Image</h3>
              <hr>
              @if ($post->image != null)
              <img class="img-question border border-radius" src="{{ asset('/file/' . $post->image->id) }}">
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- / .row -->
</div>
@endsection