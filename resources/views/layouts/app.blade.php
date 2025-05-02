<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConnectShare</title>
    
    {{-- Global Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Page Specific Styles --}}
    @yield('styles')
</head>
<body>

<nav class="navbar">
    <div class="logo">ConnectShare</div>
    <ul class="nav-links">
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('explore') }}" class="{{ request()->routeIs('explore') ? 'active' : '' }}">Explore</a></li>
        <li><a href="{{ route('share') }}" class="{{ request()->routeIs('share') ? 'active' : '' }}">Share Resource</a></li>

        {{-- Only show Dashboard if the user is authenticated --}}
        @auth
            <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a></li>
        @endauth

        {{-- Conditional Links --}}
        @guest
            <li><a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">Login</a></li>
        @endguest

        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn">Logout</button>
            </form>
        @endauth
    </ul>
</nav>

{{-- Success Flash Message --}}
@if(session('status'))
    <div id="flash-message" class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="content">
    @yield('content')
</div>

<footer class="footer">
    <p>made by k22kg class group</p>
</footer>

{{-- JavaScript to hide flash message after 3 seconds --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const flashMessage = document.getElementById('flash-message');
        
        if (flashMessage) {
            setTimeout(function() {
                flashMessage.style.transition = "opacity 1s"; // Smooth transition for fade-out effect
                flashMessage.style.opacity = '0'; // Fade out effect
                setTimeout(function() {
                    flashMessage.style.display = 'none'; // Remove the element after fade-out
                }, 1000); // Wait for the fade-out transition to finish
            }, 3000); // 3 seconds delay
        }
    });
</script>

</body>
</html>
