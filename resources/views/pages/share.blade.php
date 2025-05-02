








@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/upload.css') }}">
@endsection

@section('content')
<div class="container">
    <h1>Share a New Resource</h1>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Upload Form --}}
    <form action="{{ route('resource.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Title:</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Description (optional):</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Upload File:</label>
        <input type="file" name="file" class="form-control" required>
    </div>

    <button type="submit" class="btn">Share Resource</button>
</form>

</div>
@endsection
