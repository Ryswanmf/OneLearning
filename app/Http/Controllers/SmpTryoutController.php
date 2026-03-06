<?php

namespace App\Http\Controllers;

use App\Models\SmpTryout;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SmpTryoutController extends Controller
{
    public function index()
    {
        $tryouts = SmpTryout::latest()->paginate(10);
        return view('admin.produk.smp.index', compact('tryouts'));
    }

    public function create()
    {
        return view('admin.produk.smp.create');
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

        SmpTryout::create($validated);

        return redirect()->route('admin.smp.index')->with('success', 'Paket Tryout SMP berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $tryout = SmpTryout::findOrFail($id);
        return view('admin.produk.smp.edit', compact('tryout'));
    }

    public function update(Request $request, $id)
    {
        $tryout = SmpTryout::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string',
            'question_count' => 'required|integer|min:0',
            'duration_minutes' => 'required|integer|min:0',
            'status' => 'required|in:published,draft',
        ]);

        $validated['slug'] = Str::slug($request->name);

        $tryout->update($validated);

        return redirect()->route('admin.smp.index')->with('success', 'Paket Tryout SMP berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $tryout = SmpTryout::findOrFail($id);
        $tryout->delete();
        return redirect()->route('admin.smp.index')->with('success', 'Paket Tryout SMP berhasil dihapus.');
    }
}
