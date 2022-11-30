@extends('layouts.login_layout')


@section('name_content')

<h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Reset Password</h4>

@stop

@section('content')

<form method="POST" action="{{ route('password.email') }}">
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

    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">
        {{ __('Send Password Reset Link') }}
    </button>

    <p class="mt-4 text-sm text-center">
        Don't have an account?
        <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Register</a>
    </p>
</form>

@stop