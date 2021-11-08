@php
use App\Utilities\SelectionByClass;

use App\Models\Membership;
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
                    <div class="d-flex align-items-center">
                        <div class="pr-2">
                            <a href="{{ route('admin.user-manager.student') }}" class="btn btn-outline-dark btn-sm" >
                                <i class="fe fe-arrow-left"></i>
                            </a>
                        </div>
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Edit Student
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body" id="editStudent">
                        {!! Form::open(['route' => ['admin.user-manager.student.update', $student->id],
                        'method'=> 'put','enctype' => 'multipart/form-data']) !!}
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group ">
                                    {{ Form::label('name', 'Name', ['class' => 'required']) }}
                                    {{ Form::text('name', $student->user->name, ['class'=>'form-control', 'required']) }}
                                </div>
                                @error('name')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group ">
                                    {{ Form::label('full_name', 'Full name', ['class' => 'required']) }}
                                    {{ Form::text('full_name', $student->full_name, ['class' => 'form-control', 'required']) }}
                                </div>
                                @error('full_name')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group ">
                                    {{ Form::label('day_of_birth', 'Date of birth', ['class' => 'required']) }}
                                    {{ Form::date('day_of_birth', $student->day_of_birth, ['class' => 'form-control', 'required']) }}
                                </div>
                                @error('day_of_birth')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group ">
                                    {{ Form::label('phone_no', 'Phone / WhatsApp', ['class' => 'required']) }}
                                    {{ Form::text('phone_no', $student->phone_no, ['class' => 'form-control', 'required']) }}
                                </div>
                                @error('phone_no')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-5">
                                <p class="mb-2 text-center">Student photo</p>
                                <div class="border p-4">
                                    <div class="custom-file mb-3">
                                        {{ Form::label('photo', 'Image',['class'=>'custom-file-label'], ['class' => 'required']) }}
                                        <sub class="text-dark"> accept image file </sub>
                                        {{ Form::file('photo',['class' => 'custom-file-input', '@change'=>'onFileChange', 'accept'=>"image/*"]) }}
                                        <sub class="text-dark"> accept image file </sub>

                                        @error('photo')
                                        <div class="alert text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    @if(empty($student->user->avatar))
                                        <div id="preview" class="mb-4">
                                            <img v-if="url" :src="url" width=100% />
                                        </div>
                                        <div id="preview_file_already">
                                            <img src="{{asset('/images/user_default.png')}}" width=100% />
                                        </div>
                                    @else
                                        <div id="preview" class="mb-4" style="display: none">
                                            <img v-if="url" :src="url" width=100% />
                                        </div>
                                        <div id="preview_file_already" class="mb-4">
                                            <img src="{{asset('/file/'.$student->user->avatar->id)}}" width=100% />
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            {{ Form::label('education_level', 'Current Form / Education level', ['class' => 'required']) }}
                            {{ Form::text('education_level', $student->education_level, ['class' => 'form-control', 'required']) }}
                        </div>
                        @error('education_level')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            {{ Form::label('membership', 'Membership Lever', ['class' => 'required']) }}
                            {{ Form::select('membership',
                                    array_filter(SelectionByClass::getValues(Membership::class,'name','id')) ,
                                    $student->user->membership->id, ['class' => 'form-control', 'required']) }}
                        </div>
                        {{ Form::submit('Save', ['class' => 'btn btn-primary mt-5']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div>
<script type="application/javascript">
    const displayPhotoStudent = new Vue({
        el: '#editStudent',
        data() {
            return {
                url: null,
            }
        },
        methods: {
            onFileChange(e) {
                const file = e.target.files[0];
                this.url = URL.createObjectURL(file);
                document.getElementById('preview').style = 'inline-block';
                document.getElementById('preview_file_already').hidden = 'true';
            }
        }
    })
</script>
@push('inputFile')
    <script type="application/javascript">
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endpush
@endsection
