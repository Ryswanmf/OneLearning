<?php

namespace App\Http\Controllers;

use App\Models\SnbpMajor;
use Illuminate\Http\Request;

class SnbpMajorController extends Controller
{
    public function index()
    {
        $majors = SnbpMajor::latest()->paginate(15);
        return view('admin.produk.analisisSNBP.index', compact('majors'));
    }

    public function create()
    {
        return view('admin.produk.analisisSNBP.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'university_name' => 'required|string|max:255',
            'major_name' => 'required|string|max:255',
            'category' => 'required|in:SAINTEK,SOSHUM',
            'capacity' => 'required|integer|min:0',
            'applicants' => 'required|integer|min:0',
            'passing_grade' => 'nullable|numeric|min:0|max:100',
            'is_active' => 'boolean'
        ]);

        $validated['is_active'] = $request->has('is_active');

        SnbpMajor::create($validated);

        return redirect()->route('admin.snbp.index')->with('success', 'Data prodi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $major = SnbpMajor::findOrFail($id);
        return view('admin.produk.analisisSNBP.edit', compact('major'));
    }

    public function update(Request $request, $id)
    {
        $major = SnbpMajor::findOrFail($id);
        
        $validated = $request->validate([
            'university_name' => 'required|string|max:255',
            'major_name' => 'required|string|max:255',
            'category' => 'required|in:SAINTEK,SOSHUM',
            'capacity' => 'required|integer|min:0',
            'applicants' => 'required|integer|min:0',
            'passing_grade' => 'nullable|numeric|min:0|max:100',
            'is_active' => 'boolean'
        ]);

        $validated['is_active'] = $request->has('is_active');

        $major->update($validated);

        return redirect()->route('admin.snbp.index')->with('success', 'Data prodi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $major = SnbpMajor::findOrFail($id);
        $major->delete();
        return redirect()->route('admin.snbp.index')->with('success', 'Data prodi berhasil dihapus.');
    }
}
