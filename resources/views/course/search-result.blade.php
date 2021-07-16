@extends('layout.app')

@section('title','Find course')

@section('content')
    <hr class="m-0">
    <div class="body-content">
        <div class="container-fluid pt-5 pl-0 pr-0">
            <div class="container-fluid p-0 ">
                <div class="container-fluid">
                    <x-product.course-list :courses=$courses typeOfUI="normal"></x-product.course-list>
                </div>
            </div>
        </div>
    </div>
@endsection


