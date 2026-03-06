<?php

namespace App\Http\Controllers;

use App\Models\AlumniTryout;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AlumniTryoutController extends Controller
{
    public function index()
    {
        $tryouts = AlumniTryout::latest()->paginate(10);
        return view('admin.produk.alumni.index', compact('tryouts'));
    }

    public function create()
    {
        return view('admin.produk.alumni.create');
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

        AlumniTryout::create($validated);

        return redirect()->route('admin.alumni.index')->with('success', 'Paket Tryout Alumni berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $tryout = AlumniTryout::findOrFail($id);
        return view('admin.produk.alumni.edit', compact('tryout'));
    }

    public function update(Request $request, $id)
    {
        $tryout = AlumniTryout::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string',
            'question_count' => 'required|integer|min:0',
            'duration_minutes' => 'required|integer|min:0',
            'status' => 'required|in:published,draft',
        ]);

        $validated['slug'] = Str::slug($request->name);

        $tryout->update($validated);

        return redirect()->route('admin.alumni.index')->with('success', 'Paket Tryout Alumni berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $tryout = AlumniTryout::findOrFail($id);
        $tryout->delete();
        return redirect()->route('admin.alumni.index')->with('success', 'Paket Tryout Alumni berhasil dihapus.');
    }
}
