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
                                歡迎回來！<br>
                                登入繼續體驗課程
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
                                {{ Form::email('email','phung@gmail.com',['class'=>'input-login-item', 'placeholder'=>'Email']) }}
                            </div>
                            <div class="input-login d-flex justify-content-center align-items-center">
                                {{ Form::password('password', ['class'=> 'input-login-item', 'placeholder'=>'Password']) }}
                            </div>
                            <div class="bottom-btn">
                                {{ Form::submit('Login', ['class' => 'btn-login btn-secondary btn-register-now', 'id'=>'btn-login']) }}
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
                    console.log(data);
                    if (data.status == 200) {
                        location.href = data.url;
                    } else {
                        location.reload()
                    }
                })
            });
        })
    </script>
@endpush
