@extends('layouts.login_layout')


@section('name_content')

<h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Login</h4>

@stop

@section('content')

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group row">
        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>

        <div class="col-md-12">
            <input id="email" type="email" style="border: 1px solid ; border-color: rgb(200, 200, 200);  border-radius: 5px;  padding-left: 10px;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="form-labelght">{{ __('Password') }}</label>

        <div class="col-md-12">
            <input id="password" type="password" style="border: 1px solid ; border-color: rgb(200, 200, 200);  border-radius: 5px;  padding-left: 10px;" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>

    @if (Route::has('password.request'))
    <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
    </a>
    @endif
    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">
        {{ __('Login') }}
    </button>

    <p class="mt-4 text-sm text-center">
        Don't have an account?
        <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Register</a>
    </p>
</form>

@stop