@extends('admin.layout')
@section('content')
<div>
    {!! Form::open(['url'=> route('admin.roles.update', 1), 'method'=>'PUT']) !!}
    @csrf
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left py-3">
                    <h2>Role Management</h2>
                </div>
                <div class="pull-right text-right">
                    {{Form::submit('Save Permissions', ['class'=>'btn btn-primary'])}}
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-5">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th class="text-dark" scope="col">Permission</th>
                    @foreach($roles as $value)
                    <th class="text-dark text-center" scope="col">{{$value->name}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($permission as $item)
                <tr>
                    <td>
                        <label class="mb-0">
                            {{$item->name}}
                        </label>
                    </td>
                    @foreach($roles as $value)
                    <td class="text-center">
                        {{ Form::checkbox("permission_".$value->id."_".$item->id,
                                null,
                                $value->permissions->where('id', $item->id)->first(),
                                array('class' => 'align-middle name check-role')) }}
                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {!! Form::close() !!}
</div>
@endsection
