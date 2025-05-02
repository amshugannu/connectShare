
{{-- resources/views/pages/collaborate.blade.php --}}
@extends('layouts.app')

@section('title', 'Collaborate on Resource')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Collaborate on: {{ $resource->title }}</h2>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Resource Details</h5>
            <p><strong>Description:</strong> {{ $resource->description ?? 'No description available.' }}</p>
            <p><strong>Uploaded By:</strong> {{ $resource->user->name ?? 'Anonymous' }}</p>
            <a href="{{ asset('storage/' . $resource->file_path) }}" class="btn btn-primary" target="_blank">View Resource</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Send a Collaboration Request</h5>

            <form action="#" method="POST">
                @csrf
                {{-- Replace "#" with your action route if you implement storing the collaboration request --}}

                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required placeholder="E.g., I'd love to work together on improving this resource..."></textarea>
                </div>

                <button type="submit" class="btn btn-success">Send Request</button>
                <a href="{{ route('explore') }}" class="btn btn-secondary">Back to Explore</a>
            </form>
        </div>
    </div>
</div>
@endsection
