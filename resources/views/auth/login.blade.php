<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

<<<<<<< HEAD
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
=======
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
        <div >
            <h1>Bienvenue au groupe Scolaire</h1>
            <h3>L'elite</h3>
        </div>
        {{-- <p class="account-subtitle">Need an account? <a href="{{url('register.custom')}}">Sign Up</a></p> --}}
        {{-- <h2>Sign in</h2>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        @endif --}}

        <form method="POST" action="{{ route('login') }}" >
            @csrf
        <div class="form-group">
            <label>Email <span class="login-danger">*</span></label>
            <input name="email" class="form-control @error('email') is-invalid @enderror" type="email">
            <span class="profile-views"><i class="fas fa-user-circle"></i></span>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Password <span class="login-danger">*</span></label>
                <span class="profile-views feather-eye toggle-password"></span>
                <input class="form-control pass-input @error('password') is-invalid @enderror" name="password" type="password">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        {{-- <div class="forgotpass">
            <div class="remember-me">
                <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                    <input type="checkbox" name="radio">
                    <span class="checkmark"></span>
                </label>
            </div>
            <a href="forgot-password.html">Forgot Password?</a>
        </div> --}}
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
>>>>>>> 92ce2d17a3cb766d287ae3fa1d63a6e54de354da

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

<<<<<<< HEAD
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
=======
@endsection
>>>>>>> 92ce2d17a3cb766d287ae3fa1d63a6e54de354da

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
