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
                                <a class="btn btn-outline-dark btn-sm" href="{{route('admin.setting.index')}}">
                                    <i class="fe fe-arrow-left"></i>
                                </a>
                            </div>
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Edit Setting
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => ['admin.setting.update', $setting->key], 'method'=> 'put', 'enctype' =>
                            'multipart/form-data']) !!}
                        <div class="form-group">
                            {{ Form::label('key', 'Key') }}
                            {{ Form::text('key', $setting->key, ['class' => 'form-control', 'disabled']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('value', 'Value') }}
                            {{ Form::text('value', $setting->value, ['class' => 'form-control']) }}
                            @error('value')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
@endsection

