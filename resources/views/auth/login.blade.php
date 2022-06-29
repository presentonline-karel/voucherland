@extends('layouts.app')

@section('content')

<div class="register-section">
    <div class="register-section__content">
        <h1>VOUCHERLAND.</h1>

        <form class="form register-form" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- EMAIL -->
            <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <!-- PASSWORD -->
            <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="flex-between">
                <!-- REMEMBER -->
                <div class="flex-align">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="remember-input form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <!-- FORGOT PASSWORD -->
                <div>
                    @if (Route::has('password.request'))
                    <a class="forgot-password" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>

            <button type="submit" class="button button-primary">Login</button>
        </form>

        <div class="register-section__content__toLogin">
            <p class="register-section__content__toLogin__p">
                no account yet?
            </p>

            <a id="register" class="button button-primary" href="/register">Register</a>

            <a class="button button-tertiary" href="/home"><i class="fa fa-arrow-left button-i-reverse" aria-hidden="true"></i> Go back</a>
        </div>
    </div>
</div>

@endsection