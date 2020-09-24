@extends('layouts.app')
@section('pagetitle', 'Register')
@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card raleway">
                <div class="card-header text-center login-card"><i class="fas fa-user-plus"></i> &nbsp; {{ __('Customer Register') }}</div>

                <div class="card-body">
                    <div class="alert alert-info alert-dismissible fade show text-center font-weight-bold" role="alert">
                        <small>Register facilities available for 'Customer' accounts only.</small>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <span class="font-weight-bold small" id='message'>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-unique MyButton">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-sm-4 offset-sm-4">
                              <a class="btn btn-sm text-dark btn-outline-primary waves-effect font-weight-bold" onclick="window.location.href='/auth/google'" ><img src="https://img.icons8.com/color/16/000000/google-logo.png"> &nbsp;&nbsp;Sign in with Google&nbsp;&nbsp;</a> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4 offset-sm-4">
                                <a class="btn btn-sm text-dark btn-outline-primary waves-effect font-weight-bold" onclick="window.location.href='/auth/linkedin'"><img src=https://img.icons8.com/fluent/16/000000/linkedin.png> &nbsp;&nbsp;Sign in with Linkedin</a> 
                              </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
    <script>
          $('#password, #password-confirm').on('keyup', function () {
            if ($('#password').val() == $('#password-confirm').val()) {
                $('#message').html('Matched <i class="fas fa-check-circle"></i>').css('color', 'green');
              }
            else 
                $('#message').html('Not Matching <i class="fas fa-times-circle"></i>').css('color', 'red');
              }
              );
    </script>  
@stop
@endsection
