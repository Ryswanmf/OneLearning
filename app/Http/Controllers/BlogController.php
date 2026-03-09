<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required|string',
            'status' => 'required|in:published,draft',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image_url' => 'nullable|url',
        ]);

        $imagePath = $request->image_url;

        // Jika ada file yang diupload, utamakan file upload
        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('blogs', 'public');
            $imagePath = asset('storage/' . $path);
        }

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'category' => $request->category,
            'status' => $request->status,
            'image' => $imagePath,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil diterbitkan.');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required|string',
            'status' => 'required|in:published,draft',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image_url' => 'nullable|url',
        ]);

        $imagePath = $request->image_url ?: $blog->image;

        if ($request->hasFile('image_file')) {
            // Hapus file lama jika ada (jika berupa path lokal)
            if (Str::contains($blog->image, asset('storage/'))) {
                $oldPath = str_replace(asset('storage/'), '', $blog->image);
                Storage::disk('public')->delete($oldPath);
            }
            
            $path = $request->file('image_file')->store('blogs', 'public');
            $imagePath = asset('storage/' . $path);
        }

        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'category' => $request->category,
            'status' => $request->status,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Blog $blog)
    {
        // Hapus file fisik jika ada
        if (Str::contains($blog->image, asset('storage/'))) {
            $oldPath = str_replace(asset('storage/'), '', $blog->image);
            Storage::disk('public')->delete($oldPath);
        }

        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
