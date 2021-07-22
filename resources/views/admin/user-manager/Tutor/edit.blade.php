@php
    use App\Utilities\SelectionByClass;
@endphp
@extends('admin.layout')
@section('content')
    <!-- CARDS -->
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Edit Tutor
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            {!! Form::open() !!}
                            @csrf
                            <div class="form-group ">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', $tutor->user->name, ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_name', 'Full name') }}
                                {{ Form::text('tutor_name', $tutor->full_name, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::email('email', $tutor->user->email, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('date_of_birth', 'Date of birth') }}
                                {{ Form::email('date_of_birth', $tutor->date_of_birth, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('phone_no', 'Phone') }}
                                {{ Form::email('phone_no', $tutor->phone_no, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">

                                {{ Form::label('subject_id', 'Subject') }}
                                {{ Form::select('subject_id',
                                    SelectionByClass::getValues(\App\Models\Subject::class,'subject_name','id'),
                                    $tutor->subject[0]->id,
                                    ['class' => 'form-control'])
                                }}
                            </div>

                            {{ Form::submit('Save', ['class' => 'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
@endsection

