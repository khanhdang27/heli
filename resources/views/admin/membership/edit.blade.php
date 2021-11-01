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
                            <a href="{{ route('admin.membership.index') }}" class="btn btn-outline-dark btn-sm" >
                                <i class="fe fe-arrow-left"></i>
                            </a>
                        </div>
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Edit Membership
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body">
                        {!! Form::open(['route' => ['admin.membership.update', $membership->id], 'method'=> 'put']) !!}
                        <div class="form-group">
                            {{ Form::label('name', 'name') }}
                            {{ Form::text('name', $membership->name,['class' => 'form-control'] ) }}
                            @error('name')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('base_point', 'base_point') }}
                            {{ Form::text('base_point', $membership->base_point,['class' => 'form-control'] ) }}
                            @error('base_point')
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