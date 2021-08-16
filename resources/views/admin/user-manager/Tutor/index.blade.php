@extends('admin.layout')
@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
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
                                Tutors
                            </h4>
                        </div>
                        <div class="col-auto">
                            <!-- Button -->
                            <a href="{{ route('admin.tutor.create') }}" class="btn btn-sm btn-success">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
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
                                        Photo
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th> Active/Inactive</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($tutors as $value)
                                <tr>
                                    <td>
                                        @if(!empty($value->user->avatar))
                                        <img type="image/jpg" src="{{asset('/file/'.$value->user->avatar->id)}}"
                                            width="75" height="75" />
                                        @else
                                        <img src="{{asset('images/photo_default.svg')}}" width="75">
                                        @endif
                                    </td>
                                    <td class="goal-project align-middle text-wrap">
                                        {{ $value->full_name }}
                                    </td>
                                    <td class="goal-status align-middle text-wrap">
                                        {{ $value->user->email }}
                                    </td>
                                    <td class="goal-status align-middle">
                                        @if($value->user->active == 0)
                                        <a href="{{ route('admin.user-manager.change-status', $value->user->id) }}"
                                            class="btn btn-danger py-0">Inactive</a>
                                        @else
                                        <a href="{{ route('admin.user-manager.change-status', $value->user->id) }}"
                                            class="btn btn-success py-0">Active</a>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{ route('admin.tutor.edit', $value->id) }}"
                                                    class="dropdown-item">
                                                    Edit
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $tutors->links() }}
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
<script src="{{ asset('js/admin/delete_data_item.js')}}"></script>
@endpush