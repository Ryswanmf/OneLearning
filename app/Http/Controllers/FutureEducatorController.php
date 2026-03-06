<?php

namespace App\Http\Controllers;

use App\Models\FutureEducator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FutureEducatorController extends Controller
{
    public function index()
    {
        $programs = FutureEducator::latest()->paginate(10);
        return view('admin.bisnis.futureeducators.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.bisnis.futureeducators.create');
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

        FutureEducator::create($validated);

        return redirect()->route('admin.future-educators.index')->with('success', 'Program pendidik berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $program = FutureEducator::findOrFail($id);
        return view('admin.bisnis.futureeducators.edit', compact('program'));
    }

    public function update(Request $request, $id)
    {
        $program = FutureEducator::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|string',
            'is_active' => 'boolean'
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['is_active'] = $request->has('is_active');

        $program->update($validated);

        return redirect()->route('admin.future-educators.index')->with('success', 'Program pendidik berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $program = FutureEducator::findOrFail($id);
        $program->delete();
        return redirect()->route('admin.future-educators.index')->with('success', 'Program pendidik berhasil dihapus.');
    }
}
