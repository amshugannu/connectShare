@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
<div class="dashboard">
    {{-- Check if user is authenticated before displaying their name --}}
    @auth
        <h2>Welcome, {{ Auth::user()->name }}</h2>
    @else
        <h2>Welcome, Guest</h2>
    @endauth

    <p>Manage your shared resources here.</p>

    @if(session('success'))
        <div id="flash-message" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="resource-list">
        @if ($resources->isEmpty())
            <p>You have no shared resources yet. Start by sharing a resource!</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resources as $resource)
                    <tr>
                        <td>{{ $resource->title }}</td>
                        <td>{{ $resource->description }}</td>
                        <td>
                            <a href="{{ route('resource.edit', $resource->id) }}" class="btn btn-warning">Edit</a>
                            
                            {{-- Collaborate Button --}}
                            <a href="{{ route('resource.collaborate', $resource->id) }}" class="btn btn-info">Collaborate</a>

                            {{-- Delete Form --}}
                            <form action="{{ route('resource.destroy', $resource->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this resource?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const flashMessage = document.getElementById('flash-message');
        
        if (flashMessage) {
            setTimeout(function() {
                flashMessage.classList.add('hidden'); // fade-out class
                setTimeout(function() {
                    flashMessage.style.display = 'none';
                }, 400);
            }, 3000); // show for 3 seconds
        }
    });
</script>
@endsection
