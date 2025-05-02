@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/explore.css') }}">
@endsection

@section('content')
<div class="explore">
    <h2>Explore Resources</h2>
    <div class="resource-grid">
        @foreach ($resources as $resource)
            <div class="resource-card">
                <h3>{{ $resource->title }}</h3>
                <p>{{ $resource->description }}</p>
                <a href="{{ route('resource.detail', $resource->id) }}" class="btn">View Details</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
