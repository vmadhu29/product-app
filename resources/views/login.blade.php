@extends('layout')
@section('title', 'Login')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2>Login</h2>
        <form method="POST" action="/login">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <a href="/forgot-password">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="mt-3">
                <span>Don't have an account? <a href="{{ route('register.form') }}">Register</a></span>
            </div>
        </form>
    </div>
</div>
@endsection 
