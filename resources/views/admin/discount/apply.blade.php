@php

$array_column = $courseDiscount->toArray();

@endphp


@extends('admin.layout')
@section('content')
<div class="container-fluid mt-5">
    {{-- @dd($array_column, $courses) --}}
    <div class="row">
        <div class="col-12">
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
                                Discounts - {{ $discount->name }} from {{ $discount->start_date }} to
                                {{ $discount->end_date }}
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => ['admin.discount.apply-courses', $discount->id], 'method'=> 'put']) !!}
                    <div class=" mb-0 " data-toggle="lists"
                        data-options="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                        <table id="data-table" class="table table-sm table-nowrap card-table">
                            <thead>
                                <tr>
                                    <th class="c-10">#</th>
                                    <th class="c-20 text-overflow-ellipsis">
                                        Name
                                    </th>
                                    <th class="c-20">
                                        <a href="#" class="text-muted">
                                            Price
                                        </a>
                                    </th>
                                    <th class="c-40 text-overflow-ellipsis">
                                        Description
                                    </th>
                                    <th class="c-10">
                                        Discount
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($courses as $value)
                                <tr>
                                    <td class="c-10">
                                        {{ Form::checkbox('course_id[]', $value->id, in_array($value->id, array_column($array_column['data'], 'course_id'))) }}
                                    </td>
                                    <td class="c-20 text-overflow-ellipsis">
                                        {{ $value->course_name }}
                                    </td>
                                    <td class="c-20">
                                        $HK {{ $value->course_price }}
                                    </td>
                                    <td class="c-40 text-overflow-ellipsis">
                                        {{ $value->course_description }}
                                    </td>
                                    <th class="c-10">
                                        {{ Form::number( 'discount_'.$value->id, $courseDiscount->firstWhere('course_id',$value->id)->discount_value ?? null, ['class'=>'form-control']) }}
                                        @error('discount_'.$value->id)
                                        <div class="alert text-danger">{{ $message }}</div>
                                        @enderror
                                    </th>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $courses->render() !!}
                        {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div> <!-- / .row -->
</div>
@endsection

@push('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" id="stylesheetDark">
@endpush
@push('js')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script src="{{ asset('js/admin/delete_data_item.js')}}"></script>

@endpush