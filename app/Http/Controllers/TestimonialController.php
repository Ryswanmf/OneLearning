<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimoni.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimoni.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'target' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'is_featured' => 'boolean'
        ]);

        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('storage/testimonials'), $imageName);
            $validated['photo'] = 'testimonials/' . $imageName;
        }

        $validated['is_featured'] = $request->has('is_featured');

        Testimonial::create($validated);

        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni berhasil ditambahkan.');
    }

    public function edit(Testimonial $testimoni)
    {
        return view('admin.testimoni.edit', compact('testimoni'));
    }

    public function update(Request $request, Testimonial $testimoni)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'target' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'is_featured' => 'boolean'
        ]);

        if ($request->hasFile('photo')) {
            // Hapus gambar lama jika ada
            if ($testimoni->photo && file_exists(public_path('storage/' . $testimoni->photo))) {
                @unlink(public_path('storage/' . $testimoni->photo));
            }

            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('storage/testimonials'), $imageName);
            $validated['photo'] = 'testimonials/' . $imageName;
        }

        $validated['is_featured'] = $request->has('is_featured');

        $testimoni->update($validated);

        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni berhasil diperbarui.');
    }

    public function destroy(Testimonial $testimoni)
    {
        // Hapus gambar saat data dihapus
        if ($testimoni->photo && file_exists(public_path('storage/' . $testimoni->photo))) {
            @unlink(public_path('storage/' . $testimoni->photo));
        }

        $testimoni->delete();
        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni berhasil dihapus.');
    }
}
