@extends('layouts.app')
@section('pagetitle', 'Admin-Login')
@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card raleway">
                <div class="card-header text-center font-weight-bold"><i class="fas fa-lock"></i> &nbsp;{{ __('Admin Login') }}</div>
                <div class="card-body" style="padding-top:10%;padding-bottom:10%;">
                        {{-- Success Alert --}}
                        @if(session('status'))
                           <div class="alert alert-success alert-dismissible fade show text-center font-weight-bold" role="alert">
                               {{session('status')}}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        @endif

                        {{-- Error Alert --}}
                        @if(session('error'))
                             <div class="alert alert-danger alert-dismissible fade show text-center font-weight-bold" role="alert">
                                 {{session('error')}}
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                        @endif

                    <form method="POST" action="{{ route($loginRoute) }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
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
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-unique MyButton">
                                    {{ __('Login') }}
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