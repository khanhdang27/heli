<div class="modal fade modal-index" id="registerModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content modal-login-content border-white">
            <div class="modal-header btn-close">
                <button type="button" class="close btn-x m-0 p-0" data-dismiss="modal">
                    <span aria-hidden="true" class="rounded-circle p-1"><i class="fe fe-x"></i></span>
                </button>
            </div>
            <div class="my-auto pb-5">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 login-left d-flex flex-column justify-content-center align-items-center">
                            <div class="text-login-left h1 text-white text-center">
                                @lang('keywords.registerModal.freeRegistration')<br>
                                @lang('keywords.registerModal.experienceCourse')<br>
                                @lang('keywords.registerModal.onlineAndRealTimeCourse')<br>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-btn-login">
                                <a class="btn btn-register-now btn-login mt-0 mb-2 mx-auto animate-change-color"
                                    id="login-fb-register" href="{{route('site.socialLogin', 'facebook')}}">
                                    <div class="box-ic ic-fb"><img class="ic" src="{{asset("images/ic/ic_fb.svg")}}"
                                            width="33px">
                                    </div>
                                    <p class="mx-auto mb-0">@lang('keywords.loginWithFb')</p>
                                    <span id='spinner-load-fb-register'
                                        class="spinner-border spinner-border-sm ml-1 d-none" role="status"
                                        aria-hidden="true"></span>
                                    <span class="sr-only">Loading...</span>
                                </a>
                                <a class="btn btn-register-now btn-login mt-0 mx-auto  animate-change-color"
                                    id="login-gg-register" href="{{route('site.socialLogin', 'google')}}">
                                    <div class="box-ic ic-gg"><img class="ic" src="{{asset("images/ic/ic_gg.svg")}}"
                                            width="33px">
                                    </div>
                                    <p class="mx-auto mb-0">@lang('keywords.loginWithGg')</p>
                                    <span id='spinner-load-gg-register'
                                        class="spinner-border spinner-border-sm ml-1 d-none" role="status"
                                        aria-hidden="true"></span>
                                    <span class="sr-only">Loading...</span>
                                </a>
                            </div>
                            <div class="line-or d-flex align-items-center text-white mx-auto">
                                <hr>
                                <span class="p-3">or</span>
                                <hr>
                            </div>
                            {!! Form::open(['id'=>'registerForm']) !!}
                            <div class="input-login mx-auto">
                                {{ Form::email('email',null,[
                                                'class'=>'input-login-item',
                                                'placeholder'=> __('keywords.loginModal.email'),
                                                'autocomplete'=>'off'
                                    ]) }}
                            </div>

                            <div class="bottom-btn mt-5 d-flex justify-content-center">
                                <button class='btn-login btn-register-now mt-0' id='btn-register'>
                                    @lang('keywords.registerModal.register')
                                    <span id='spinner-load-register'
                                        class="spinner-border spinner-border-sm ml-1 d-none" role="status"
                                        aria-hidden="true"></span>
                                    <span class="sr-only">Loading...</span>
                                </button>
                            </div>
                            {!! Form::close() !!}
                            <div class="mt-5">
                                <a class="text-white" href="#" data-toggle="modal" data-target="#loginModal"
                                    data-dismiss="modal">
                                    <h5 class="text-center">
                                        @lang('keywords.alreadyMember')
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scriptsLogin')
<script type="application/javascript">
    $(function () {
        var spinner = $("#spinner-load-register");
        var spinner_fb = $("#spinner-load-fb-register");
        var spinner_gg = $("#spinner-load-gg-register");
        function loginSocial() {
            spinner_fb.removeClass('d-none');
            spinner_gg.removeClass('d-none');
        }

        $('#login-gg-register').click(loginSocial)
        $('#login-fb-register').click(loginSocial)

        $('#registerForm').submit(function (e) {
            e.preventDefault();
            
            var button_regis = $("btn-register");

            let formData = $(this).serializeArray();
            $(".invalid-feedback").children("strong").text("");
            $("#registerForm input").removeClass("is-invalid");
            spinner.removeClass('d-none');
            button_regis.addClass("disabled")
            $.ajax({
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('site.register') }}",
                data: formData
            }).done(function (data) {
                if (data.status == 200) {
                    spinner.addClass('d-none')
                    toastr["success"]("@lang('keywords.toast.pleaseCheckEmail')", "@lang('keywords.toast.registerSuccess')");
                    button_regis.removeClass("disabled")
                }
            }).fail(function (data, textStatus, errorThrown) {
                if (data.status == 400) {
                    spinner.addClass('d-none')
                    toastr["error"](data.responseJSON.message, 'Error');
                    button_regis.removeClass("disabled")
                } else {
                    spinner.addClass('d-none')
                    toastr["error"](data.responseJSON.message, 'Error');
                    button_regis.removeClass("disabled")
                }
            });
        });
    });
    toastRegister();

    function toastRegister() {
        toastr.options = {
            "closeButton": true,
            "newestOnTop": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": true,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "3600",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    }
</script>
@endpush