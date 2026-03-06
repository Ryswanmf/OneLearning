<?php

namespace App\Http\Controllers;

use App\Models\HowToRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HowToRegisterController extends Controller
{
    public function index()
    {
        $steps = HowToRegister::orderBy('step_number')->get();
        return view('admin.bantuan.caramendaftar.index', compact('steps'));
    }

    public function create()
    {
        return view('admin.bantuan.caramendaftar.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'step_number' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('how-to', 'public');
        }

        $validated['is_active'] = $request->has('is_active');

        HowToRegister::create($validated);

        return redirect()->route('admin.how-to-register.index')->with('success', 'Langkah pendaftaran berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $step = HowToRegister::findOrFail($id);
        return view('admin.bantuan.caramendaftar.edit', compact('step'));
    }

    public function update(Request $request, $id)
    {
        $step = HowToRegister::findOrFail($id);
        
        $validated = $request->validate([
            'step_number' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            if ($step->image) {
                Storage::disk('public')->delete($step->image);
            }
            $validated['image'] = $request->file('image')->store('how-to', 'public');
        }

        $validated['is_active'] = $request->has('is_active');

        $step->update($validated);

        return redirect()->route('admin.how-to-register.index')->with('success', 'Langkah pendaftaran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $step = HowToRegister::findOrFail($id);
        if ($step->image) {
            Storage::disk('public')->delete($step->image);
        }
        $step->delete();
        return redirect()->route('admin.how-to-register.index')->with('success', 'Langkah pendaftaran berhasil dihapus.');
    }
}
