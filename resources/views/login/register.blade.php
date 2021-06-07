<div class="modal fade modal-login" id="registerModal">

    <div id="snackbar">
        <p class="m-0" id="contentToast">Toast</p>
    </div>


    <div class="modal-dialog modal-login-xl">

        <div class="modal-content modal-login-content">
            <div class="modal-header btn-close">
                <button type="button" class="close btn-x" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body modal-body-login">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 login-left">
                            <div class="text-login-left text-center">
                                免費註冊<br>
                                體驗課程<br>
                                網上課程及實時課程<br>
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
                                {{ Form::email('email',null,['class'=>'input-login-item','placeholder'=>'Email','autocomplete'=>'off']) }}
                            </div>
                            <div class="bottom-btn">
                                {{ Form::submit('Register', ['class'=>'btn-login btn-secondary btn-register-now', 'id'=>'btn-register']) }}
                            </div>
                            {!! Form::close() !!}
                            <div class="already-member text-center">
                                <a href="#">@lang('keywords.alreadyMember')</a>
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
                let formData = $(this).serializeArray();
                $(".invalid-feedback").children("strong").text("");
                $("#registerForm input").removeClass("is-invalid");
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json'
                    },
                    url: "{{ route('site.register') }}",
                    data: formData
                }).done(function (data) {
                    if (data.code == 201) {
                        Toast("Please check mail to get password! 0_<");
                    } else {
                        Toast("Please enter email!");
                    }
                });
            });
        });

        function Toast(content, status) {
            var color = '#fff';
            if(status == 'warning'){
                color = '#ffc107';
            }else if(status == 'error'){
                color = '#dc3545';
            }
            var snackbar = document.getElementById("snackbar");
            var contentToast = document.getElementById("contentToast");

            contentToast.innerHTML = content;
            contentToast.style.color= 'red';
            snackbar.style.backgroundColor = color;

            snackbar.className = "show";

            setTimeout(function(){ snackbar.className = snackbar.className.replace("show", ""); }, 3000);
        }

    </script>
@endpush
