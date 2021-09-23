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
                Post Forum
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
                  <th class="c-30">
                    Title
                  </th>
                  <th>
                    User
                  </th>
                  <th>
                    Created at
                  </th>
                  <th>
                    Deleted at
                  </th>
                  <th></th>
                </tr>
              </thead>
              <tbody class="list">
                @foreach($posts as $value)
                <tr>
                  <td class="c-30 text-overflow-ellipsis">
                    {{$value->title}}
                  </td>
                  <td>
                    {{$value->user->name}}
                  </td>
                  <td>
                    {{$value->created_at}}
                  </td>
                  @if ($value->deleted_at)
                  <td class="badge badge-danger">
                    {{$value->deleted_at}}
                  </td>
                  @else
                  <td></td>
                  @endif

                  <td class="text-right">
                    <div class="dropdown">
                      <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('admin.forum.review', $value) }}" class="dropdown-item delete-item">
                          Review
                        </a>
                        @can('forum-delete')
                        @if ($value->deleted_at)
                        <a href="javascript:void(0)" onclick="itemRestore('{{ route('admin.forum.restore', $value) }}')"
                          class="dropdown-item delete-item">
                          Restore
                        </a>
                        @else
                        <a href="javascript:void(0)" onclick="itemDelete('{{ route('admin.forum.destroy', $value) }}')"
                          class="dropdown-item delete-item">
                          Delete
                        </a>
                        @endif
                        @endcan
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{$posts->links()}}
          </div>
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
<script src="{{ asset('js/admin/delete_data_item.js')}}"></script>

<script type="application/javascript">
  function itemRestore(url) {

  var choose = confirm('Do you want restore item?');

      if (choose) {
          axios.post(url, {}).then(response => {
              if (response.status == 200) {
                  location.reload();
              } else {
                  alert(response.message);
              }
          })
      }
  }
</script>


@endpush