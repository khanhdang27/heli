@php
use App\Models\Tag;
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
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Tags
                                </h4>
                            </div>
                            <div class="ml-auto col-auto">
                                @can('blog-create')
                                    <!-- Button -->
                                    <a href="{{ route('admin.tag.create') }}" class="btn btn-sm btn-success">
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
                        <div class="table-responsive mb-0" data-toggle="lists"
                            data-options="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                            <table id="data-table" class="table table-sm table-nowrap card-table">
                                <thead>
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Type
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($tags as $value)
                                        <tr>
                                            <td class="goal-project">
                                                {{ $value->tag_name }}
                                            </td>
                                            <td class="goal-project">

                                                {{ \Constants::TAG_TYPES[$value->tag_type] }}
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        @can('blog-edit')
                                                            <a href="{{ route('admin.tag.edit', $value->id) }}"
                                                                class="dropdown-item">
                                                                Edit
                                                            </a>
                                                        @endcan
                                                        @can('blog-delete')
                                                            <a href="javascript:void(0)"
                                                                onclick="itemDelete('{{ route('admin.tag.destroy', $value->id) }}')"
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
                            {{ $tags->links() }}
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
