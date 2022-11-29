@extends('layouts.login_layout')


@section('name_content')

<h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Register</h4>

@stop

@section('content')

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group row">
        <label for="name" class="form-label">{{ __('Name') }}</label>

        <div class="col-md-12">
            <input id="name" type="text"
                style="border: 1px solid ; border-color: rgb(200, 200, 200);  border-radius: 5px;  padding-left: 10px;"
                class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required
                autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>

        <div class="col-md-12">
            <input id="email" type="email"
                style="border: 1px solid ; border-color: rgb(200, 200, 200);  border-radius: 5px;  padding-left: 10px;"
                class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                required autocomplete="email">

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
            <input id="password" type="password"
                style="border: 1px solid ; border-color: rgb(200, 200, 200);  border-radius: 5px;  padding-left: 10px;"
                class="form-control @error('password') is-invalid @enderror" name="password" required
                autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

        <div class="col-md-12">
            <input id="password-confirm" type="password" class="form-control"
                style="border: 1px solid ; border-color: rgb(200, 200, 200);  border-radius: 5px;  padding-left: 10px;"
                name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">
        {{ __('Register') }}
    </button>

    <p class="mt-4 text-sm text-center">
        Do you have an account?
        <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bold">Login</a>
    </p>
</form>

@stop