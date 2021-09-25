@extends('admin.layout')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
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
                                    Members
                                </h4>
                            </div>
                            <div class="ml-auto col-auto">
                                <!-- Button -->
                                <a href="{{ route('admin.user-subscribe.create') }}" class="btn btn-sm btn-success">
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
                                        <th> Email</th>
                                        <th> Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($listMember as $member)
                                        <tr>
                                            <td class="goal-project">
                                                {{ $member['email_address'] }}
                                            </td>
                                            <td class="goal-project">
                                                @if ($member['status'] == 'subscribed')
                                                    <span class="text-success">●</span>
                                                    {{ $member['status'] }}
                                                @else
                                                    <span class="text-warning">●</span>
                                                    {{ $member['status'] }}
                                                @endif
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        @if ($member['status'] == 'subscribed')
                                                            {!! Form::open(['route' => 'admin.user-subscribe.unsubscribe', 'enctype' => 'multipart/form-data']) !!}
                                                            {{ Form::hidden('email', $member['email_address']) }}
                                                            {{ Form::submit('Unsubscribe', ['class' => 'dropdown-item']) }}
                                                            {!! Form::close() !!}
                                                        @else
                                                            <a class="dropdown-item">
                                                                Unsubscribe
                                                            </a>
                                                        @endif

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">

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
