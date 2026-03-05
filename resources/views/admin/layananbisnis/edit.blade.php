@extends('layouts.admin')

@section('title', 'Ubah Layanan Bisnis - OneLearning')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.bisnis.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Ubah <span class="text-primary italic">Konten Bisnis</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Perbarui data untuk <strong>{{ $business->title }}</strong>.</p>
        </div>
    </div>

    <form action="{{ route('admin.bisnis.update', $business->slug) }}" method="POST" class="space-y-6">
        @csrf @method('PUT')
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="title" value="Judul Konten" />
                    <x-text-input id="title" name="title" type="text" :value="old('title', $business->title)" required />
                </div>
                <div class="space-y-2">
                    <x-input-label for="category" value="Kategori" />
                    <select id="category" name="category" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                        <option value="Layanan Bisnis" {{ $business->category == 'Layanan Bisnis' ? 'selected' : '' }}>Layanan Bisnis</option>
                        <option value="Future Educators" {{ $business->category == 'Future Educators' ? 'selected' : '' }}>Future Educators</option>
                        <option value="Tentang Kami" {{ $business->category == 'Tentang Kami' ? 'selected' : '' }}>Tentang Kami</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="image" value="URL Gambar/Ikon" />
                    <x-text-input id="image" name="image" type="text" :value="old('image', $business->image)" />
                </div>
                <div class="flex items-center pt-8">
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="is_active" value="1" class="sr-only peer" {{ $business->is_active ? 'checked' : '' }}>
                        <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                        <span class="ms-3 text-xs font-black text-secondary uppercase tracking-widest">Aktifkan</span>
                    </label>
                </div>
            </div>

            <div class="space-y-2">
                <x-input-label for="description" value="Deskripsi Lengkap" />
                <textarea id="description" name="description" rows="5" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-4 font-bold text-xs transition-all">{{ old('description', $business->description) }}</textarea>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.bisnis.index') }}" class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Batal</a>
            <button type="submit" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all"> Simpan Perubahan </button>
        </div>
    </form>
</div>
@endsection
