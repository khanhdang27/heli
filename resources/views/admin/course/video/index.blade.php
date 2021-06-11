@extends('admin.layout')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12">
                <!-- Goals -->
                <div class="card">
                    <div class="card-header justify-content-end">
                        <h4>Video list</h4>
                        <div class="col-md-3 d-flex justify-content-end">
                            <a href="{{ route('admin.course.video.create', $course->id) }}"
                               class="btn btn-sm btn-primary">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                     stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                     class="css-i6dzq1">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                                Upload
                            </a>
                        </div>

                    </div>
                    <div class="card-body">

                        <!-- List -->
                        <ul class="list-group list-group-lg list-group-flush list my-n4">
                            @foreach($course->videos as $value)
                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <a href="#!" class="avatar avatar-lg">
                                         <span class="avatar-title rounded bg-white text-secondary">
                                             <span class="fe fe-film"></span></span>
                                            </a>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="mb-1 name">
                                                <a href="#!">{{ $value->translate('en')->course_video_name }}</a>
                                            </h4>

                                            <!-- Time -->
                                            <p class="card-text small text-muted">
                                                {{ $value->created_at->toDateTimeString() }}
                                            </p>

                                        </div>
                                        <div class="col-auto">
                                            <!-- Button -->
                                            <a href="{{ route('admin.course.video.download', [$course->id, $value->id]) }}"
                                               class="btn btn-sm btn-white d-none d-md-inline-block">
                                                Download
                                            </a>
                                        </div>
                                        <div class="col-auto">

                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#!" class="dropdown-item">
                                                        View
                                                    </a>
                                                    <a href="{{ route('admin.course.video.edit', [$course->id, $value->id]) }}"
                                                       class="dropdown-item">
                                                        Edit
                                                    </a>
                                                    <button class="dropdown-item delete-item"
                                                            data-url="{{ route('admin.course.video.destroy', [$course->id, $value->id]) }}">
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- / .row -->
                                </li>
                            @endforeach
                        </ul>

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
                    $(this).closest('li').remove();
                });
            }
        })
    </script>
@endpush
