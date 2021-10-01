@extends('admin.layout')
@section('content')
    <div class="container-fluid mt-5">

        <div class="row">
            <div class="col-12">
                <div class="mb-1">
                    <button class="btn btn-success" data-toggle="collapse" href="#Filter" role="button" aria-expanded="false"
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
                            <div class="pr-2">
                                <button class="btn btn-outline-dark btn-sm" onclick="window.history.go(-1)">
                                    <i class="fe fe-arrow-left"></i>
                                </button>
                            </div>
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Courses Schedule
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class=" mb-0 " data-toggle="lists"
                            data-options="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                            <table id="data-table" class="table table-sm table-nowrap card-table">
                                <thead>
                                    <tr>
                                        <th>
                                            Session
                                        </th>
                                        <th>
                                            Date
                                        </th>
                                        <th>
                                            Tutor
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($schedules as $schedule)
                                        <tr>
                                            <td class="goal-project">
                                                {{ $schedule->studySession->session_name }}
                                            </td>
                                            <td class="goal-project">
                                                {{ $schedule->date }}
                                            </td>
                                            <td>
                                                {{ $schedule->tutor->full_name }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $schedules->render() }}
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
