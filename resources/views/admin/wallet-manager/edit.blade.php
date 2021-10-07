@extends('admin.layout')
@section('content')
    <!-- CARDS -->
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="pr-2">
                                <a href="{{ route('admin.wallet-manager.index') }}" class="btn btn-outline-dark btn-sm">
                                    <i class="fe fe-arrow-left"></i>
                                </a>
                            </div>
                            <div>
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Add tokens
                                </h4>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="border border-light rounded px-4 py-3 mb-5">
                                <h3>Wallet information</h3>
                                <div class="form-group row mb-0">
                                    {{ Form::label('name', 'Holder name:', ['class' => 'col-sm-2 col-form-label']) }}
                                    <div class="col-sm-10">
                                        {{ Form::text('name', $user->name,['class' => 'form-control-plaintext', 'disabled'] ) }}
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    {{ Form::label('name', 'Balance:', ['class' => 'col-sm-2 col-form-label']) }}
                                    <div class="col-sm-10">
                                        {{ Form::text('name', $wallet->balance,['class' => 'form-control-plaintext', 'disabled'] ) }}
                                    </div>
                                </div>
                            </div>
                            {!! Form::open(['route' => ['admin.wallet-manager.update', $wallet->id], 'method'=> 'put', 'enctype' =>
                            'multipart/form-data']) !!}

                            <div class="form-group">
                                {{ Form::label('balance', 'Token') }}
                                {{ Form::number('balance', $wallet->balance,['class' => 'form-control'] ) }}
                                @error('balance')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
@endsection
