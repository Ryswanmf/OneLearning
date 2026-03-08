<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // --- Public Methods (Landing Page) ---

    public function index()
    {
        $blogs = Blog::with('author')->where('status', 'published')->latest()->paginate(9);
        return view('landing.blog.index', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        if ($blog->status !== 'published' && (!Auth::check() || Auth::user()->role !== 'admin')) {
            abort(404);
        }

        $relatedBlogs = Blog::where('category', $blog->category)
            ->where('id', '!=', $blog->id)
            ->where('status', 'published')
            ->limit(3)
            ->get();

        return view('landing.blog.show', compact('blog', 'relatedBlogs'));
    }

    // --- Admin Methods ---

    public function adminIndex()
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
            'content' => 'required',
            'category' => 'required|string',
            'status' => 'required|in:published,draft',
            'image' => 'nullable|string',
        ]);

        $validated['user_id'] = Auth::id();
        $validated['slug'] = Str::slug($request->title);

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
            'content' => 'required',
            'category' => 'required|string',
            'status' => 'required|in:published,draft',
            'image' => 'nullable|string',
        ]);

        $validated['slug'] = Str::slug($request->title);

        $blog->update($validated);

        return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
