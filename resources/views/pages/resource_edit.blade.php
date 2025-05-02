@extends('layouts.app')

@section('content')
<div class="resource-edit">
    <h2>Edit Resource</h2>

    <form action="{{ route('resource.update', $resource->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Title -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $resource->title) }}" required>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description">{{ old('description', $resource->description) }}</textarea>
        </div>

        <!-- File (Optional) -->
        <div class="form-group">
            <label for="file">Upload a New File (Optional)</label>
            <input type="file" name="file" id="file">
            <p>Current file: <a href="{{ Storage::url($resource->file_path) }}" target="_blank">{{ basename($resource->file_path) }}</a></p>
        </div>

        <button type="submit" class="btn">Update Resource</button>
    </form>

    <!-- Cancel Button to Go Back to Dashboard -->
    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
</div>
@endsection

@push('styles')
<style>
    .resource-edit {
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        width: 600px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"], textarea, input[type="file"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    button {
        background-color: #4e54c8;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #3c44b3;
    }

    .btn-secondary {
        background-color: #ddd;
        color: #333;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 10px;
        display: inline-block;
    }

    .btn-secondary:hover {
        background-color: #ccc;
    }
</style>
@endpush
