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
                                    Create Tags
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => 'admin.tag.store', 'enctype' => 'multipart/form-data' ]) !!}
                            <div class="form-group ">
                                {{ Form::label('tag_name', 'Name') }}
                                {{ Form::text('tag_name', old('tag_name'),['class' => 'form-control', 'placeholder'=>'ex: #ABC']) }}
                                @error('tag_name')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tag_type', 'Type') }}
                                {{ Form::select('tag_type',['1'=>'1- Forum hashtag','2'=>'2- Blog hashtag'],null,['class'=>'form-control w-25']) }}
                                @error('tag_type')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection


