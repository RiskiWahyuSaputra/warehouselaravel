@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="col-md-5">
            <div class="text-center mb-4">
                <i class="bi bi-boxes text-primary" style="font-size: 3rem;"></i>
                <h3 class="fw-bold mt-2">Welcome Back</h3>
                <p class="text-muted">Please login to your Warehouse account</p>
            </div>
            
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="form-label text-muted small text-uppercase fw-bold">Email Address</label>
                            <div class="input-group border rounded-3 overflow-hidden">
                                <span class="input-group-text bg-white border-0 px-3"><i class="bi bi-envelope text-muted"></i></span>
                                <input id="email" type="email" class="form-control border-0 py-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com">
                            </div>
                            @error('email')
                                <span class="invalid-feedback d-block mt-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label text-muted small text-uppercase fw-bold">Password</label>
                            <div class="input-group border rounded-3 overflow-hidden">
                                <span class="input-group-text bg-white border-0 px-3"><i class="bi bi-lock text-muted"></i></span>
                                <input id="password" type="password" class="form-control border-0 py-2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="••••••••">
                            </div>
                            @error('password')
                                <span class="invalid-feedback d-block mt-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label text-muted" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link btn-sm text-decoration-none p-0" href="{{ route('password.request') }}">
                                    Forgot Password?
                                </a>
                            @endif
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary py-2 fw-bold rounded-3 shadow-sm">
                                <i class="bi bi-box-arrow-in-right me-2"></i>{{ __('Login Now') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer bg-light border-0 py-3 text-center rounded-bottom-4">
                    <span class="text-muted small">Don't have an account?</span>
                    <a href="{{ route('register') }}" class="small fw-bold text-decoration-none ms-1">Create Account</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
