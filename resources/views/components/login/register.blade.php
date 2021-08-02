<div class="modal fade modal-index" id="registerModal">
    <div class="modal-dialog h-100 m-0 modal-login-xl">
        <div class="modal-content modal-login-content">
            <div class="modal-header btn-close">
                <button type="button" class="close btn-x" data-dismiss="modal">&times;</button>
            </div>
            <div class="my-auto pb-5">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 login-left d-flex flex-column justify-content-center align-items-center">
                            <div class="text-login-left h1 text-secondary text-center">
                                @lang('keywords.registerModal.freeRegistration')<br>
                                @lang('keywords.registerModal.experienceCourse')<br>
                                @lang('keywords.registerModal.onlineAndRealTimeCourse')<br>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="box-btn-login">
                                <a class="btn-register-now btn-login btn-secondary"
                                   href="{{route('site.socialLogin', 'facebook')}}">
                                    <div class="box-ic ic-fb"><img class="ic" src="{{asset("images/ic/ic_fb.svg")}}"
                                                                   width="33px">
                                    </div>
                                    <p class="mx-auto mb-0">@lang('keywords.loginWithFb')</p>
                                </a>
                                <a class="btn-register-now btn-login btn-secondary"
                                   href="{{route('site.socialLogin', 'google')}}">
                                    <div class="box-ic ic-gg"><img class="ic" src="{{asset("images/ic/ic_gg.svg")}}"
                                                                   width="33px">
                                    </div>
                                    <p class="mx-auto mb-0">@lang('keywords.loginWithGg')</p>
                                </a>
                            </div>
                            <div class="line-or d-flex align-items-center text-white">
                                <hr>
                                <span class="p-3">or</span>
                                <hr>
                            </div>
                            {!! Form::open(['id'=>'registerForm']) !!}
                            <div class="input-login d-flex justify-content-center align-items-center">
                                {{ Form::email('email',null,[
                                                'class'=>'input-login-item',
                                                'placeholder'=>'Email',
                                                'autocomplete'=>'off'
                                    ]) }}
                            </div>
                            <div class="form-group form-check mt-5">
                                <input type="checkbox" class="form-check-input check-subscribe" id="subscribe" name="subscribe">
                                <label class="form-check-label h4 text-white ml-3" for="subscribe">
                                    {{__('Subscribe to our Newsletter')}}
                                </label>
                            </div>
                            <div class="bottom-btn mt-5 pt-3">
                                <button class='btn-login btn-secondary btn-register-now'
                                        id='btn-register'>
                                    {{__('Register')}}
                                    <span id='spinner-load' class="spinner-border spinner-border-sm ml-1 d-none"
                                          role="status" aria-hidden="true"></span>
                                    <span class="sr-only">Loading...</span>
                                </button>
                            </div>
                            {!! Form::close() !!}
                            <div class="mt-5 line-or">
                                <a class="text-white" href="#" data-toggle="modal" data-target="#loginModal"
                                   data-dismiss="modal">
                                    <h4 class="text-center">
                                        @lang('keywords.alreadyMember')
                                    </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function () {
            $('#registerForm').submit(function (e) {
                e.preventDefault();
                var spinner = $("#spinner-load");
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
