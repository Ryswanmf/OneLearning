<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BlogController extends Controller
{
    /**
     * Display a listing of the published blogs.
     */
    public function index(): View
    {
        $blogs = Blog::with('author')->where('status', 'published')->latest()->paginate(9);
        return view('landing.blog.index', compact('blogs'));
    }

    /**
     * Display the specified blog.
     */
    public function show(Blog $blog): View
    {
        // Check if user is admin
        $user = Auth::user();
        $isAdmin = $user && isset($user->role) && $user->role === 'admin';
        
        if ($blog->status !== 'published' && !$isAdmin) {
            abort(404);
        }

        $relatedBlogs = Blog::where('category', $blog->category)
            ->where('id', '!=', $blog->id)
            ->where('status', 'published')
            ->limit(3)
            ->get();

        return view('landing.blog.show', compact('blog', 'relatedBlogs'));
    }

    /**
     * Admin: Display a listing of all blogs.
     */
    public function adminIndex(): View
    {
        $blogs = Blog::with('author')->latest()->paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Admin: Show the form for creating a new blog.
     */
    public function create(): View
    {
        return view('admin.blog.create');
    }

    /**
     * Admin: Store a newly created blog.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required|string',
            'status' => 'required|in:published,draft',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image_url' => 'nullable|url',
        ]);

        $imagePath = $request->input('image_url');

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('blogs', 'public');
            $imagePath = asset('storage/' . $path);
        }

        Blog::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'content' => $request->input('content'),
            'category' => $request->input('category'),
            'status' => $request->input('status'),
            'image' => $imagePath,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil diterbitkan.');
    }

    /**
     * Admin: Show the form for editing the specified blog.
     */
    public function edit(Blog $blog): View
    {
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Admin: Update the specified blog.
     */
    public function update(Request $request, Blog $blog): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required|string',
            'status' => 'required|in:published,draft',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image_url' => 'nullable|url',
        ]);

        $imagePath = $request->input('image_url') ?: $blog->image;

        if ($request->hasFile('image_file')) {
            // Delete old file if it exists in local storage
            if ($blog->image && Str::contains((string)$blog->image, asset('storage/'))) {
                $oldPath = str_replace(asset('storage/'), '', (string)$blog->image);
                Storage::disk('public')->delete($oldPath);
            }
            
            $path = $request->file('image_file')->store('blogs', 'public');
            $imagePath = asset('storage/' . $path);
        }

        $blog->update([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'content' => $request->input('content'),
            'category' => $request->input('category'),
            'status' => $request->input('status'),
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    /**
     * Admin: Remove the specified blog.
     */
    public function destroy(Blog $blog): RedirectResponse
    {
        if ($blog->image && Str::contains((string)$blog->image, asset('storage/'))) {
            $oldPath = str_replace(asset('storage/'), '', (string)$blog->image);
            Storage::disk('public')->delete($oldPath);
        }

        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
