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
                                    Edit News
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open(['route' => ['admin.news.update', $news->id], 'method'=> 'put', 'enctype' => 'multipart/form-data']) !!}
                            @csrf
                            <div class="form-group">
                                {{ Form::label('news_title', 'News title') }}
                                {{ Form::text('news_title', $news->news_title, ['class' => 'form-control']) }}
                                @error('news_title')
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
