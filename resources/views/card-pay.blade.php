@extends('layout.app')
@section('title','Team Page')
@section('content')
<div class="py-5 position-relative">
    <div class="p-4 m-auto bg-secondary position-absolute card-pay card-before">
        <div class="d-flex justify-content-between align-items-center">
            <div>Featured</div>
            <img src="{{asset('images/ic/card-pay.svg')}}" width="40">
        </div>
        <div class="mb-3">
            {{ Form::label('card_num',"CARD NUMBER",['style'=>'font-size: 12px']) }}
            {{ Form::text('card_num',null,['class'=>'form-control']) }}
        </div>
        <div class="d-flex justify-content-between">
            <div class="w-50">
                {{ Form::label('card_holder',"CARD HOLDER") }}
                {{ Form::text('card_holder',null,['class'=>'form-control']) }}
            </div>
            <div class="w-25">
                {{ Form::label('mm_yy',"EXPIRES",['style'=>'font-size: 12px']) }}
                <div class="d-flex">
                    {{ Form::text('mm',null,['class'=>'form-control mr-1','placeholder'=>'mm']) }}
                    {{ Form::text('yy',null,['class'=>'form-control','placeholder'=>'yy']) }}
                </div>
            </div>
        </div>
    </div>
    <div class="border mx-auto bg-secondary card-pay">
        <div style="height: 50px" class="bg-dark mb-5 mt-3">
        </div>
        <div class="d-flex justify-content-end p-4">
            <div class="w-25">
                {{ Form::label('cvc',"CVC/CVV") }}
                <div class="d-flex">
                    {{ Form::text('mm',null,['class'=>'form-control']) }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
