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
                                    href="{{ route('admin.course.lecture.list', ['course' => $course]) }}">
                                    <i class="fe fe-arrow-left"></i>
                                </a>
                            </div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Quizzes
                            </h4>
                            <div class="ml-auto col-auto">
                                @can('document-create')
                                    <!-- Button -->
                                    <a href="{{ route('admin.course.quiz.create', ['course' => $course->id, 'exam' => $exam]) }}"
                                        class="btn btn-sm btn-success">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg>
                                        Add
                                    </a>
                                @endcan
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mb-0" data-toggle="lists">
                            <table id="data-table" class="table table-sm table-nowrap card-table">
                                <thead>
                                    <tr>
                                        <th class="c-20">
                                            Version
                                        </th>
                                        <th class="c-40">
                                            Created
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($quizzes as $value)
                                        <tr>
                                            <td class="c-20 text-overflow-ellipsis">
                                                {{ $value->version }}
                                            </td>
                                            <td class="c-40 text-overflow-ellipsis">
                                                {{ $value->created_at }}
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        @can('course-edit')
                                                            <a href="{{ route('admin.course.quiz.edit', ['course' => $course->id, 'exam' => $exam, 'quiz' => $value]) }}"
                                                                class="dropdown-item">
                                                                Edit
                                                            </a>
                                                            <a href="{{ route('admin.course.question.list', ['course' => $course->id, 'exam' => $exam, 'quiz' => $value]) }}"
                                                                class="dropdown-item">
                                                                Questions
                                                            </a>
                                                        @endcan
                                                        @can('course-delete')
                                                            <a href="javascript:void(0)"
                                                                onclick="itemDelete('{{ route('admin.course.quiz.destroy', ['course' => $course->id, 'quiz' => $value->id]) }}')"
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
                            <div class="d-flex justify-content-center">
                                {{ $quizzes->render() }}
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
