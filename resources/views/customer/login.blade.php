@extends('layouts.app')
@section('pagetitle', 'Login')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card raleway">
                <div class="card-header text-center font-weight-bold"><i class="fas fa-lock"></i> &nbsp;{{ __('Customer Login') }}</div>

                <div class="card-body" style="padding-top:10%;padding-bottom:10%;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-unique MyButton">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link font-weight-bold" href="{{ route('password.request') }}"><small>
                                        {{ __('Forgot Your Password?') }}</small>
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-sm-4 offset-sm-4">
                              <a class="btn btn-sm text-dark btn-outline-primary waves-effect font-weight-bold" href="#"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> &nbsp;&nbsp;Sign in with Google&nbsp;&nbsp;</a> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4 offset-sm-4">
                                <a class="btn btn-sm text-dark btn-outline-primary waves-effect font-weight-bold" href="#"><img src="https://img.icons8.com/color/16/000000/facebook-new.png"> Sign in with Facebook</a> 
                              </div>
                            
                        </div>
                       
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection