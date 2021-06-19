@extends('admin.layout')
@section('content')
    <div class="container-fluid mt-5">
        <div class="text-center alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Make sure the <a href="{{ route('admin.certificate.index') }}" class="alert-link"><strong>Certificate</strong></a> already exists before adding the Subject!
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Subjects
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <a href="{{ route('admin.subject.create') }}" class="btn btn-sm btn-success">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                         stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                         class="css-i6dzq1">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="8" x2="12" y2="16"></line>
                                        <line x1="8" y1="12" x2="16" y2="12"></line>
                                    </svg>
                                    Add
                                </a>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mb-0" data-toggle="lists"
                             data-options="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                            <table id="data-table" class="table table-sm table-nowrap card-table">
                                <thead>
                                <tr>
                                    <th>
                                        <a href="#" class="text-muted ">
                                            Certificate
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted ">
                                            Subject Name
                                        </a>
                                    </th>
                                    <th>
                                        Background color
                                    </th>
                                    <th>
                                        Text color
                                    </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($subjects as $value)
                                    <tr>
                                        <td class="goal-project">
                                            {{ $value->certificate['certificate_name'] }}
                                        </td>
                                        <td class="goal-project">
                                            {{ $value->subject_name }}
                                        </td>
                                        <td class="goal-progress">
                                            <div
                                                style="width: 50px; height: 30px; background-color: {{ $value->subject_color_background }}">
                                            </div>
                                        </td>
                                        <td class="goal-progress">
                                            <div
                                                style="width: 50px; height: 30px;border: 1px solid black; background-color: {{ $value->subject_color_text }}">
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                   data-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="{{ route('admin.subject.edit', $value->id) }}"
                                                       class="dropdown-item">
                                                        Edit
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        onclick="itemDelete('{{ route('admin.subject.destroy', $value->id) }}')"
                                                        class="dropdown-item delete-item">
                                                            Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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
