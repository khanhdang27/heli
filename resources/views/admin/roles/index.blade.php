@extends('admin.layout')
@section('content')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left py-3">
                    <h2>Role Management</h2>
                </div>
                <div class="pull-right text-right">
                    @can('role-create')
                        <a class="btn btn-success" href="{{ route('admin.roles.create') }}"> Create New Role</a>
                    @endcan
                </div>
            </div>
        </div>
        {{--    @if ($message = Session::get('success'))--}}
        {{--        <div class="alert alert-success">--}}
        {{--            <p>{{ $message }}</p>--}}
        {{--        </div>--}}
        {{--    @endif--}}

        {{--        <table class="table table-bordered mt-5">--}}
        {{--            <tr>--}}
        {{--                <th>No</th>--}}
        {{--                <th>Name</th>--}}
        {{--                <th width="280px">Action</th>--}}
        {{--            </tr>--}}
        {{--            @foreach ($roles as $key => $role)--}}
        {{--                <tr>--}}
        {{--                    <td>{{ ++$i }}</td>--}}
        {{--                    <td>{{ $role->name }}</td>--}}
        {{--                    <td>--}}
        {{--                        <a class="btn btn-primary" href="{{ route('admin.roles.edit',$role->id) }}">Edit</a>--}}
        {{--                        @can('role-delete')--}}
        {{--                            {!! Form::open(['method' => 'DELETE','route' => ['admin.roles.destroy', $role->id],'style'=>'display:inline']) !!}--}}
        {{--                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
        {{--                            {!! Form::close() !!}--}}
        {{--                        @endcan--}}
        {{--                    </td>--}}
        {{--                </tr>--}}
        {{--            @endforeach--}}
        {{--        </table>--}}
    </div>
    <div class="container-fluid">
        {!! Form::open() !!}
        <table class="table mt-5">
            <thead>
            <tr>
                <th class="text-dark" scope="col">Permission</th>
                @foreach($roles as $value)
                    <th class="text-dark text-center" scope="col">{{$value->name}}</th>
                @endforeach
            </tr>
            </thead>
            {{--            {{dd($rolePermissions)}}--}}
            <tbody>
            @foreach($permission as $item)
                <tr>
                    <td >
                        <label>
                            {{$item->name}}
                        </label>
                    </td>
                    @foreach($roles as $value)
                        <td class="text-center">
                            {{ Form::checkbox("permission_".$value->id."_".$item->id,
                                null,
                                false,
                                array('class' => 'name')) }}
                        </td>
                    @endforeach


                    {{--                    <td>--}}
                    {{--                        {{ Form::checkbox('permission[]', null,false, array('class' => 'name')) }}--}}
                    {{--                    </td>--}}
                    {{--                    <td>--}}
                    {{--                        {{ Form::checkbox('permission[]', null,false, array('class' => 'name')) }}--}}
                    {{--                    </td>--}}
                    {{--                    <td>--}}
                    {{--                        {{ Form::checkbox('permission[]', null,false, array('class' => 'name')) }}--}}
                    {{--                    </td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="col-xs-12 col-sm-12 col-md-12 text-right pb-5">
            {{--            <button type="submit" class="btn btn-primary">Submit</button>--}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary mb-5'])}}
        </div
        {!! Form::close() !!}
    </div>
@endsection
