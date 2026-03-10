<?php

namespace App\Http\Controllers;

use App\Models\StudyPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudyPackageController extends Controller
{
    public function index()
    {
        $packages = StudyPackage::latest()->paginate(10);
        return view('admin.paket_belajar.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.paket_belajar.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|string',
            'duration_minutes' => 'required|integer|min:1',
            'description' => 'nullable|string',
            'features' => 'nullable|string',
            'is_popular' => 'boolean',
            'is_active' => 'boolean'
        ]);

        $validated['slug'] = Str::slug($request->name);
        $validated['is_popular'] = $request->has('is_popular');
        $validated['is_active'] = $request->has('is_active');

        StudyPackage::create($validated);

        return redirect()->route('admin.paket-belajar.index')->with('success', 'Paket belajar berhasil ditambahkan.');
    }

    public function edit(StudyPackage $paket_belajar)
    {
        return view('admin.paket_belajar.edit', compact('paket_belajar'));
    }

    public function update(Request $request, StudyPackage $paket_belajar)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|string',
            'duration_minutes' => 'required|integer|min:1',
            'description' => 'nullable|string',
            'features' => 'nullable|string',
            'is_popular' => 'boolean',
            'is_active' => 'boolean'
        ]);

        $validated['slug'] = Str::slug($request->name);
        $validated['is_popular'] = $request->has('is_popular');
        $validated['is_active'] = $request->has('is_active');

        $paket_belajar->update($validated);

        return redirect()->route('admin.paket-belajar.index')->with('success', 'Paket belajar berhasil diperbarui.');
    }

    public function destroy(StudyPackage $paket_belajar)
    {
        $paket_belajar->delete();
        return redirect()->route('admin.paket-belajar.index')->with('success', 'Paket belajar berhasil dihapus.');
    }
}
