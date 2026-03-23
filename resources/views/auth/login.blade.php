@extends('layouts.master')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-header text-center bg-transparent border-0 pt-4 pb-0">
                <h3 class="fw-bold mb-0">Login</h3>
                <p class="text-muted mb-0">Sign in to your account</p>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus placeholder="Enter your email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required placeholder="Enter your password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Login
                        </button>
                    </div>

                    <div class="text-center mt-3">
                        <a href="#" class="text-decoration-none text-muted">Forgot password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
