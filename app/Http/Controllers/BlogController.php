<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('author')->latest()->paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|string',
            'status' => 'required|in:published,draft',
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['user_id'] = Auth::id();
        $validated['excerpt'] = Str::limit(strip_tags($request->content), 150);

        Blog::create($validated);

        return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil diterbitkan.');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|string',
            'status' => 'required|in:published,draft',
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['excerpt'] = Str::limit(strip_tags($request->content), 150);

        $blog->update($validated);

        return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
