@php
use App\Models\Tag;
@endphp

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
                                <a class="btn btn-outline-dark btn-sm" href="{{ route('admin.tag.index') }}">
                                    <i class="fe fe-arrow-left"></i>
                                </a>
                            </div>
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Edit Tags
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => ['admin.tag.update', $tags->id], 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {{ Form::label('tag_name', 'Tag name', ['class' => 'required']) }}
                                {{ Form::text('tag_name', $tags->tag_name, ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tag_type', 'Type') }}
                                {{ Form::select('tag_type', \Constants::TAG_TYPES, $tags->tag_type, ['class' => 'form-control w-25']) }}
                            </div>
                            {{ Form::submit('Save', ['class' => 'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
@endsection
