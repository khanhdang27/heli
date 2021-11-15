@extends('admin.layout')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <button class="btn btn-success" data-toggle="collapse" href="#Filter" role="button"
                            aria-expanded="false"
                            aria-controls="Filter">Filter
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
                        <div class="d-flex align-items-center">
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Students
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mb-0" data-toggle="lists"
                             data-options="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                            <table id="data-table" class="table table-sm table-nowrap card-table">
                                <thead>
                                <tr>
                                    <th class="c-10">
                                        Photo
                                    </th>
                                    <th class="c-20">
                                        Name
                                    </th>
                                    <th class="c-30">
                                        Email
                                    </th>
                                    <th class="">
                                        Current form / Education level
                                    </th>
                                    <th class="c-10">
                                        Active/Inactive
                                    </th>
                                    <th class="c-10"></th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach ($students as $value)
                                    <tr>
                                        <td class="">
                                            @if (!empty($value->user->avatar))
                                                <img type="
                                                image/jpg" src="{{ asset('/file/' . $value->user->avatar->id) }}"
                                                     width="75" height="75"/>
                                            @else
                                                <img src="{{ asset('images/photo_default.svg') }}" width="75">
                                            @endif
                                        </td>
                                        <td class="">
                                            {{ $value->user->name }}
                                        </td>
                                        <td class="">
                                            {{ $value->user->email }}
                                        </td>
                                        <td class="">
                                            {{ $value->education_level }}
                                        </td>
                                        <td class="">
                                            @if ($value->user->active == 0)
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
                                                    <a href="{{ route('admin.user-manager.student.edit', $value->id) }}"
                                                       class="dropdown-item">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('admin.user-manager.student.editToken', ['wallet' => $value->user->wallet->id]) }}"
                                                       class="dropdown-item">
                                                        Token
                                                    </a>
                                                    <a href="{{ route('admin.user-manager.student.depositHistory', $value->user->wallet->id) }}"
                                                       class="dropdown-item">
                                                        Token purchase history
                                                    </a>
                                                    <a href="{{ route('admin.user-manager.student.paymentHistory', $value->user->id) }}"
                                                       class="dropdown-item">
                                                        Course purchase history
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $students->links() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection


@push('js')

    <script src="{{ asset('js/admin/delete_data_item.js') }}"></script>
@endpush
