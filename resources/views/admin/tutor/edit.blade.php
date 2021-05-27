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
                            {!! Form::open(['route' => ['admin.tutor.update', $tutor->id],'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
                            @csrf
                            <div class="form-group ">
                                {{ Form::label('name', 'Username') }}
                                {{ Form::text('name', $tutor->user->name, ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('email', 'Tutor email') }}
                                {{ Form::email('email', $tutor->email, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('password', 'Password') }}
                                {{ Form::password('password', ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_name', 'Tutor name') }}
                                {{ Form::text('tutor_name', $tutor->full_name, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">

                                {{ Form::label('subject_id', 'Subject') }}
                                {{ Form::select('subject_id',
                                    SelectionByClass::getValues(\App\Models\Subject::class,'subject_name','id'),
                                    $tutor->subject[0]->id,
                                    ['class' => 'form-control'])
                                }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:en', 'Tutor Info (English)') }}
                                {{ Form::text('tutor_info:en', $tutor->translate('en')->tutor_info, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:cn', 'Tutor Info (Traditional Chinese)') }}
                                {{ Form::text('tutor_info:cn', $tutor->translate('cn')->tutor_info, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:sc', 'Tutor Info (Simplify Chinese)') }}
                                {{ Form::text('tutor_info:sc', $tutor->translate('sc')->tutor_info, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:en', 'Tutor Level (English)') }}
                                {{ Form::text('tutor_level:en', $tutor->translate('en')->tutor_level, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:cn', 'Tutor Level (Traditional Chinese)') }}
                                {{ Form::text('tutor_level:cn', $tutor->translate('cn')->tutor_level, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:sc', 'Tutor Level (Simplify Chinese)') }}
                                {{ Form::text('tutor_level:sc', $tutor->translate('sc')->tutor_level, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:en', 'Tutor Specialized (English)') }}
                                {{ Form::text('tutor_specialized:en', $tutor->translate('en')->tutor_specialized, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:cn', 'Tutor Specialized (Traditional Chinese)') }}
                                {{ Form::text('tutor_specialized:cn', $tutor->translate('cn')->tutor_specialized, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:sc', 'Tutor Specialized (Simplify Chinese)') }}
                                {{ Form::text('tutor_specialized:sc', $tutor->translate('sc')->tutor_specialized, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:en', 'Tutor Experience (English)') }}
                                {{ Form::text('tutor_experience:en', $tutor->translate('en')->tutor_experience, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:cn', 'Tutor Experience (Traditional Chinese)') }}
                                {{ Form::text('tutor_experience:cn', $tutor->translate('cn')->tutor_experience, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:sc', 'Tutor Experience (Simplify Chinese)') }}
                                {{ Form::text('tutor_experience:sc', $tutor->translate('sc')->tutor_experience, ['class' => 'form-control']) }}
                            </div>
                            {{ Form::submit('Save', ['class' => 'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Add photo for Tutor
                                </h4>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">
                        {!! Form::open([
                                'url' => route('file.store',[
                                    'type'=>'avatar',
                                    'ref' => $tutor->id
                                ]),
                                'enctype'=>'multipart/form-data',
                                'class'=>'dropzone',
                                'id'=>"uploadFile",
                            ])  !!}
                        <div class="dz-message">
                            Drag 'n' Drop Files<br>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
@endsection
