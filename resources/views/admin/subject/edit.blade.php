@extends('admin.layout')
@section('content')
@php
use App\Utilities\SelectionByClass;
@endphp
<!-- CARDS -->
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
            <!-- Goals -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="pr-2">
                            <a class="btn btn-outline-dark btn-sm" href="{{route('admin.subject.index')}}">
                                <i class="fe fe-arrow-left"></i>
                            </a>
                        </div>
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Edit Subject
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body">
                        {!! Form::open(['route' => ['admin.subject.update', $subject->id], 'method'=> 'put', 'enctype'
                        => 'multipart/form-data']) !!}
                        @csrf
                        <div class="form-group">
                            {{ Form::label('certificate_id', 'Certificate', ['class' => 'required']) }}
                            {{ Form::select('certificate_id',
                                array_filter(SelectionByClass::getValues(\App\Models\Certificate::class,'certificate_name', 'id'), function($var, $id)
                                    {
                                        return $id;
                                    }, ARRAY_FILTER_USE_BOTH)
                                ,$subject->certificate_id, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('subject_name:en', 'Name (English)', ['class' => 'required']) }}
                            {{ Form::text('subject_name:en', $subject->translate('en')->subject_name, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('subject_name:cn', 'Name (Traditional Chinese)', ['class' => 'required']) }}
                            {{ Form::text('subject_name:cn', $subject->translate('cn')->subject_name, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('subject_name:sc', 'Name (Simplify Chinese)', ['class' => 'required']) }}
                            {{ Form::text('subject_name:sc', $subject->translate('sc')->subject_name, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('subject_color_background', 'Color)') }}
                            {{ Form::color('subject_color_background', $subject->subject_color_background, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('subject_color_text', 'Color)') }}
                            {{ Form::color('subject_color_text', $subject->subject_color_text, ['class' => 'form-control']) }}
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
