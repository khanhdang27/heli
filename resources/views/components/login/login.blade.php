<div class="modal fade modal-login" id="loginModal">
    <div class="modal-dialog modal-login-xl">
        <div class="modal-content modal-login-content">
            <div class="modal-header btn-close">
                <button type="button" class="close btn-x" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body modal-body-login">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 d-flex justify-content-center align-items-center">
                            <div class="text-login-left text-center">
                                @lang('keywords.loginModal.welcomeBack')<br>
                                @lang('keywords.loginModal.loginToContinueCourse')
                            </div>
                        </div>
                        <div class="col-sm login-right">

                            <div class="box-btn-login">
                                <div class="btn-register-now btn-login btn-secondary">
                                    <div class="box-ic ic-fb"><img class="ic" src="{{asset("images/ic/ic_fb.svg")}}">
                                    </div>@lang('keywords.loginWithFb')
                                </div>
                                <div class="btn-register-now btn-login btn-secondary">
                                    <div class="box-ic ic-gg"><img class="ic" src="{{asset("images/ic/ic_gg.svg")}}">
                                    </div>@lang('keywords.loginWithGg')
                                </div>
                                <div class="btn-register-now btn-login btn-secondary">
                                    <div class="box-ic ic-ap"><img class="ic" id="ap"
                                                                   src="{{asset("images/ic/ic_apple.svg")}}">
                                    </div>@lang('keywords.loginWithAp')
                                </div>
                            </div>
                            <div class="line-or d-flex align-items-center text-white">
                                <hr>
                                <span class="text-or">or</span>
                                <hr>
                            </div>
                            @csrf
                            {!! Form::open(['id'=>'formLogin']) !!}
                                <div class="input-login d-flex justify-content-center align-items-center mb-3">
                                    {{ Form::email('email',null,[
                                                    'class'=>'input-login-item',
                                                    'placeholder'=>'Email'
                                                    ]) }}
                                    <div id="snackbarLogin"><p class="m-0" id="contentToastLogin">Toast</p></div>
                                </div>
                                <div class="input-login d-flex justify-content-center align-items-center">
                                    {{ Form::password('password', [
                                        'class'=> 'input-login-item',
                                        'placeholder'=>'Password'
                                        ])
                                    }}
                                </div>
                                <div class="bottom-btn">
                                    <button
                                        class = 'btn-login btn-secondary btn-register-now'
                                        id = 'btn-login' type="submit">
                                        {{__('Login')}}
                                        <span class="spinner-border spinner-border-sm ml-1 d-none" role="status" aria-hidden="true"></span>
                                        <span class="sr-only">Loading...</span>
                                    </button>

                                </div>
                            {!! Form::close() !!}
                            <div class="row bottom-form">
                                <div class="col-sm">
                                    <div class="remember text-white d-flex">
                                        <label class="rememberCheck mr-3" for="rememberCheck">
                                            <input type="checkbox" id="rememberCheck">
                                            <div class="check"></div>
                                        </label>
                                        @lang('keywords.rememberMe')
                                    </div>
                                </div>
                                <div class="col-sm text-right p-0 col-forget-pw">
                                    <a href="#">@lang('keywords.forgotPass')</a><br>
                                    <a href="#">@lang('keywords.register')</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
        </div>
    </div>
</div>
@push('scriptsLogin')
    <script>
        $(function () {
            $('#formLogin').submit(function (e) {
                e.preventDefault();
<<<<<<< HEAD
=======

                var spinner = $("#spinner-load");
>>>>>>> main
                let formData = $(this).serializeArray();
                $(".invalid-feedback").children("strong").text("");
                $("#formLogin input").removeClass("is-invalid");
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('site.userLogin') }}",
                    data: formData
                }).done(function (data) {
                    if(data['message']=='success') {
<<<<<<< HEAD
                        toastr["success"]("@lang('keywords.toast.loginSuccess')");
                        location.reload()
                    }else if(data['message']=='empty'){
                        toastr["error"]("","@lang('keywords.toast.pleaseEnterEmailPass')");
                    }
                    else {
                      toastr["error"]("@lang('keywords.toast.incorrect')", "@lang('keywords.toast.loginFailed')");
=======
                        spinner.addClass('d-none')
                        toastr["success"]("@lang('keywords.toast.loginSuccess')");
                        location.reload()
                    }else if(data['message']=='empty'){
                        spinner.addClass('d-none')
                        toastr["error"]("","@lang('keywords.toast.pleaseEnterEmailPass')");
                    }
                    else {
                        spinner.addClass('d-none')
                        toastr["error"]("@lang('keywords.toast.incorrect')", "@lang('keywords.toast.loginFailed')");
>>>>>>> main
                    }
                })
            });
        })
        toastLogin();
        function toastLogin(){
            toastr.options = {
                "closeButton": true,
                "newestOnTop": false,
                "positionClass": "toast-bottom-right",
                "timeOut": false,
                "extendedTimeOut": false,
            }
        }
    </script>
@endpush
