






@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register">
    <h2>Register</h2>

    {{-- Show all validation errors at the top --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul style="margin-bottom: 0;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register.submit') }}">
        @csrf

        {{-- Name Field --}}
        <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Email Field --}}
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Password Field --}}
        <input type="password" name="password" placeholder="Password" required>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Confirm Password Field --}}
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

        <button type="submit" class="btn">Register</button>
    </form>
</div>
@endsection
