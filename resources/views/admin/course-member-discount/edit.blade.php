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
                    <div class="form-group">
                        {{ Form::label('recommend', 'Recommend') }}
                        <br>
                        {{ Form::radio('recommend', true, $price_tag->recommended == 1, ['id'=>'recommend_yes']) }} <label for="recommend_yes">yes</label>
                        <br>
                        {{ Form::radio('recommend', false, $price_tag->recommended == 0,['id'=>'recommend_no']) }} <label for="recommend_no">no</label>
                        @error('recommend')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        {{ Form::label('description', 'Description') }}
                        {{ Form::textarea('description', $price_tag->description, ['class' => 'form-control', 'rows'=>3] ) }}
                        @error('description')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    @if(!empty($price_tag->courseDiscounts))
                        <div class="form-group">
                            {{ Form::label('discount', 'Discount') }}
                            {{ Form::number('discount', $price_tag->courseDiscounts->discount_value,
                                ['class' => 'form-control']) }}
                            @error('discount')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    @endif
                    <div class="form-group">
                        {{ Form::label('price_value', 'Description') }}
                        {{ Form::number('price_value', $price_tag->membershipCourses->price_value,
                            ['class' => 'form-control',]) }}
                        @error('price_value')
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

