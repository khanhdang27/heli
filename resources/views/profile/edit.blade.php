@extends('layout.app')

@section('title', 'Blog Page')

@section('content')
    <hr class="mt-0"/>
    <div class="container mt-5 mb-5 pb-5">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card mx-auto py-5 px-3 mb-5">
            <div class="row">
                <div class="col-md-4 text-center">
                    @if(empty(Auth::user()->avatar))
                        <img width="150" height="150" class="img-thumbnail" src="{{ asset('images/user_default.png')}}">
                    @else
                        <img width="150" height="150" class="img-thumbnail" src="{{ asset('/file/'.Auth::user()->avatar->id)}}">
                    @endif
                    <div class="p-3 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/ic/ic_search.svg') }}">
                        <a href="#" data-toggle="modal"
                           data-target="#modalUploadAvatar">@lang('keywords.uploadYourPhoto')</a>
                        <div class="modal fade" id="modalUploadAvatar" tabindex="-1" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Upload your photo</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    {!! Form::open(['url' => URL::route('site.uploadAvatar'),
                                                    'enctype' => 'multipart/form-data', 'method' => 'put' ]) !!}
                                    <div class="modal-body">
                                        <div id="preview" class="mb-4">
                                            <img v-if="url" :src="url" width=100% />
                                        </div>
                                        <div class="custom-file ">
                                            {{ Form::label('photo', 'Image',['class'=>'custom-file-label']) }}
                                            {{ Form::file('photo',['class' => 'custom-file-input', '@change'=>'onFileChange']) }}
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        {{ Form::submit('Submit', ['class'=>'btn btn-primary']) }}
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <script>
                            const displayPhoto = new Vue({
                                el: '#modalUploadAvatar',
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
                    </div>
                </div>
                <div class="w-100 col-md-8">
                    <div>
                        <h2 class="text-center text-primary">@lang('keywords.updateYourProfile')</h2>
                        {!! Form::open(['url' => URL::route('site.profile.update', Auth::user()->id), 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', Auth::user()->name, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('full_name', 'Full Name') }}
                            {{ Form::text('full_name', $user_info->full_name ?? null, ['class' => 'form-control']) }}
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group w-50">
                                {{ Form::label('day_of_birth', 'Date of birth') }}
                                {{ Form::date('day_of_birth', $user_info->day_of_birth ?? null, ['class' => 'form-control']) }}
                            </div>
                            <div class="px-3"></div>
                            <div class="form-group w-100">
                                {{ Form::label('phone_no', 'Phone') }}
                                {{ Form::text('phone_no', $user_info->phone_no ?? null, ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="d-flex">
                            {{ Form::submit('Save', ['class' => 'btn btn-primary ml-auto mt-3']) }}
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <hr class="mt-5"/>
                    <div class="mt-5">
                        <h2 class="text-center text-primary">@lang('keywords.changePassword')</h2>
                        {!! Form::open(['route' => 'site.userUpdatePassword', 'method' => 'post']) !!}
                        <div class="form-group">
                            {{ Form::label('old_password', 'Old Password') }}
                            {{ Form::password('old_password', ['class' => 'form-control', 'autocomplete' => 'off']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('password', 'New password') }}
                            {{ Form::password('password', ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('password_confirmation', 'Confirm password') }}
                            {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                        </div>
                        <div class="d-flex">
                            {{ Form::submit('Save', ['class' => 'btn btn-primary ml-auto mt-3']) }}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
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
