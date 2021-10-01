<div class="modal fade modal-index" id="loginModal">
    <div class="modal-dialog modal-xl mx-auto">
        <div class="modal-content modal-login-content border-white">
            <div class="modal-header btn-close">
                <button type="button" class="close btn-x m-0 p-0" data-dismiss="modal">
                    <span aria-hidden="true" class="rounded-circle p-1"><i class="fe fe-x"></i></span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <div class="text-login-left h1 text-white text-center">
                            @lang('keywords.loginModal.welcomeBack')<br>
                            @lang('keywords.loginModal.loginToContinueCourse')
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-btn-login">
                            <a class="btn btn-register-now btn-login mb-2 mt-0 mx-auto  animate-change-color"
                                id="login-fb" href="{{route('site.socialLogin', 'facebook')}}">
                                <div class="box-ic ic-fb"><img class="ic" src="{{asset("images/ic/ic_fb.svg")}}"
                                        width="33px">
                                </div>
                                <p class="mx-auto mb-0">@lang('keywords.loginWithFb')</p>
                                <span id='spinner-load-fb' class="spinner-border spinner-border-sm ml-1 d-none"
                                    role="status" aria-hidden="true"></span>
                                <span class="sr-only">Loading...</span>
                            </a>
                            <a class="btn btn-register-now btn-login mt-0 mx-auto  animate-change-color" id="login-gg"
                                href="{{route('site.socialLogin', 'google')}}">
                                <div class="box-ic ic-gg"><img class="ic" src="{{asset("images/ic/ic_gg.svg")}}"
                                        width="33px">
                                </div>
                                <p class="mx-auto mb-0">@lang('keywords.loginWithGg')</p>
                                <span id='spinner-load-gg' class="spinner-border spinner-border-sm ml-1 d-none"
                                    role="status" aria-hidden="true"></span>
                                <span class="sr-only">Loading...</span>
                            </a>
                        </div>
                        <div class="line-or d-flex align-items-center text-white mx-auto">
                            <hr>
                            <span class="p-3">or</span>
                            <hr>
                        </div>
                        @csrf
                        {!! Form::open(['id'=>'formLogin']) !!}
                        <div class="input-login mb-2 mx-auto">
                            {{ Form::email('email',null,[
                                            'class'=>'input-login-item',
                                            'placeholder'=> __('keywords.loginModal.email')
                                            ]) }}
                        </div>
                        <div class="input-login mx-auto">
                            {{ Form::password('password', [
                                'class'=> 'input-login-item',
                                'placeholder'=>__('keywords.loginModal.password')
                                ])
                            }}
                        </div>
                        <div class="row bottom-form mt-4 mx-auto">
                            <div class="col-sm">
                                <div class="from-group text-white ">
                                    <input type="checkbox" id="rememberCheck" name="remember_me">
                                    <label class="mr-3" for="rememberCheck">
                                        <p class="mb-0">@lang('keywords.rememberMe')</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm text-right p-0">
                                <a href="{{route('site.backpack.auth.password.reset')}}">
                                    @lang('keywords.forgotPass')</a><br>
                                <a href="#" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">
                                    @lang('keywords.register')
                                </a>
                            </div>
                        </div>
                        <div class="bottom-btn d-flex justify-content-center">
                            <button class='btn btn-login btn-register-now my-5 animate-change-color' id='btn-login'
                                type="submit">
                                <p class="mb-0">{{__('keywords.login')}}</p>
                                <span id='spinner-load' class="spinner-border spinner-border-sm ml-1 d-none"
                                    role="status" aria-hidden="true"></span>
                                <span class="sr-only">Loading...</span>
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
        </div>
    </div>
</div>
@push('scriptsLogin')
<script type="application/javascript">
    $(function () {
            var spinner = $("#spinner-load");
            var spinner_fb = $("#spinner-load-fb");
            var spinner_gg = $("#spinner-load-gg");
            function loginSocial () {
                spinner_fb.removeClass('d-none');
                spinner_gg.removeClass('d-none');
            }

            $('#login-gg').click(loginSocial)
            $('#login-fb').click(loginSocial)

            $('#formLogin').submit(function (e) {
                e.preventDefault();
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
                    spinner.addClass('d-none')
                    if (data['message'] == 'success') {
                        toastr["success"]("@lang('keywords.toast.loginSuccess')");
                        location.reload()
                    } else if (data['message'] == 'empty') {
                        toastr["error"]("", "@lang('keywords.toast.pleaseEnterEmailPass')");
                    } else if (data['message'] == 'inactive') {
                        toastr["error"]("@lang('keywords.toast.incorrect')", "@lang('keywords.toast.loginInactive')");
                    } else {
                        toastr["error"]("@lang('keywords.toast.incorrect')", "@lang('keywords.toast.loginFailed')");
                    }
                }).fail(function (data) {
                    if(data.responseJSON) {
                        toastr["error"]("@lang('auth.throttle', ['minutes'=>10])", "@lang('keywords.toast.loginFailed')");
                    } else {
                        toastr["error"](data.message, "@lang('keywords.toast.loginFailed')");
                    }
                })
            });
        })
        toastLogin();

        function toastLogin() {
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