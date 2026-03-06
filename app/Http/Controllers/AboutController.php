<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $contents = About::orderBy('order')->paginate(10);
        return view('admin.bisnis.tentangkami.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.bisnis.tentangkami.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|string',
            'order' => 'required|integer',
            'is_active' => 'boolean'
        ]);

        $validated['is_active'] = $request->has('is_active');

        About::create($validated);

        return redirect()->route('admin.tentang-kami.index')->with('success', 'Konten profil berhasil ditambahkan.');
    }

    public function edit(About $tentang_kami)
    {
        return view('admin.bisnis.tentangkami.edit', ['content' => $tentang_kami]);
    }

    public function update(Request $request, About $tentang_kami)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|string',
            'order' => 'required|integer',
            'is_active' => 'boolean'
        ]);

        $validated['is_active'] = $request->has('is_active');

        $tentang_kami->update($validated);

        return redirect()->route('admin.tentang-kami.index')->with('success', 'Konten profil berhasil diperbarui.');
    }

    public function destroy(About $tentang_kami)
    {
        $tentang_kami->delete();
        return redirect()->route('admin.tentang-kami.index')->with('success', 'Konten profil berhasil dihapus.');
    }
}
