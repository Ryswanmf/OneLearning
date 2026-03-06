<?php

namespace App\Http\Controllers;

use App\Models\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    public function index()
    {
        $terms = Term::orderBy('order')->get();
        return view('admin.bantuan.syaratketentuan.index', compact('terms'));
    }

    public function create()
    {
        return view('admin.bantuan.syaratketentuan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'order' => 'required|integer',
        ]);

        Term::create($validated);

        return redirect()->route('admin.terms.index')->with('success', 'Syarat & ketentuan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $term = Term::findOrFail($id);
        return view('admin.bantuan.syaratketentuan.edit', compact('term'));
    }

    public function update(Request $request, $id)
    {
        $term = Term::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'order' => 'required|integer',
        ]);

        $term->update($validated);

        return redirect()->route('admin.terms.index')->with('success', 'Syarat & ketentuan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $term = Term::findOrFail($id);
        $term->delete();
        return redirect()->route('admin.terms.index')->with('success', 'Syarat & ketentuan berhasil dihapus.');
    }
}
