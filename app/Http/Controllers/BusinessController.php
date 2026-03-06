<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::latest()->paginate(10);
        return view('admin.bisnis.others.index', compact('businesses'));
    }

    public function create()
    {
        return view('admin.bisnis.others.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|string',
            'is_active' => 'boolean'
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['is_active'] = $request->has('is_active');

        Business::create($validated);

        return redirect()->route('admin.bisnis.index')->with('success', 'Konten berhasil ditambahkan.');
    }

    public function edit(Business $bisni)
    {
        return view('admin.bisnis.others.edit', ['business' => $bisni]);
    }

    public function update(Request $request, Business $bisni)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|string',
            'is_active' => 'boolean'
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['is_active'] = $request->has('is_active');

        $bisni->update($validated);

        return redirect()->route('admin.bisnis.index')->with('success', 'Konten berhasil diperbarui.');
    }

    public function destroy(Business $bisni)
    {
        $bisni->delete();
        return redirect()->route('admin.bisnis.index')->with('success', 'Konten berhasil dihapus.');
    }
}
