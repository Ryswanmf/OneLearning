<?php

namespace App\Http\Controllers;

use App\Models\SmaUtbkTryout;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SmaUtbkTryoutController extends Controller
{
    public function index()
    {
        $tryouts = SmaUtbkTryout::latest()->paginate(10);
        return view('admin.produk.smaUTBK.index', compact('tryouts'));
    }

    public function create()
    {
        return view('admin.produk.smaUTBK.create');
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

        SmaUtbkTryout::create($validated);

        return redirect()->route('admin.sma-utbk.index')->with('success', 'Paket Tryout SMA 12 & UTBK berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $tryout = SmaUtbkTryout::findOrFail($id);
        return view('admin.produk.smaUTBK.edit', compact('tryout'));
    }

    public function update(Request $request, $id)
    {
        $tryout = SmaUtbkTryout::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string',
            'question_count' => 'required|integer|min:0',
            'duration_minutes' => 'required|integer|min:0',
            'status' => 'required|in:published,draft',
        ]);

        $validated['slug'] = Str::slug($request->name);

        $tryout->update($validated);

        return redirect()->route('admin.sma-utbk.index')->with('success', 'Paket Tryout SMA 12 & UTBK berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $tryout = SmaUtbkTryout::findOrFail($id);
        $tryout->delete();
        return redirect()->route('admin.sma-utbk.index')->with('success', 'Paket Tryout SMA 12 & UTBK berhasil dihapus.');
    }
}
