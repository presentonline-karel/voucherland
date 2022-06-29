@extends('layouts.app')

@section('content')

<div class="register-section">
    <div class="register-section__content">
        <h1>VOUCHERLAND.</h1>

        <form class="form register-form" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- NAME -->
            <input id="name" type="text" class="input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <!-- EMAIL -->
            <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email" required autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <!-- PASSWORD -->
            <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <!-- PASSWORD CONFIRM -->
            <input id="password-confirm" type="password" class="input form-control" name="password_confirmation" placeholder="confirm password" required autocomplete="new-password">

            <!-- SUBMIT BUTTON -->
            <button type="submit" class="button button-primary">Register</button>
        </form>

        <div class="register-section__content__toLogin">
            <p class="register-section__content__toLogin__p">
                already got an account?
            </p>

            <a id="login" class="button button-primary" href="/login">Login</a>

            <a class="button button-tertiary" href="/home"><i class="fa fa-arrow-left button-i-reverse" aria-hidden="true"></i> Go back</a>
        </div>
    </div>
</div>
</div>

@endsection