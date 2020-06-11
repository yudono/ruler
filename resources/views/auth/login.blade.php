@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-12 col-lg-7 d-none d-lg-block d-xl-block">
            
            <div class="d-flex justify-content-center align-items-center min-vh-100">
                <img src="/img/assets/undraw_authentication_fsn5.svg" alt="" class="img-fluid" style="max-width: 400px">
            </div>

        </div>
        <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center min-vh-100">
            
            <form method="POST" action="{{ route('login') }}" class="container">
                @csrf

                <h1 class="text-center pacifico text-theme-1">Ruler</h1>
                <h5 class="text-center poppins text-secondary">Please login to your account</h5>

                <br>

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror py-3" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror py-3" name="password" placeholder="Password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="form-group row">
                    <div class="col-6 py-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-6" style="text-align: right">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link py-1" href="{{ route('password.request') }}">
                                {{ __('Forgot Password?') }}
                            </a>
                        @endif
                    </div>
                </div>

                <br>

                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-default bg-theme-2 white-text btn-block py-3">
                            {{ __('Login') }}
                        </button>

                    </div>
                </div>

                <br>

                <p>Don't have an account? <a href="/register">create an account now</a></p>

                <br>

                <div class="text-secondary">
                    <small>&copy; Copyright {{ date('Y') }}. Yudono Putro Utomo</small>
                </div>


            </form>


        </div>

    </div>
</div>
@endsection
