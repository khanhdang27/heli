@extends('admin.layout')
@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="mb-1">
                <button class="btn btn-success" data-toggle="collapse" href="#Filter" role="button"
                    aria-expanded="false" aria-controls="Filter">Filter
                </button>
            </div>
            <div class="card collapse" id="Filter">
                <div class="card-body">
                    <form action="" method="get">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ request('name') }}">
                            </div>
                        </div>
                        <div class="form-row mt-2 justify-content-end">
                            <button class="btn btn-primary">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Goals -->
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Examination
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="table-responsive mb-0 " data-toggle="lists"
                        data-options="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                        <table id="course-table" class="table table-sm card-table h-100">
                            <thead>
                                <tr>
                                    <th class="c-30">
                                        Course name
                                    </th>
                                    <th class="c-20">
                                        Tutor
                                    </th>
                                    <th class="c-50">
                                        Description
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($courses as $value)
                                <tr>
                                    <td class="c-30">
                                        {{ $value->course_name }}
                                    </td>
                                    <td class="c-20">
                                        {{ $value->tutor->full_name }}
                                    </td>
                                    <td class="c-50">
                                        {{ $value->course_description }}
                                    </td>
                                    <td class="text-right">
                                        @if($value->tutor->full_name != 'Tutor Demo')
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{ route('admin.manage-examination', $value->id) }}"
                                                    class="dropdown-item">
                                                    Manage examination
                                                </a>
                                            </div>
                                        </div>
                                        @endif
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $courses->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- / .row -->
</div>
@endsection

@push('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" id="stylesheetDark">
<style>

</style>
@endpush
@push('js')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/admin/delete_data_item.js')}}"></script>
<script>
    $('#course-table').DataTable({
            searching: false,
            ordering: false,
            paging: false,
            // responsive: true,
            scrollX: true,
            info: false,

        });
</script>
@endpush