@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login-container">
    <div class="login-card">
        <h2>Login</h2>

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required class="form-control">
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required class="form-control">
            </div>

            <button type="submit" class="btn">Login</button>
        </form>

        <div class="register-link">
            <p>Don't have an account? <a href="{{ route('register') }}">Register here</a>.</p>
        </div>
    </div>
</div>
@endsection
