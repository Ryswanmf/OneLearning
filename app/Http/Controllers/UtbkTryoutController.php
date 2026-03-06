<?php

namespace App\Http\Controllers;

use App\Models\UtbkTryout;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UtbkTryoutController extends Controller
{
    public function index()
    {
        $tryouts = UtbkTryout::latest()->paginate(10);
        return view('admin.produk.tryoutUTBK.index', compact('tryouts'));
    }

    public function create()
    {
        return view('admin.produk.tryoutUTBK.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'question_count' => 'required|integer|min:0',
            'duration_minutes' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:published,draft',
        ]);

        $validated['slug'] = Str::slug($request->name);

        UtbkTryout::create($validated);

        return redirect()->route('admin.utbk.index')->with('success', 'Paket Tryout berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $tryout = UtbkTryout::findOrFail($id);
        return view('admin.produk.tryoutUTBK.edit', compact('tryout'));
    }

    public function update(Request $request, $id)
    {
        $tryout = UtbkTryout::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'question_count' => 'required|integer|min:0',
            'duration_minutes' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:published,draft',
        ]);

        $validated['slug'] = Str::slug($request->name);

        $tryout->update($validated);

        return redirect()->route('admin.utbk.index')->with('success', 'Paket Tryout berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $tryout = UtbkTryout::findOrFail($id);
        $tryout->delete();
        return redirect()->route('admin.utbk.index')->with('success', 'Paket Tryout berhasil dihapus.');
    }
}
