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
                        <div class="row align-items-center">
                            <div class="col">

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
                                        {{ Form::label('name', 'Name') }}
                                        {{ Form::text('name', old('name'), ['class'=>'form-control']) }}
                                    </div>
                                    <div class="form-group ">
                                        {{ Form::label('email', 'Tutor email') }}
                                        {{ Form::email('email', old('email'), ['class'=>'form-control']) }}
                                    </div>
                                    <div class="form-group ">
                                        {{ Form::label('password', 'Password') }}
                                        {{ Form::password('password', ['class'=>'form-control']) }}
                                    </div>
                                    <div class="form-group ">
                                        {{ Form::label('full_name', 'Full name') }}
                                        {{ Form::text('full_name', old('full_name'), ['class'=>'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-lg-5 pb-4">
                                    <p class="mb-2 text-center">Tutor photo</p>
                                    <div class="border p-4">
                                        <div class="custom-file mb-3">
                                            {{ Form::label('photo', 'Image',['class'=>'custom-file-label']) }}
                                            {{ Form::file('photo',['class' => 'custom-file-input', '@change'=>'onFileChange']) }}
                                        </div>
                                        <div id="preview" class="mb-4">
                                            <img v-if="url" :src="url" width=100% />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group ">
                                {{ Form::label('subject_id', 'Subject') }}
                                {{ Form::select('subject_id',SelectionByClass::getValues(Subject::class,'subject_name','id'),null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:en', 'Tutor Info (English)') }}
                                {{ Form::text('tutor_info:en', old('tutor_info:en'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:cn', 'Tutor Info (Traditional Chinese)') }}
                                {{ Form::text('tutor_info:cn', old('tutor_info:cn'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_info:sc', 'Tutor Info (Simplify Chinese)') }}
                                {{ Form::text('tutor_info:sc', old('tutor_info:sc'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:en', 'Tutor Level (English)') }}
                                {{ Form::text('tutor_level:en', old('tutor_level:en'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:cn', 'Tutor Level (Traditional Chinese)') }}
                                {{ Form::text('tutor_level:cn', old('tutor_level:cn'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_level:sc', 'Tutor Level (Simplify Chinese)') }}
                                {{ Form::text('tutor_level:sc', old('tutor_level:sc'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:en', 'Tutor Specialized (English)') }}
                                {{ Form::text('tutor_specialized:en', old('tutor_specialized:en'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:cn', 'Tutor Specialized (Traditional Chinese)') }}
                                {{ Form::text('tutor_specialized:cn', old('tutor_specialized:cn'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_specialized:sc', 'Tutor Specialized (Simplify Chinese)') }}
                                {{ Form::text('tutor_specialized:sc', old('tutor_specialized:sc'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:en', 'Tutor Experience (English)') }}
                                {{ Form::text('tutor_experience:en', old('tutor_experience:en'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:cn', 'Tutor Experience (Traditional Chinese)') }}
                                {{ Form::text('tutor_experience:cn', old('tutor_experience:cn'), ['class'=>'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('tutor_experience:sc', 'Tutor Experience (Simplify Chinese)') }}
                                {{ Form::text('tutor_experience:sc', old('tutor_experience:sc'), ['class'=>'form-control']) }}
                            </div>
                            {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- / .row -->
    </div>
    <script>
        const displayPhoto = new Vue({
            el: '#createTutor',
            data() {
                return {
                    url: null,
                }
            },
            methods: {
                onFileChange(e) {
                    const file = e.target.files[0];
                    this.url = URL.createObjectURL(file);
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
