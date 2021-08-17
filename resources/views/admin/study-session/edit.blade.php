<?php
/**
 * @var \Collective\Html\FormBuilder
 */
use App\Utilities\SelectionByClass;
?>

@extends('admin.layout')
@section('content')
<!-- CARDS -->
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
            <!-- Goals -->
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Study Session
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body">
                        {!! Form::open(['url' => route('admin.study-session.update', $studySession),
                        'enctype'=>'multipart/form-data', 'method'=> 'put']) !!}
                        <div class="form-group ">
                            {{ Form::label('session_name', 'Session Name') }}
                            {{ Form::text('session_name', $studySession->session_name, ['class' => 'form-control']) }}
                            @error('session_name')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <div class='input-group input-group-merge' id='datetimepickerstart'>
                                    <input type='text' class="form-control" aria-describedby="inputGroup"
                                        name="session_start" value={{explode(' ', $studySession->session_start)[1]}} />
                                    <span id="inputGroup" class="input-group-text">
                                        <span class="fe fe-clock"></span>
                                    </span>
                                    @error('session_start')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <div class='input-group input-group-merge' id='datetimepickerend'>
                                    <input type='text' class="form-control" aria-describedby="inputGroup"
                                        name="session_end" value={{explode(' ', $studySession->session_end)[1]}} />
                                    <span id="inputGroup" class="input-group-text">
                                        <span class="fe fe-clock"></span>
                                    </span>
                                    @error('session_end')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{ Form::submit('Save', ['class'=>'btn btn-primary my-5']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div>

<script type="text/javascript">
    $(function () {
            $('#datetimepickerstart').datetimepicker({
                format: 'LT'
            });
            $('#datetimepickerend').datetimepicker({
                format: 'LT'
            });
        });
</script>

@endsection