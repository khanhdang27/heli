<div class="modal fade modal-login" id="registerModal">

    <div class="modal-dialog modal-login-xl">

        <div class="modal-content modal-login-content">
            <div class="modal-header btn-close">
                <button type="button" class="close btn-x" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 login-left d-flex flex-column justify-content-center">
                            <div class="text-login-left text-center">
                                @lang('keywords.registerModal.freeRegistration')<br>
                                @lang('keywords.registerModal.experienceCourse')<br> 
                                @lang('keywords.registerModal.onlineAndRealTimeCourse')<br>
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
                            {!! Form::open(['id'=>'registerForm']) !!}
                                <div class="input-login d-flex justify-content-center align-items-center mb-3">
                                    {{ Form::email('email',null,[
                                                    'class'=>'input-login-item',
                                                    'placeholder'=>'Email',
                                                    'autocomplete'=>'off'
                                        ]) }}
                                </div>
                                <div class="bottom-btn">
                                    
                                    <button class='btn-login btn-secondary btn-register-now'
                                        id='btn-register'>
                                        {{__('Register')}}
                                        <span id='spinner-load' class="spinner-border spinner-border-sm ml-1 d-none" role="status" aria-hidden="true"></span>
                                        <span class="sr-only">Loading...</span>
                                    </button>

                                </div>
                            {!! Form::close() !!}
                            <div class="already-member text-center">
                                <a href="#" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">@lang('keywords.alreadyMember')</a>
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
                    console.log('data :>> ', data);
                    if (data.status == 200) {
                        spinner.addClass('d-none')
                        toastr["success"]("@lang('keywords.toast.pleaseCheckEmail')", "@lang('keywords.toast.registerSuccess')");
                        button_regis.addClass("disabled")

                    } else if (data.status == 409) {
                        spinner.addClass('d-none')
                        toastr["error"]('',"mail is duplicate");
                        button_regis.addClass("disabled")
                    
                    } else {
                        spinner.addClass('d-none')
                        toastr["error"]('',"@lang('keywords.toast.pleaseEnterEmail')");
                        button_regis.addClass("disabled")
                    }
                });
            });
        });
        toastRegister();
        function toastRegister(){
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
