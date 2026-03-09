@extends('layouts.admin')

@section('title', 'Edit Artikel - ' . $blog->title)

@section('content')
<div class="max-w-5xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.blog.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Edit <span class="text-primary italic">Artikel</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Perbarui informasi agar tetap relevan bagi siswa.</p>
        </div>
    </div>

    <form action="{{ route('admin.blog.update', $blog->slug) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Sisi Kiri: Judul & Konten -->
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

                <!-- Sisi Kanan: Meta Data -->
                <div class="space-y-6">
                    <div class="p-6 bg-gray-50/50 rounded-[2rem] border border-gray-100 space-y-6">
                        <div class="space-y-2">
                            <x-input-label for="category" value="Kategori" />
                            <select id="category" name="category" class="block w-full bg-white border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                                @foreach(['Edukasi', 'Tips & Trik', 'Info Kampus', 'Berita'] as $cat)
                                <option value="{{ $cat }}" {{ $blog->category == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="space-y-2">
                            <x-input-label for="status" value="Status Publikasi" />
                            <select id="status" name="status" class="block w-full bg-white border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                                <option value="draft" {{ $blog->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="published" {{ $blog->status == 'published' ? 'selected' : '' }}>Published</option>
                            </select>
                        </div>

                        <hr class="border-gray-200">

                        <!-- Image Section -->
                        <div class="space-y-4" x-data="{ imageType: '{{ Str::contains($blog->image, asset('storage/')) ? 'upload' : 'url' }}' }">
                            <x-input-label value="Gambar Sampul" />
                            
                            @if($blog->image)
                            <div class="relative aspect-video rounded-xl overflow-hidden border border-gray-200 mb-4">
                                <img src="{{ $blog->image }}" class="w-full h-full object-cover" alt="Current Image">
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                    <span class="text-[8px] text-white font-black uppercase tracking-widest">Gambar Saat Ini</span>
                                </div>
                            </div>
                            @endif

                            <div class="flex gap-4 p-1 bg-white border border-gray-100 rounded-xl">
                                <button type="button" @click="imageType = 'url'" :class="imageType === 'url' ? 'bg-secondary text-white' : 'text-secondary/40'" class="flex-1 py-2 text-[10px] font-black uppercase tracking-widest rounded-lg transition-all">Link URL</button>
                                <button type="button" @click="imageType = 'upload'" :class="imageType === 'upload' ? 'bg-secondary text-white' : 'text-secondary/40'" class="flex-1 py-2 text-[10px] font-black uppercase tracking-widest rounded-lg transition-all">Upload File</button>
                            </div>

                            <div x-show="imageType === 'url'" class="animate-fade-up">
                                <x-text-input id="image_url" name="image_url" type="text" :value="old('image_url', Str::contains($blog->image, asset('storage/')) ? '' : $blog->image)" placeholder="https://..." class="text-xs" />
                            </div>

                            <div x-show="imageType === 'upload'" class="animate-fade-up" x-cloak>
                                <input type="file" name="image_file" class="block w-full text-xs text-secondary/40 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-[10px] file:font-black file:uppercase file:bg-primary file:text-white hover:file:bg-secondary transition-all cursor-pointer">
                            </div>
                        </div>
                    </div>

                    <div class="p-6 bg-secondary rounded-[2rem] text-white">
                        <h4 class="text-sm font-black uppercase tracking-widest mb-3">Informasi</h4>
                        <p class="text-[10px] text-white/60 font-medium leading-relaxed">
                            Pembaruan artikel akan langsung terlihat oleh pembaca jika status diatur ke 'Published'.
                        </p>
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
