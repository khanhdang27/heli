@php
use App\Models\Course;
@endphp
@extends('admin.layout')
@section('content')
    <div class="container-fluid mt-5">
        <div class="text-center alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Make sure the <a href="{{ route('admin.user-manager.tutor') }}"
                class="alert-link"><strong>Tutor</strong></a>
            already exists before adding the Course!
        </div>
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
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Courses
                                </h4>
                            </div>
                            <div class="ml-auto col-auto">
                                <!-- Button -->
                                <a href="{{ route('admin.course.create') }}" class="btn btn-sm btn-success">
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
                    <div class="card-body h-100">
                        <div class="table-responsive mb-0" data-toggle="lists">
                            <table id="course-table" class="table table-sm h-100 display w-100">
                                <thead>
                                    <tr>
                                        <th class="c-30">
                                            Name
                                        </th>
                                        <th class="c-10">
                                            Price
                                        </th>
                                        <th class="c-50">
                                            Description
                                        </th>
                                        <th class="c-10"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($courses as $value)
                                        <tr>
                                            <td class="c-30">
                                                {{ $value->course_name }}
                                            </td>
                                            <td class="c-10">
                                                {{ $value->course_price }}
                                            </td>
                                            <td class="c-50">
                                                {{ $value->course_description }}
                                            </td>
                                            <td class="c-10 text-right">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        @if ($value->type == Course::RECORD)
                                                            <a href="{{ route('admin.course.lecture.list', $value->id) }}"
                                                                class="dropdown-item">
                                                                Manage Lecture
                                                            </a>
                                                            <a href="javascript:void(0)" class="dropdown-item delete-item"
                                                                data-toggle="modal" data-target="#exampleModalCenter"
                                                                data-id_element="{{ $value->id }}"
                                                                data-url="{{ route('admin.course.related.list', ['course' => $value->id]) }}">
                                                                Related Lecture
                                                            </a>
                                                        @endif
                                                        @if ($value->type == Course::LIVE)
                                                            <a href="{{ route('admin.course.room.list', $value->id) }}"
                                                                class="dropdown-item">
                                                                Manage Room Live
                                                            </a>
                                                        @endif
                                                        <a href="{{ route('admin.price-tag.index') }}"
                                                            class="dropdown-item">
                                                            Publish
                                                        </a>
                                                        <a href="{{ route('admin.course.edit', $value->id) }}"
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
                            {{ $courses->links() }}
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
                    <h5 class="modal-title" id="exampleModalLabel">Related Lecture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.course.related') }}">
                        @csrf
                        <sub>
                            <span class='text-danger'> ( 1 ) </span> Related of this course is:
                            <strong id="default-related">
                            </strong>
                        </sub>
                        <br>
                        <sub>
                            if your want add more related please retype <span class='text-danger'> ( 1 ) </span> course.
                        </sub>
                        <input name="course_id" type="text" class="form-control" id="course-id" hidden>
                        <div class="form-group">
                            <label for="course-related" class="col-form-label">Related</label>
                            <select id="course-related" class="option-multiple-select" name="course_related[]"
                                multiple="multiple">
                            </select>
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
            $('#exampleModalCenter').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id_element') // Extract info from data-* attributes
                var url = button.data('url') // Extract info from data-* attributes
                var modal = $(this)
                modal.find('#course-id').val(id)
                axios.get(url).then(
                    function(response) {
                        console.log('response :>> ', response);
                        modal.find('#default-related').text(response.data.courseNames)
                    }
                )

            })

            $("#course-related").select2({
                minimumInputLength: 3,
                ajax: {
                    url: "{{ route('admin.course.query') }}",
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(obj) {
                                return {
                                    id: obj.id,
                                    text: obj.course_name
                                };
                            })
                        };
                    }
                }
            });
        });
    </script>
@endpush
