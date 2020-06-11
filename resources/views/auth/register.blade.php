@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-12 col-lg-7 d-none d-lg-block d-xl-block">
            
            <div class="d-flex justify-content-center align-items-center min-vh-100">
                <img src="/img/assets/undraw_completing_6bhr.svg" alt="" class="img-fluid" style="max-width: 400px">
            </div>

        </div>
        <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center min-vh-100">
            
            <form method="POST" action="{{ route('register') }}" class="container">
                @csrf

                <h1 class="text-center pacifico text-theme-1">Ruler</h1>
                <h5 class="text-center poppins text-secondary">Create New Account</h5>

                <br>

                <div class="form-group row">
                    <div class="col-12">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror py-3" name="name" value="{{ old('name') }}" placeholder="Fullname" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="form-group row">
                    <div class="col-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror py-3" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="form-group row">
                    <div class="col-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror py-3" name="password" placeholder="Password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control py-3" name="password_confirmation" placeholder="Password Confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <br>

                <p>
                    <input type="checkbox">&nbsp;&nbsp;I agree to the <a href="#terms">terms</a> and <a href="#conditions">conditions</a> that apply.
                </p>

                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-default bg-theme-2 white-text btn-block py-3">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>

                <br>

                <p>If you already have an account, <a href="/login">log in to your account</a></p>

                <br>

                <div class="text-secondary">
                    <small>&copy; Copyright {{ date('Y') }}. Yudono Putro Utomo</small>
                </div>
            </form>


        </div>

    </div>
</div>
@endsection
