<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.produk.index', compact('products'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'package_count' => 'required|integer|min:0',
            'duration' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|string', // Untuk sementara kita gunakan string URL
            'is_featured' => 'boolean'
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['is_featured'] = $request->has('is_featured');

        Product::create($validated);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Product $produk)
    {
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, Product $produk)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'package_count' => 'required|integer|min:0',
            'duration' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'is_featured' => 'boolean'
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['is_featured'] = $request->has('is_featured');

        $produk->update($validated);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Product $produk)
    {
        $produk->delete();
        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}
