<div class="modal fade modal-index" id="loginModal">
    <div class="modal-dialog h-100 m-0 modal-login-xl">
        <div class="modal-content modal-login-content mx-auto">
            <div class="modal-header btn-close">
                <button type="button" class="close btn-x" data-dismiss="modal">&times;</button>
            </div>
            <div class="my-auto pb-5">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 d-flex justify-content-center align-items-center">
                            <div class="text-login-left text-secondary text-center text-secondary">
                                @lang('keywords.loginModal.welcomeBack')<br>
                                @lang('keywords.loginModal.loginToContinueCourse')
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="box-btn-login">
                                <a class="btn-register-now btn-login btn-secondary"
                                   href="{{route('site.socialLogin', 'facebook')}}">
                                    <div class="box-ic ic-fb"><img class="ic" src="{{asset("images/ic/ic_fb.svg")}}"
                                                                   width="33px">
                                    </div>
                                    <h2 class="mx-auto mb-0">@lang('keywords.loginWithFb')</h2>
                                </a>
                                <a class="btn-register-now btn-login btn-secondary"
                                   href="{{route('site.socialLogin', 'google')}}">
                                    <div class="box-ic ic-gg"><img class="ic" src="{{asset("images/ic/ic_gg.svg")}}"
                                                                   width="33px">
                                    </div>
                                    <h2 class="mx-auto mb-0">@lang('keywords.loginWithGg')</h2>
                                </a>
                                <a class="btn-register-now btn-login btn-secondary" href="#">
                                    <div class="box-ic ic-ap"><img class="ic" src="{{asset("images/ic/ic_apple.svg")}}"
                                                                   width="33px">
                                    </div>
                                    <h2 class="mx-auto mb-0">@lang('keywords.loginWithAp')</h2>
                                </a>
                            </div>
                            <div class="line-or d-flex align-items-center text-white">
                                <hr>
                                <span class="p-3">or</span>
                                <hr>
                            </div>
                            @csrf
                            {!! Form::open(['id'=>'formLogin']) !!}
                            <div class="input-login d-flex justify-content-center align-items-center mb-1">
                                {{ Form::email('email',null,[
                                                'class'=>'input-login-item',
                                                'placeholder'=>'Email'
                                                ]) }}
                            </div>
                            <div class="input-login d-flex justify-content-center align-items-center">
                                {{ Form::password('password', [
                                    'class'=> 'input-login-item',
                                    'placeholder'=>'Password'
                                    ])
                                }}
                            </div>
                            <div class="row align-items-center bottom-form mt-2 line-or">
                                <div class="col-sm">
                                    <div class="remember text-white d-flex">
                                        <label class="rememberCheck mr-3" for="rememberCheck">
                                            <input type="checkbox" id="rememberCheck">
                                            <div class="check"></div>
                                        </label>
                                        <h4 class="mb-0">@lang('keywords.rememberMe')</h4>
                                    </div>
                                </div>
                                <div class="col-sm text-right p-0">
                                    <a href="{{route('site.backpack.auth.password.reset')}}">
                                        <h4 class="mb-0">@lang('keywords.forgotPass')</h4></a><br>
                                    <a href="#" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">
                                        <h4 class="mb-0">@lang('keywords.register')</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="bottom-btn mt-2">
                                <button
                                    class='btn-login btn-secondary btn-register-now'
                                    id='btn-login' type="submit">
                                    {{__('Login')}}
                                    <span class="spinner-border spinner-border-sm ml-1 d-none" role="status"
                                          aria-hidden="true"></span>
                                    <span class="sr-only">Loading...</span>
                                </button>

                            </div>
                            {!! Form::close() !!}
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

                var spinner = $("#spinner-load");
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
                    if (data['message'] == 'success') {
                        spinner.addClass('d-none')
                        toastr["success"]("@lang('keywords.toast.loginSuccess')");
                        location.reload()
                    } else if (data['message'] == 'empty') {
                        spinner.addClass('d-none')
                        toastr["error"]("", "@lang('keywords.toast.pleaseEnterEmailPass')");
                    } else {
                        spinner.addClass('d-none')
                        toastr["error"]("@lang('keywords.toast.incorrect')", "@lang('keywords.toast.loginFailed')");
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
