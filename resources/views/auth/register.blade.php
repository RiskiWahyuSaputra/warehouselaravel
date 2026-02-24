@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-md-6">
            <div class="text-center mb-4">
                <i class="bi bi-person-plus text-primary" style="font-size: 3rem;"></i>
                <h3 class="fw-bold mt-2">Join Warehouse</h3>
                <p class="text-muted">Register to start managing your inventory</p>
            </div>
            
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="name" class="form-label text-muted small text-uppercase fw-bold">{{ __('Full Name') }}</label>
                                <div class="input-group border rounded-3 overflow-hidden">
                                    <span class="input-group-text bg-white border-0 px-3"><i class="bi bi-person text-muted"></i></span>
                                    <input id="name" type="text" class="form-control border-0 py-2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="John Doe">
                                </div>
                                @error('name')
                                    <span class="invalid-feedback d-block mt-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="email" class="form-label text-muted small text-uppercase fw-bold">{{ __('Email Address') }}</label>
                                <div class="input-group border rounded-3 overflow-hidden">
                                    <span class="input-group-text bg-white border-0 px-3"><i class="bi bi-envelope text-muted"></i></span>
                                    <input id="email" type="email" class="form-control border-0 py-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="name@example.com">
                                </div>
                                @error('email')
                                    <span class="invalid-feedback d-block mt-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="password" class="form-label text-muted small text-uppercase fw-bold">{{ __('Password') }}</label>
                                <div class="input-group border rounded-3 overflow-hidden">
                                    <span class="input-group-text bg-white border-0 px-3"><i class="bi bi-lock text-muted"></i></span>
                                    <input id="password" type="password" class="form-control border-0 py-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Min. 8 characters">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback d-block mt-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <label for="password-confirm" class="form-label text-muted small text-uppercase fw-bold">{{ __('Confirm Password') }}</label>
                                <div class="input-group border rounded-3 overflow-hidden">
                                    <span class="input-group-text bg-white border-0 px-3"><i class="bi bi-shield-check text-muted"></i></span>
                                    <input id="password-confirm" type="password" class="form-control border-0 py-2" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat password">
                                </div>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary py-2 fw-bold rounded-3 shadow-sm">
                                <i class="bi bi-person-check me-2"></i>{{ __('Register Account') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer bg-light border-0 py-3 text-center rounded-bottom-4">
                    <span class="text-muted small">Already have an account?</span>
                    <a href="{{ route('login') }}" class="small fw-bold text-decoration-none ms-1">Login here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
