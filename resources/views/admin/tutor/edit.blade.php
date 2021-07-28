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
                        {!! Form::open(['route' => ['admin.tutor.update', $tutor->id],'method' => 'put', 'enctype' =>
                        'multipart/form-data']) !!}
                        @csrf
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group ">
                                    {{ Form::label('name', 'Username') }}
                                    {{ Form::text('name', $tutor->user->name, ['class'=>'form-control']) }}
                                </div>
                                <div class="form-group ">
                                    {{ Form::label('full_name', 'Full name') }}
                                    {{ Form::text('full_name', $tutor->full_name, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group ">
                                    {{ Form::label('active', 'Active') }}
                                    {{ Form::select('active', [false => 'Inactive', true => 'Active'], $tutor->user->active, ['class' => 'form-control']) }}
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
                            {{ Form::select('subject_id',
                                        array_filter(SelectionByClass::getValues(Subject::class,'subject_name','id'), function($var, $id)
                                        {
                                            return $id != 1;
                                        }, ARRAY_FILTER_USE_BOTH),
                                        $tutor->subject[0]->id,
                                        ['class' => 'form-control'])
                                    }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_info:en', 'Tutor Info (English)') }}
                            {{ Form::text('tutor_info:en', $tutor->tutor_info, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_info:cn', 'Tutor Info (Traditional Chinese)') }}
                            {{ Form::text('tutor_info:cn', $tutor->tutor_info, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_info:sc', 'Tutor Info (Simplify Chinese)') }}
                            {{ Form::text('tutor_info:sc', $tutor->tutor_info, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_level:en', 'Tutor Level (English)') }}
                            {{ Form::text('tutor_level:en', $tutor->tutor_level, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_level:cn', 'Tutor Level (Traditional Chinese)') }}
                            {{ Form::text('tutor_level:cn', $tutor->tutor_level, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_level:sc', 'Tutor Level (Simplify Chinese)') }}
                            {{ Form::text('tutor_level:sc', $tutor->tutor_level, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_specialized:en', 'Tutor Specialized (English)') }}
                            {{ Form::text('tutor_specialized:en', $tutor->tutor_specialized, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_specialized:cn', 'Tutor Specialized (Traditional Chinese)') }}
                            {{ Form::text('tutor_specialized:cn', $tutor->tutor_specialized, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_specialized:sc', 'Tutor Specialized (Simplify Chinese)') }}
                            {{ Form::text('tutor_specialized:sc', $tutor->tutor_specialized, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_experience:en', 'Tutor Experience (English)') }}
                            {{ Form::text('tutor_experience:en', $tutor->tutor_experience, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_experience:cn', 'Tutor Experience (Traditional Chinese)') }}
                            {{ Form::text('tutor_experience:cn', $tutor->tutor_experience, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::label('tutor_experience:sc', 'Tutor Experience (Simplify Chinese)') }}
                            {{ Form::text('tutor_experience:sc', $tutor->tutor_experience, ['class' => 'form-control']) }}
                        </div>

                        {{ Form::submit('Save', ['class' => 'btn btn-primary mt-5']) }}
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