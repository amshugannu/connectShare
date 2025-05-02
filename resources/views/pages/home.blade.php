
@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection


@section('content')
<div class="home">
    <h1>Welcome to ConnectShare</h1>
    <p>Seamless resource sharing for individuals and organizations.</p>
    <a href="{{ route('explore') }}" class="btn">Explore Resources</a>
    <a href="{{ route('share') }}" class="btn">Share a Resource</a>
</div>
@endsection
