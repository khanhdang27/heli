
@extends('admin.layout')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12">
                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Discounts - {{ $discount->name }} from {{ $discount->start_date }} to {{ $discount->end_date }}
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => ['admin.discount.apply-courses', $discount->id], 'method'=> 'put'])  !!}
                        <div class=" mb-0 " data-toggle="lists"
                             data-options="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                            <table id="data-table" class="table table-sm table-nowrap card-table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted">
                                            Price
                                        </a>
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Discount
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($courses as $value)
                                    <tr>
                                        <td>
                                            {{ Form::checkbox( 'course_id[]', $value->id, false, ['class'=>'form-control']) }}
                                        </td>
                                        <td class="goal-project">
                                            {{ $value->course_name }}
                                        </td>
                                        <td class="goal-project">
                                            {{ $value->course_price }}
                                        </td>
                                        <td>
                                            {{ $value->translate('en')->course_description }}
                                        </td>
                                        <th>
                                            {{ Form::number( 'discount_'.$value->id, null, ['class'=>'form-control']) }}
                                            @error('discount_'.$value->id)
                                                <div class="alert text-danger">{{ $message }}</div>
                                            @enderror
                                        </th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
