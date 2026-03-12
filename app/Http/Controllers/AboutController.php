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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'order' => 'required|integer',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage/about'), $imageName);
            $validated['image'] = 'about/' . $imageName;
        }

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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'order' => 'required|integer',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($tentang_kami->image && file_exists(public_path('storage/' . $tentang_kami->image))) {
                @unlink(public_path('storage/' . $tentang_kami->image));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage/about'), $imageName);
            $validated['image'] = 'about/' . $imageName;
        }

        $validated['is_active'] = $request->has('is_active');

        $tentang_kami->update($validated);

        return redirect()->route('admin.tentang-kami.index')->with('success', 'Konten profil berhasil diperbarui.');
    }

    public function destroy(About $tentang_kami)
    {
        // Hapus gambar saat data dihapus
        if ($tentang_kami->image && file_exists(public_path('storage/' . $tentang_kami->image))) {
            @unlink(public_path('storage/' . $tentang_kami->image));
        }

        $tentang_kami->delete();
        return redirect()->route('admin.tentang-kami.index')->with('success', 'Konten profil berhasil dihapus.');
    }
}
