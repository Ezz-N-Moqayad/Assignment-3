@extends('layouts.login_layout')


@section('name_content')

<h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Verify Your Email Address</h4>

@stop

@section('content')


@if (session('resent'))
<div class="alert alert-success" role="alert">
    {{ __('A fresh verification link has been sent to your email address.') }}
</div>
@endif

{{ __('Before proceeding, please check your email for a verification link.') }}
{{ __('If you did not receive the email') }}, <a
    href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.

@endsection