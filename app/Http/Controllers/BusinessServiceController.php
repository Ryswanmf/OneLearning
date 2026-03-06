<?php

namespace App\Http\Controllers;

use App\Models\BusinessService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BusinessServiceController extends Controller
{
    public function index()
    {
        $services = BusinessService::latest()->paginate(10);
        return view('admin.bisnis.layananbisnis.index', compact('services'));
    }

    public function create()
    {
        return view('admin.bisnis.layananbisnis.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|string',
            'is_active' => 'boolean'
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['is_active'] = $request->has('is_active');

        BusinessService::create($validated);

        return redirect()->route('admin.layanan-bisnis.index')->with('success', 'Layanan bisnis berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $service = BusinessService::findOrFail($id);
        return view('admin.bisnis.layananbisnis.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = BusinessService::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|string',
            'is_active' => 'boolean'
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['is_active'] = $request->has('is_active');

        $service->update($validated);

        return redirect()->route('admin.layanan-bisnis.index')->with('success', 'Layanan bisnis berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $service = BusinessService::findOrFail($id);
        $service->delete();
        return redirect()->route('admin.layanan-bisnis.index')->with('success', 'Layanan bisnis berhasil dihapus.');
    }
}
