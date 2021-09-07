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
                            <a href="{{ route('admin.price-tag.index') }}" class="btn btn-outline-dark btn-sm" >
                                <i class="fe fe-arrow-left"></i>
                            </a>
                        </div>
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Edit Price
                            </h4>
                            <h5 class="text-dark">
                                {{$price_tag->membershipCourses->course->course_name}} -
                                {{$price_tag->membershipCourses->membership->name}}
                            </h5>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => ['admin.price-tag.update', $price_tag->id], 'method'=> 'put']) !!}
                    <div class="row">
                        <div class="form-group col-3">
                            {{ Form::label('recommend', 'Recommend') }}
                            <br>
                            {{ Form::checkbox('recommend', true, $price_tag->recommended == 1, ['data-toggle'=>"toggle"]) }}

                        </div>
                        <div class="form-group col-3">
                            {{ Form::label('welcomes', 'Welcomes') }}
                            <br>
                            {{ Form::checkbox('welcomes', true, $price_tag->welcomes == 1, ['data-toggle'=>"toggle"]) }}

                        </div>
                        <div class="form-group col-3">
                            {{ Form::label('hot', 'Hot') }}
                            <br>
                            {{ Form::checkbox('hot', true, $price_tag->hot == 1, ['data-toggle'=>"toggle"]) }}

                        </div>
                        <div class="form-group col-3">
                            {{ Form::label('publish', 'Publish') }}
                            <br>
                            {{ Form::checkbox('publish', true, $price_tag->publish == 1, ['data-toggle'=>"toggle"]) }}

                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('description', 'Description') }}
                        {{ Form::textarea('description', $price_tag->description, ['class' => 'form-control', 'rows'=>3] ) }}

                    </div>
                    @if(!empty($price_tag->courseDiscounts))
                    <div class="form-group">
                        {{ Form::label('discount', 'Discount') }}
                        {{ Form::number('discount', $price_tag->courseDiscounts->discount_value,
                                ['class' => 'form-control']) }}

                    </div>
                    @endif
                    <div class="form-group">
                        {{ Form::label('price_value', 'Description') }}
                        {{ Form::number('price_value', $price_tag->membershipCourses->price_value,
                            ['class' => 'form-control',]) }}

                    </div>

                    {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div>
@endsection