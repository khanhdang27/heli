@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center bg-auth">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-xl-6 my-5">

                <!-- Heading -->
                <h1 class="display-4 text-center mb-3">
                    Sign in
                </h1>
                <!-- Form -->
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">{{ __('keywords.loginModal.email') }}</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">{{ __('keywords.loginModal.password') }}</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <a class="btn btn-link" href="#">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                        <div class="col-md-4">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection