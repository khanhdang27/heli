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
                            <button class="btn btn-outline-dark btn-sm" onclick="window.history.go(-1)">
                                <i class="fe fe-arrow-left"></i>
                            </button>
                        </div>
                        <div>

                            <!-- Title -->

                            <h4 class="card-header-title">
                                Edit Moderator
                            </h4>

                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-body">
                    <div class="card-body" id="editModerator">
                        {!! Form::open(['route' => ['admin.moderator.update', $moderator->id], 'method'=>
                        'put','enctype' => 'multipart/form-data']) !!}

                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group ">
                                    {{ Form::label('name', 'Name') }}
                                    {{ Form::text('name', $moderator->user->name, ['class'=>'form-control']) }}
                                </div>
                                <div class="form-group ">
                                    {{ Form::label('full_name', 'Full name') }}
                                    {{ Form::text('full_name', $moderator->full_name, ['class'=>'form-control']) }}
                                </div>
                                <div class="form-group ">
                                    {{ Form::label('phone', 'Phone number') }}
                                    {{ Form::text('phone', $moderator->phone, ['class'=>'form-control']) }}
                                </div>
                            </div>
                            <div class="col-lg-5 pb-4">
                                <p class="mb-2 text-center">Tutor photo</p>
                                <div class="border p-4">
                                    <div class="custom-file mb-3">
                                        {{ Form::label('photo', 'Image',['class'=>'custom-file-label']) }}
                                        {{ Form::file('photo',['class' => 'custom-file-input', '@change'=>'onFileChange']) }}
                                    </div>
                                    @if(empty($moderator->user->avatar))
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
                                        <img src="{{asset('/file/'.$moderator->user->avatar->id)}}" width=100% />
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{ Form::submit('Save', ['class'=>'btn btn-primary mt-5']) }}
                        {!! Form::close() !!}

                        @if (Auth::user()->id == $moderator->user_id)
                        {!! Form::open(['url' => URL::route('site.userUpdatePassword',
                        Auth::user()->id),'method'=>'post' ]) !!}
                        @csrf
                        <div class="border rounded p-4 mt-3">
                            <h3>Update Password</h3>
                            <hr>
                            <div class="form-group ">
                                {{ Form::label('old_password', 'Old Password') }}
                                {{ Form::password('old_password', ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::label('password', 'New Password') }}
                                {{ Form::password('password', ['class' => 'form-control']) }}
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
            el: '#editModerator',
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