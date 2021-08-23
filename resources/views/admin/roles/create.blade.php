@extends('admin.layout')


@section('content')

<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left py-3">
                <h2>Create New Role</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.roles.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {!! Form::open(array('route' => 'admin.roles.store','method'=>'POST')) !!}
    <div class="row mt-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>

@endsection