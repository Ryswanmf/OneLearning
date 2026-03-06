<?php

namespace App\Http\Controllers;

use App\Models\SdTryout;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SdTryoutController extends Controller
{
    public function index()
    {
        $tryouts = SdTryout::latest()->paginate(10);
        return view('admin.produk.sd.index', compact('tryouts'));
    }

    public function create()
    {
        return view('admin.produk.sd.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string',
            'question_count' => 'required|integer|min:0',
            'duration_minutes' => 'required|integer|min:0',
            'status' => 'required|in:published,draft',
        ]);

        $validated['slug'] = Str::slug($request->name);

        SdTryout::create($validated);

        return redirect()->route('admin.sd.index')->with('success', 'Paket Tryout SD berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $tryout = SdTryout::findOrFail($id);
        return view('admin.produk.sd.edit', compact('tryout'));
    }

    public function update(Request $request, $id)
    {
        $tryout = SdTryout::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string',
            'question_count' => 'required|integer|min:0',
            'duration_minutes' => 'required|integer|min:0',
            'status' => 'required|in:published,draft',
        ]);

        $validated['slug'] = Str::slug($request->name);

        $tryout->update($validated);

        return redirect()->route('admin.sd.index')->with('success', 'Paket Tryout SD berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $tryout = SdTryout::findOrFail($id);
        $tryout->delete();
        return redirect()->route('admin.sd.index')->with('success', 'Paket Tryout SD berhasil dihapus.');
    }
}
