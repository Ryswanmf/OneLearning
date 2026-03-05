@extends('layouts.admin')

@section('title', 'Ubah Artikel - OneLearning')

@section('content')
<div class="max-w-5xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.blog.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Ubah <span class="text-primary italic">Artikel</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Perbarui konten artikel Anda agar tetap relevan.</p>
        </div>
    </div>

    <form action="{{ route('admin.blog.update', $blog->slug) }}" method="POST" class="space-y-6">
        @csrf @method('PUT')
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Sisi Kiri -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="space-y-2">
                        <x-input-label for="title" value="Judul Artikel" />
                        <x-text-input id="title" name="title" type="text" :value="old('title', $blog->title)" required />
                    </div>

                    <div class="space-y-2">
                        <x-input-label for="content" value="Isi Konten" />
                        <textarea id="content" name="content" rows="15" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-6 font-medium text-sm transition-all">{{ old('content', $blog->content) }}</textarea>
                    </div>
                </div>

                <!-- Sisi Kanan -->
                <div class="space-y-6">
                    <div class="p-6 bg-gray-50/50 rounded-[2rem] border border-gray-100 space-y-6">
                        <div class="space-y-2">
                            <x-input-label for="category" value="Kategori" />
                            <select id="category" name="category" class="block w-full bg-white border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                                <option value="Edukasi" {{ $blog->category == 'Edukasi' ? 'selected' : '' }}>Edukasi</option>
                                <option value="Tips & Trik" {{ $blog->category == 'Tips & Trik' ? 'selected' : '' }}>Tips & Trik</option>
                                <option value="Info Kampus" {{ $blog->category == 'Info Kampus' ? 'selected' : '' }}>Info Kampus</option>
                                <option value="Berita" {{ $blog->category == 'Berita' ? 'selected' : '' }}>Berita</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <x-input-label for="status" value="Status Publikasi" />
                            <select id="status" name="status" class="block w-full bg-white border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                                <option value="draft" {{ $blog->status == 'draft' ? 'selected' : '' }}>Draft (Simpan Saja)</option>
                                <option value="published" {{ $blog->status == 'published' ? 'selected' : '' }}>Published (Tampilkan)</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <x-input-label for="image" value="URL Gambar Sampul" />
                            <x-text-input id="image" name="image" type="text" :value="old('image', $blog->image)" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.blog.index') }}" class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Batal</a>
            <button type="submit" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all"> Simpan Perubahan </button>
        </div>
    </form>
</div>
@endsection
