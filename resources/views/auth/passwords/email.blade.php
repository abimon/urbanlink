@extends('layouts.app')
@section('content')
<div class="container mt-5" style="border-radius:50px 0px 50px 0;">
    <div class="row justify-content-center">
        <div class="col-md-4 col-lg-6 d-flex justify-content-center align-items-center" ><img src="{{asset('storage/images/logo.png')}}" style="width:80%;"></div>
        <div class="col-md-8 col-lg-6" style="border-radius:50px 0px 50px 0;">
            <div class=" bg-transparent">
            <h3 class="text-center m-2">{{ __('Reset Password') }}</h3>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-floating mb-2">
                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder=" " value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email">{{ __('Email Address') }}</label>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Send Password Reset Link') }}
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
