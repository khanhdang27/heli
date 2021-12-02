@extends('admin.layout')
@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <!-- Goals -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Student Examination
                            </h4>
                        </div>
                        <div class="ml-auto col-auto">

                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="table-responsive mb-0" data-toggle="lists"
                        data-options="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                        <table id="data-table" class="table table-sm table-nowrap card-table">
                            <thead>
                                <tr>
                                    <th class="c-30">
                                        Student Course Code
                                    </th>
                                    <th>
                                        Examination
                                    </th>
                                    <th>
                                        Quiz set
                                    </th>
                                    <th>
                                        Student name
                                    </th>
                                    <th>
                                        Reviewed
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($exam_details as $value)
                                <tr>
                                    <td class="c-30 text-overflow-ellipsis">
                                        {{ $value->student_course_id }}
                                    </td>
                                    <td>
                                        {{ $value->exam_id }}
                                    </td>
                                    <td>
                                        {{ $value->quiz_id }}
                                    </td>
                                    <td>
                                        {{ $value->studentCourse->student->name }}
                                    </td>
                                    <td>
                                        @if ($value->reviewed)
                                        <h4>
                                            <span class="badge badge-pill badge-secondary">
                                                Reviewed
                                            </span>
                                        </h4>
                                        @else
                                        <h4>
                                            <span class="badge badge-pill badge-success">
                                                New
                                            </span>
                                        </h4>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a class="btn btn-outline-primary btn-sm" href="{{ route('admin.student-examination.grade', [
                                                        'student_course'=> $value->student_course_id,
                                                        'exam'=> $value->exam_id,
                                                        'quiz'=> $value->quiz_id
                                                    ]) }}" class="dropdown-item">
                                            <i class="fe fe-edit-2 text-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $exam_details->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div>
@endsection
