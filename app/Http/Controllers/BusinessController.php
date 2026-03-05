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
        return view('admin.layananbisnis.index', compact('businesses'));
    }

    public function create()
    {
        return view('admin.layananbisnis.create');
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

        return redirect()->route('admin.bisnis.index')->with('success', 'Layanan bisnis berhasil ditambahkan.');
    }

    public function edit(Business $bisni)
    {
        // $bisni adalah parameter default Laravel untuk resource 'bisnis'
        return view('admin.layananbisnis.edit', ['business' => $bisni]);
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

        return redirect()->route('admin.bisnis.index')->with('success', 'Layanan bisnis berhasil diperbarui.');
    }

    public function destroy(Business $bisni)
    {
        $bisni->delete();
        return redirect()->route('admin.bisnis.index')->with('success', 'Layanan bisnis berhasil dihapus.');
    }
}
