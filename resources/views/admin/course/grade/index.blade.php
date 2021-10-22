@php

use App\Models\Lecture;
use App\Models\Examination;
@endphp

@extends('admin.layout')
@section('content')
    <div class="container-fluid mt-5">

        <div class="row">
            <div class="col-12">
                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="pr-2">
                                <a class="btn btn-outline-dark btn-sm"
                                    href="{{ route('admin.course.lecture.list', ['course' => $course->id]) }}">
                                    <i class="fe fe-arrow-left"></i>
                                </a>
                            </div>
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Grade
                                </h4>
                            </div>
                            <div class="ml-auto col-auto">
                                @can('course-create')
                                    <!-- Button -->
                                    <a href="{{ route('admin.course.grade.create', ['course' => $course->id, 'exam' => $exam->id]) }}"
                                        class="btn btn-sm btn-success">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg>
                                        Add Grade
                                    </a>
                                @endcan
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class=" mb-0 " data-toggle="lists">
                            <table id="data-table" class="table table-sm table-nowrap card-table">
                                <thead>
                                    <tr>
                                        <th>
                                            Index
                                        </th>
                                        <th>
                                            Score
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($grades as $grade)
                                        <tr>
                                            <td>
                                                {{ $grade->lecture_index }}
                                            </td>
                                            <td>
                                                {{ $grade->score }}
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{ route('admin.course.grade.edit', ['course' => $course, 'exam' => $exam, 'grade' => $grade]) }}"
                                                            class="dropdown-item">
                                                            Update
                                                        </a>
                                                        @can('course-delete')
                                                            <a href="javascript:void(0)"
                                                                onclick="itemDelete('{{ route('admin.course.grade.destroy', ['course' => $course, 'exam' => $exam, 'grade' => $grade]) }}')"
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
                            {{ $grades->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Index</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.course.lecture.indexing', $course) }}">
                        @csrf
                        <input name="id" type="text" class="form-control" id="element-id" hidden>
                        <input name="type" type="text" class="form-control" id="element-type" hidden>
                        <div class="form-group">
                            <label for="element-name" class="col-form-label">Element</label>
                            <input name="name" type="text" class="form-control" id="element-name" readonly>
                        </div>
                        <div class="form-group">
                            <label for="element-index" class="col-form-label">Index</label>
                            <input name="index" type="number" class="form-control" id="element-index"></input>
                        </div>
                        <div class="d-flex">
                            <button type="submit" class="ml-auto btn btn-primary"> Update </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
    <script src="{{ asset('js/admin/delete_data_item.js') }}"></script>
    <script>
        $(document).ready(function() {
            console.log("ready!");
            $('#exampleModalCenter').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var name = button.data('name') // Extract info from data-* attributes
                var id = button.data('id') // Extract info from data-* attributes
                var type = button.data('type') // Extract info from data-* attributes
                var index = button.data('index') // Extract info from data-* attributes
                var modal = $(this)
                console.log('name :>> ', name);
                modal.find('#element-name').val(name)
                modal.find('#element-id').val(id)
                modal.find('#element-type').val(type)
                modal.find('#element-index').val(index)
            })
        });
    </script>
@endpush
