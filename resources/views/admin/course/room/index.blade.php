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
                                <a class="btn btn-outline-dark btn-sm" href="{{ route('admin.course.index') }}">
                                    <i class="fe fe-arrow-left"></i>
                                </a>
                            </div>
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Course Rooms
                                </h4>
                            </div>
                            <div class="ml-auto col-auto">

                                <!-- Button -->
                                <a href="{{ route('admin.course.room.create', $course->id) }}"
                                    class="btn btn-sm btn-success">
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
                        <div class=" mb-0 " data-toggle="lists"
                            data-options="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                            <table id="data-table" class="table table-sm table-nowrap card-table">
                                <thead>
                                    <tr>
                                        <th>
                                            Session
                                        </th>
                                        <th>
                                            Start Date
                                        </th>
                                        <th>
                                            Number Session
                                        </th>
                                        <th>
                                            Number Member
                                        </th>
                                        <th>
                                            Number Member Limit
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($rooms as $room)
                                        <tr>
                                            <td class="goal-project">
                                                {{ $room->studySession->session_name }}
                                            </td>
                                            <td class="goal-project">
                                                {{ $room->start_date }}
                                            </td>
                                            <td>
                                                {{ $room->number_session }}
                                            </td>
                                            <td>
                                                {{ $room->number_member }}
                                            </td>
                                            <td>
                                                {{ $room->number_member_maximum }}
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        @can('course-edit')
                                                            <a href="{{ route('admin.course.room.scheduler', ['course' => $course, 'room' => $room]) }}"
                                                                class="dropdown-item">
                                                                Scheduler
                                                            </a>
                                                            <a href="{{ route('admin.course.room.edit', ['course' => $course, 'room' => $room]) }}"
                                                                class="dropdown-item">
                                                                Edit
                                                            </a>
                                                        @endcan
                                                        @can('course-delete')

                                                            <a href="javascript:void(0)"
                                                                onclick="itemDelete('{{ route('admin.course.room.destroy', ['course' => $course, 'room' => $room]) }}')"
                                                                class="dropdown-item delete-item">
                                                                Delete
                                                            </a>
                                                        @endcan
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $rooms->render() }}
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
