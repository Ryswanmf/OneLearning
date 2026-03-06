<?php

namespace App\Http\Controllers;

use App\Models\SmaTryout;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SmaTryoutController extends Controller
{
    public function index()
    {
        $tryouts = SmaTryout::latest()->paginate(10);
        return view('admin.produk.sma.index', compact('tryouts'));
    }

    public function create()
    {
        return view('admin.produk.sma.create');
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

        SmaTryout::create($validated);

        return redirect()->route('admin.sma.index')->with('success', 'Paket Tryout SMA berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $tryout = SmaTryout::findOrFail($id);
        return view('admin.produk.sma.edit', compact('tryout'));
    }

    public function update(Request $request, $id)
    {
        $tryout = SmaTryout::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string',
            'question_count' => 'required|integer|min:0',
            'duration_minutes' => 'required|integer|min:0',
            'status' => 'required|in:published,draft',
        ]);

        $validated['slug'] = Str::slug($request->name);

        $tryout->update($validated);

        return redirect()->route('admin.sma.index')->with('success', 'Paket Tryout SMA berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $tryout = SmaTryout::findOrFail($id);
        $tryout->delete();
        return redirect()->route('admin.sma.index')->with('success', 'Paket Tryout SMA berhasil dihapus.');
    }
}
