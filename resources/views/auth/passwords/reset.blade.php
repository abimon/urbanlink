@extends('layouts.app')
@section('content')
<div class="container mt-5" style="border-radius:0px 0px 50px 0;">
    <div class="row justify-content-center">
        <div class="col-md-4 col-lg-6 d-flex justify-content-center align-items-center" ><img src="{{asset('storage/images/logo.png')}}" style="width:80%;"></div>
        <div class="col-md-8 col-lg-6" style="border-radius:50px 0px 50px 0;">
            <div class=" bg-transparent">
            <h3 class="text-center m-2"><b>{{ __('Reset Password') }}</b></h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-floating mb-2">
                            <input id="email" type="email" placeholder=" " class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="email">{{ __('Email Address') }}</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input id="password" type="password" placeholder=" " class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="password">{{ __('Password') }}</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input id="password-confirm" placeholder=" " type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection