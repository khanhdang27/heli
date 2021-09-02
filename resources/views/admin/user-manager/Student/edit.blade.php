@php
use App\Utilities\SelectionByClass;

use App\Models\Membership;
@endphp


@extends('admin.layout')
@section('content')
<!-- CARDS -->
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-xl-8">
            <!-- Goals -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="pr-2">
                            <button class="btn btn-outline-dark btn-sm" onclick="window.history.go(-1)">
                                <i class="fe fe-arrow-left"></i>
                            </button>
                        </div>
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Edit Student
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body">
                        {!! Form::open(['route' => ['admin.user-manager.student.update', $student->id],
                        'method'=> 'put','enctype' => 'multipart/form-data']) !!}
                        <div class="form-group ">
                            {{ Form::label('name', 'Name', ['class' => 'required']) }}
                            {{ Form::text('name', $student->user->name, ['class'=>'form-control', 'required']) }}
                        </div>
                        @error('name')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group ">
                            {{ Form::label('full_name', 'Full name', ['class' => 'required']) }}
                            {{ Form::text('full_name', $student->full_name, ['class' => 'form-control', 'required']) }}
                        </div>
                        @error('full_name')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group ">
                            {{ Form::label('day_of_birth', 'Date of birth', ['class' => 'required']) }}
                            {{ Form::date('day_of_birth', $student->day_of_birth, ['class' => 'form-control', 'required']) }}
                        </div>
                        @error('day_of_birth')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group ">
                            {{ Form::label('phone_no', 'Phone', ['class' => 'required']) }}
                            {{ Form::text('phone_no', $student->phone_no, ['class' => 'form-control', 'required']) }}
                        </div>
                        @error('phone_no')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            {{ Form::label('membership', 'Membership Lever', ['class' => 'required']) }}
                            {{ Form::select('membership',
                                    array_filter(SelectionByClass::getValues(Membership::class,'name','id')) ,
                                    $student->user->membership->id, ['class' => 'form-control', 'required']) }}
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