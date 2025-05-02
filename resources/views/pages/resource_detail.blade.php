@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/resource_detail.css') }}">
@endsection

@section('content')
<div class="resource-detail-card">
    <div class="resource-detail">
        <h2>{{ $resource->title }}</h2>
        <p>{{ $resource->description }}</p>
        
        <!-- If the resource file is an image, display it -->
        @if(in_array(pathinfo($resource->file_path, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']))
            <img src="{{ asset('storage/' . $resource->file_path) }}" alt="{{ $resource->title }}" class="resource-image">
        @else
            <!-- Display a generic file icon or something for non-image files -->
            <div class="file-icon">
                <i class="fas fa-file"></i> <!-- FontAwesome file icon -->
            </div>
        @endif

        <a href="{{ asset('storage/' . $resource->file_path) }}" target="_blank" class="btn">Download/View File</a>
    </div>
</div>
@endsection
