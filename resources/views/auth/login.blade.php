@extends('auth.auth')

@section('content')

<div class="main-wrapper login-body">
    <div class="login-wrapper">
    <div class="container">
    <div class="loginbox">
    <div class="login-left">
    <img class="img-fluid" src="assetss/img/login.png" alt="Logo">
    </div>
    <div class="login-right">
    <div class="login-right-wrap">
    <h1>Welcome to Preskool</h1>
    <p class="account-subtitle">Need an account? <a href="{{url('register.custom')}}">Sign Up</a></p>
    <h2>Sign in</h2>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    @endif

    <form method="POST" action="{{ route('login') }}" >
        @csrf
    <div class="form-group">
    <label>Email <span class="login-danger">*</span></label>
    <input name="email" class="form-control" type="email">
    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
    </div>
    <div class="form-group">
    <label>Password <span class="login-danger">*</span></label>
    <input class="form-control pass-input" name="password" type="password">
    <span class="profile-views feather-eye toggle-password"></span>
    </div>
    <div class="forgotpass">
    <div class="remember-me">
    <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
    <input type="checkbox" name="radio">
    <span class="checkmark"></span>
    </label>
    </div>
    <a href="forgot-password.html">Forgot Password?</a>
    </div>
    <div class="form-group">
    <button class="btn btn-primary btn-block" type="submit">Login</button>
    </div>
    </form>

    <div class="login-or">
    <span class="or-line"></span>
    <span class="span-or">or</span>
    </div>

    <div class="social-login">
    <a href="#"><i class="fab fa-google-plus-g"></i></a>
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection

