@php
use App\Models\Subject;
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
                    <div class="d-flex align-items-center">
                        <div class="pr-2">
                            <button class="btn btn-outline-dark btn-sm" onclick="window.history.go(-1)">
                                <i class="fe fe-arrow-left"></i>
                            </button>
                        </div>
                        <div>
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Edit Tutor
                            </h4>
                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body" id="editTutor">
                        {!! Form::open(['route' => ['admin.tutor.update', $tutor->id],'method' => 'put', 'enctype' =>
                        'multipart/form-data']) !!}
                        @csrf
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group ">
                                    {{ Form::label('name', 'Username') }}
                                    {{ Form::text('name', $tutor->user->name, ['class'=>'form-control']) }}
                                    @error('name')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    {{ Form::label('full_name', 'Full name') }}
                                    {{ Form::text('full_name', $tutor->full_name, ['class' => 'form-control']) }}
                                    @error('full_name')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    {{ Form::label('subject_id', 'Subject') }}
                                    {{ Form::select('subject_id',
                                                    array_filter(SelectionByClass::getValues(Subject::class,'subject_name','id'), function($var, $id)
                                                    {
                                                        return $id != 1;
                                                    }, ARRAY_FILTER_USE_BOTH),
                                                    $tutor->subject[0]->id,
                                                    ['class' => 'form-control'])
                                                }}
                                    @error('subject_id')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-5 pb-4">
                                <p class="mb-2 text-center">Tutor photo</p>
                                <div class="border p-4">
                                    <div class="custom-file mb-3">
                                        {{ Form::label('photo', 'Image',['class'=>'custom-file-label']) }}
                                        {{ Form::file('photo',['class' => 'custom-file-input', '@change'=>'onFileChange']) }}
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
                        <div class="border rounded p-4 mb-4">
                            <h3>Tutor info</h3>
                            <hr>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:en', 'Tutor Info (English)') }}
                                {{ Form::text('tutor_info:en', $tutor->tutor_info, ['class' => 'form-control']) }}
                                @error('tutor_info:en')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:cn', 'Tutor Info (Traditional Chinese)') }}
                                {{ Form::text('tutor_info:cn', $tutor->tutor_info, ['class' => 'form-control']) }}
                                @error('tutor_info:cn')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:sc', 'Tutor Info (Simplify Chinese)') }}
                                {{ Form::text('tutor_info:sc', $tutor->tutor_info, ['class' => 'form-control']) }}
                                @error('tutor_info:sc')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="border rounded p-4 mb-4">
                            <h3>Tutor level</h3>
                            <hr>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:en', 'Tutor Level (English)') }}
                                {{ Form::text('tutor_level:en', $tutor->tutor_level, ['class' => 'form-control']) }}
                                @error('tutor_level:en')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:cn', 'Tutor Level (Traditional Chinese)') }}
                                {{ Form::text('tutor_level:cn', $tutor->tutor_level, ['class' => 'form-control']) }}
                                @error('tutor_level:cn')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:sc', 'Tutor Level (Simplify Chinese)') }}
                                {{ Form::text('tutor_level:sc', $tutor->tutor_level, ['class' => 'form-control']) }}
                                @error('tutor_level:sc')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="border rounded p-4 mb-4">
                            <h3>Tutor specialized</h3>
                            <hr>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:en', 'Tutor Specialized (English)') }}
                                {{ Form::text('tutor_specialized:en', $tutor->tutor_specialized, ['class' => 'form-control']) }}
                                @error('tutor_specialized:en')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:cn', 'Tutor Specialized (Traditional Chinese)') }}
                                {{ Form::text('tutor_specialized:cn', $tutor->tutor_specialized, ['class' => 'form-control']) }}
                                @error('tutor_specialized:cn')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:sc', 'Tutor Specialized (Simplify Chinese)') }}
                                {{ Form::text('tutor_specialized:sc', $tutor->tutor_specialized, ['class' => 'form-control']) }}
                                @error('tutor_specialized:sc')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="border rounded p-4">
                            <h3>Tutor experience</h3>
                            <hr>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:en', 'Tutor Experience (English)') }}
                                {{ Form::text('tutor_experience:en', $tutor->tutor_experience, ['class' => 'form-control']) }}
                                @error('tutor_experience:en')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:cn', 'Tutor Experience (Traditional Chinese)') }}
                                {{ Form::text('tutor_experience:cn', $tutor->tutor_experience, ['class' => 'form-control']) }}
                                @error('tutor_experience:cn')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:sc', 'Tutor Experience (Simplify Chinese)') }}
                                {{ Form::text('tutor_experience:sc', $tutor->tutor_experience, ['class' => 'form-control']) }}
                                @error('tutor_experience:sc')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{ Form::submit('Save', ['class' => 'btn btn-primary mt-5']) }}
                        {!! Form::close() !!}

                        @if (Auth::user()->id == $tutor->user_id)
                        {!! Form::open(['url' => URL::route('site.userUpdatePassword',
                        Auth::user()->id),'method'=>'post' ]) !!}
                        @csrf
                        <div class="border rounded p-4 mt-3">
                            <h3>Update Password</h3>
                            <hr>
                            <div class="form-group ">
                                {{ Form::label('old_password', 'Old Password') }}
                                {{ Form::password('old_password', ['class' => 'form-control']) }}
                                @error('old_password')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                {{ Form::label('password', 'New Password') }}
                                {{ Form::password('password', ['class' => 'form-control']) }}
                                @error('password')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        {{ Form::submit('Save', ['class' => 'btn btn-primary mt-5']) }}
                        {!! Form::close() !!}
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div>

<script>
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
<script>
    // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function () {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
</script>
@endpush
@endsection