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
                            <a href="{{ route('admin.price-tag.index') }}" class="btn btn-outline-dark btn-sm">
                                <i class="fe fe-arrow-left"></i>
                            </a>
                        </div>
                        <div>
                            <!-- Title -->

                            <h4 class="card-header-title">
                                Create Price Tag
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body" id="priceTag">
                    {!! Form::open([ 'method'=>'get' , 'url'=> '#', 'enctype' =>
                    'multipart/form-data','v-on:submit.prevent'=>'addPriceTag', 'id' => 'addPriceTag']) !!}
                    <div class="row">
                        <div class="form-group col-lg-6">
                            {{ Form::label('course_id', 'Course') }}
                            {{ Form::select('course_id',
                                            ['1'=>1,'2'=>2],
                                            null,
                                            ['class' => 'form-control','v-model'=>'course_id'] ) }}
                            @error('course_id')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            {{ Form::label('discount_id', 'Discount') }}
                            {{ Form::select('discount_id',
                                            ['1'=>1,'2'=>2],
                                            null,
                                            ['class' => 'form-control', 'v-model' =>'discount_id'] ) }}
                            @error('discount_id')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table" class="table table-sm">
                            <thead>
                                <tr class="text-center">
                                    <th>
                                        Group
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Discount
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>
                                        {{ Form::text('membership_id',1,['class'=>'form-control', 'readonly'=>'true']) }}
                                    </td>
                                    <td>
                                        {{ Form::text('price', 5,['class'=>'form-control']) }}
                                    </td>
                                    <td>
                                        {{ Form::text('discount', 3,['class'=>'form-control']) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ Form::text('membership_id',2,['class'=>'form-control', 'readonly'=>'true']) }}
                                    </td>
                                    <td>
                                        {{ Form::text('price', 6,['class'=>'form-control']) }}
                                    </td>
                                    <td>
                                        {{ Form::text('discount', 4,['class'=>'form-control']) }}
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div> <!-- / .row -->
</div>
<script type="application/javascript">
    var newPriceTag = new Vue({
        el: "#priceTag",
        data: {
            'course_id': 0,
            'discount_id': 0,
            'membership_course' : [],
            'course_discount' : []
        },
        methods:{
            addPriceTag: function (){
                const formData = new FormData(document.getElementById("addPriceTag"));
                let membership_id;

                for (let [key, val] of formData.entries()) {
                    if (key === 'membership_id')
                        membership_id = val;
                    if (key === 'price') {
                        let membership_course = {
                            membership_id: membership_id,
                            price: val
                        }
                        this.membership_course.push(membership_course)
                    }
                    if (key === 'discount') {
                        let membership_discount = {
                            membership_id: membership_id,
                            discount: val
                        }
                        this.course_discount.push(membership_discount)
                    }
                }

            }
        }
    });
</script>
@endsection