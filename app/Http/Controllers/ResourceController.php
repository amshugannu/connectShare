<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
use Illuminate\Support\Facades\Storage;

class ResourceController extends Controller
{
    // Show all resources (Explore page)
    public function index()
    {
        $resources = Resource::latest()->get();
        return view('pages.explore', compact('resources'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,docx,zip,jpg,jpeg,png|max:10240',
        ]);

        $path = $request->file('file')->store('resources', 'public');

        Resource::create([
            'title' => $request->title,
            'description' => $request->description ?? null,
            'file_path' => $path,
            'user_id' => auth()->id() ?? null,
        ]);

        return redirect()->route('explore')->with('success', 'Resource shared successfully!');
    }

    public function show($id)
    {
        $resource = Resource::findOrFail($id);
        return view('pages.resource_detail', compact('resource'));
    }

    public function edit($id)
    {
        $resource = Resource::findOrFail($id);

        if ($resource->user_id !== auth()->id()) {
            return redirect()->route('dashboard')->with('error', 'You are not authorized to edit this resource.');
        }

        return view('pages.resource_edit', compact('resource'));
    }

    public function update(Request $request, $id)
    {
        $resource = Resource::findOrFail($id);

        if ($resource->user_id !== auth()->id()) {
            return redirect()->route('dashboard')->with('error', 'You are not authorized to update this resource.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'file' => 'nullable|file|mimes:pdf,docx,zip,jpg,jpeg,png|max:10240',
        ]);

        $resource->title = $request->title;
        $resource->description = $request->description;

        if ($request->hasFile('file')) {
            Storage::delete($resource->file_path);
            $resource->file_path = $request->file('file')->store('resources', 'public');
        }

        $resource->save();

        return redirect()->route('dashboard')->with('success', 'Resource updated successfully.');
    }

    public function destroy($id)
    {
        $resource = Resource::findOrFail($id);

        if ($resource->user_id !== auth()->id()) {
            return redirect()->route('dashboard')->with('error', 'You are not authorized to delete this resource.');
        }

        Storage::delete($resource->file_path);
        $resource->delete();

        return redirect()->route('dashboard')->with('success', 'Resource deleted successfully.');
    }

    public function dashboard()
    {
        $resources = Resource::where('user_id', auth()->id())->get();
        return view('pages.dashboard', compact('resources'));
    }

    // Collaborate on a resource
    public function collaborate($id)
    {
        $resource = Resource::findOrFail($id);
        return view('pages.collaborate', compact('resource'));
    }
}
