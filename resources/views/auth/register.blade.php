@extends('layouts.app')
@section('content')
<div class="container p-3" style="border-radius:50px 0px 50px 0;">
    <div class="row justify-content-center">
        <div class="col-md-4 col-lg-6 d-flex justify-content-center align-items-center"><img src="{{asset('storage/images/logo.png')}}" style="width:80%;"></div>
        <div class="col-md-8 col-lg-6" style="border-radius:50px 0px 50px 0;">
            <div class=" ">
                <h3 class="text-center m-2"><b>{{ __('Register') }}</b></h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder=" " autofocus>
                            <label for="name">{{ __('Full Name') }}</label>
                            @error('fname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input id="contact" type="number" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" placeholder=" " autofocus>
                            <label for="name">{{ __('Contact') }}</label>
                            @error('contact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder=" " value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="email">{{ __('Email Address') }}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="profile" type="file" class="form-control @error('profile') is-invalid @enderror" name="profile" value="{{ old('profile') }}" required autocomplete="profile" accept="image/*" autofocus>
                            <label for="profile">{{ __('Passport Photo(4cmX4cm)') }}</label>
                            @error('profile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input id="password" type="password" placeholder=" " class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="password">{{ __('Password') }}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="password-confirm" type="password" placeholder=" " class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        </div>
                        <div class="form-floating mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center">Already have account? <a href="/login">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection