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
                                    Material
                                </h4>
                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <a href="{{ route('admin.course-material.create') }}" class="btn btn-sm btn-success">
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
                                        Name
                                    </th>
                                    <th>
                                        Photo
                                    </th>
                                    <th>
                                        File
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
                                        Material Origin
                                    </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($courseMaterial as $value)
                                    <tr>
                                        <td class="goal-project">
                                            {{ $value->material_name }}
                                        </td>
                                        <td class="goal-project">
                                            <img
                                                src="{{ \Illuminate\Support\Facades\Storage::url($value->material_image) }}"
                                                width="50px;" height="60px;" alt="">
                                        </td>
                                        <td class="goal-project">
                                            {{ $value->material_file }}
                                        </td>
                                        <td class="goal-project">
                                            {{ $value->material_price }}
                                        </td>
                                        <td>
                                            {{ $value->translate('en')->material_description }}
                                        </td>
                                        <td>
                                            {{ $value->translate('en')->material_origin }}
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                   data-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="{{ route('admin.material.edit', $value->id) }}"
                                                       class="dropdown-item">
                                                        Edit
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                       data-url="{{ route('admin.material.destroy', $value->id) }}"
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
                            <div class="d-flex justify-content-center">
                                {{ $courseMaterial->links() }}
                            </div>
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
    <script>
        $('.delete-item').click(function () {
            const url = $(this).data('url');
            if (confirm('Do you want delete item?')) {
                axios.delete(url).then(response => {
                    location.reload();
                })
            }
        })
    </script>
@endpush
