@php
use \App\Utilities\SelectionByClass;
use \App\Models\Subject;

@endphp

@extends('admin.layout')
@section('content')

<script src="{{ asset('js/admin/upload-file-project.js') }}"></script>

<!-- CARDS -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <!-- Goals -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="pr-2">
                            <a href="{{ route('admin.user-manager.tutor') }}" class="btn btn-outline-dark btn-sm">
                                <i class="fe fe-arrow-left"></i>
                            </a>
                        </div>
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Create Tutor
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body d-flex">
                    <div class="card-body" id="createTutor">
                        {!! Form::open(['route'=> 'admin.tutor.store', 'enctype' => 'multipart/form-data']) !!}
                        @csrf
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group ">
                                    {{ Form::label('name', 'Name', ['class' => 'required']) }}
                                    {{ Form::text('name', old('name'), ['class'=>'form-control', 'required']) }}
                                    @error('name')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    {{ Form::label('email', 'Tutor email', ['class' => 'required']) }}
                                    {{ Form::email('email', old('email'), ['class'=>'form-control', 'required']) }}
                                    @error('email')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    {{ Form::label('password', 'Password', ['class' => 'required']) }}
                                    {{ Form::password('password', ['class'=>'form-control', 'required']) }}
                                    @error('password')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    {{ Form::label('full_name', 'Full name', ['class' => 'required']) }}
                                    {{ Form::text('full_name', old('full_name'), ['class'=>'form-control', 'required']) }}
                                    @error('full_name')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-5 pb-4">
                                <p class="mb-2 text-center">Tutor photo</p>
                                <div class="border p-4">
                                    <div class="custom-file mb-3">
                                        {{ Form::label('photo', 'Image',['class'=>'custom-file-label'], ['class' => 'required']) }}
                                        {{ Form::file('photo',['class' => 'custom-file-input', '@change'=>'onFileChange', 'accept'=>"image/*"]) }}
                                        <sub class="text-dark"> accept image file </sub>

                                        @error('photo')
                                        <div class="alert text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    @if(empty($tutor->user->avatar))
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
                                        <img src="{{asset('/file/'.$tutor->user->avatar->id)}}" width=100% />
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            {{ Form::label('subject_id', 'Subject'), ['class' => 'required'] }}
                            {{ Form::select('subject_id',array_filter(SelectionByClass::getValues(Subject::class,'subject_name','id'), function($var, $id)
                                {
                                    return $id ;
                                }, ARRAY_FILTER_USE_BOTH), null, ['class' => 'form-control', 'required']) }}
                            @error('subject_id')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_info:en', 'Tutor Info (English)', ['class' => 'required']) }}
                            {{ Form::text('tutor_info:en', old('tutor_info:en'), ['class'=>'form-control', 'required']) }}
                            @error('tutor_info:en')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_info:cn', 'Tutor Info (Traditional Chinese)', ['class' => 'required']) }}
                            {{ Form::text('tutor_info:cn', old('tutor_info:cn'), ['class'=>'form-control', 'required']) }}
                            @error('tutor_info:cn')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_info:sc', 'Tutor Info (Simplify Chinese)', ['class' => 'required']) }}
                            {{ Form::text('tutor_info:sc', old('tutor_info:sc'), ['class'=>'form-control', 'required']) }}
                            @error('tutor_info:sc')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_level:en', 'Tutor Level (English)', ['class' => 'required']) }}
                            {{ Form::text('tutor_level:en', old('tutor_level:en'), ['class'=>'form-control', 'required']) }}
                            @error('tutor_level:en')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_level:cn', 'Tutor Level (Traditional Chinese)', ['class' => 'required']) }}
                            {{ Form::text('tutor_level:cn', old('tutor_level:cn'), ['class'=>'form-control', 'required']) }}
                            @error('tutor_level:cn')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_level:sc', 'Tutor Level (Simplify Chinese)', ['class' => 'required']) }}
                            {{ Form::text('tutor_level:sc', old('tutor_level:sc'), ['class'=>'form-control', 'required']) }}
                            @error('tutor_level:sc')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_specialized:en', 'Tutor Specialized (English)', ['class' => 'required']) }}
                            {{ Form::text('tutor_specialized:en', old('tutor_specialized:en'), ['class'=>'form-control', 'required']) }}
                            @error('tutor_specialized:en')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_specialized:cn', 'Tutor Specialized (Traditional Chinese)', ['class' => 'required']) }}
                            {{ Form::text('tutor_specialized:cn', old('tutor_specialized:cn'), ['class'=>'form-control', 'required']) }}
                            @error('tutor_specialized:cn')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_specialized:sc', 'Tutor Specialized (Simplify Chinese)', ['class' => 'required']) }}
                            {{ Form::text('tutor_specialized:sc', old('tutor_specialized:sc'), ['class'=>'form-control', 'required']) }}
                            @error('tutor_specialized:sc')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_experience:en', 'Tutor Experience (English)', ['class' => 'required']) }}
                            {{ Form::text('tutor_experience:en', old('tutor_experience:en'), ['class'=>'form-control', 'required']) }}
                            @error('tutor_experience:en')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_experience:cn', 'Tutor Experience (Traditional Chinese)', ['class' => 'required']) }}
                            {{ Form::text('tutor_experience:cn', old('tutor_experience:cn'), ['class'=>'form-control', 'required']) }}
                            @error('tutor_experience:cn')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_experience:sc', 'Tutor Experience (Simplify Chinese)', ['class' => 'required']) }}
                            {{ Form::text('tutor_experience:sc', old('tutor_experience:sc'), ['class'=>'form-control', 'required']) }}
                            @error('tutor_experience:sc')
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
<script type="application/javascript">
    const displayPhoto = new Vue({
            el: '#editTutor',
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