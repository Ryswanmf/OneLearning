@extends('layouts.admin')

@section('title', 'Ubah Produk - OneLearning')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.produk.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Ubah <span class="text-primary italic">Produk</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Perbarui informasi produk <strong>{{ $produk->title }}</strong>.</p>
        </div>
    </div>

    <form action="{{ route('admin.produk.update', $produk->slug) }}" method="POST" class="space-y-6">
        @csrf @method('PUT')
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <!-- Basic Info -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="title" value="Judul Produk" />
                    <x-text-input id="title" name="title" type="text" :value="old('title', $produk->title)" required />
                    <x-input-error :messages="$errors->get('title')" class="mt-1" />
                </div>
                <div class="space-y-2">
                    <x-input-label for="category" value="Kategori" />
                    <select id="category" name="category" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                        <option value="Unggulan" {{ $produk->category == 'Unggulan' ? 'selected' : '' }}>Unggulan</option>
                        <option value="Jenjang" {{ $produk->category == 'Jenjang' ? 'selected' : '' }}>Jenjang</option>
                    </select>
                    <x-input-error :messages="$errors->get('category')" class="mt-1" />
                </div>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="package_count" value="Jumlah Paket" />
                    <x-text-input id="package_count" name="package_count" type="number" :value="old('package_count', $produk->package_count)" required />
                    <x-input-error :messages="$errors->get('package_count')" class="mt-1" />
                </div>
                <div class="space-y-2">
                    <x-input-label for="duration" value="Masa Aktif" />
                    <x-text-input id="duration" name="duration" type="text" :value="old('duration', $produk->duration)" required />
                    <x-input-error :messages="$errors->get('duration')" class="mt-1" />
                </div>
            </div>

            <!-- Image & Feature -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="image" value="URL Gambar" />
                    <x-text-input id="image" name="image" type="text" :value="old('image', $produk->image)" />
                </div>
                <div class="flex items-end pb-3">
                    <label class="relative inline-flex items-center cursor-pointer group">
                        <input type="checkbox" name="is_featured" value="1" class="sr-only peer" {{ $produk->is_featured ? 'checked' : '' }}>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                        <span class="ms-3 text-xs font-black text-secondary uppercase tracking-widest">Tandai Populer</span>
                    </label>
                </div>
            </div>

            <!-- Description -->
            <div class="space-y-2">
                <x-input-label for="description" value="Deskripsi (Opsional)" />
                <textarea id="description" name="description" rows="4" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-4 font-bold text-xs transition-all placeholder:text-secondary/20">{{ old('description', $produk->description) }}</textarea>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.produk.index') }}" class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Batal</a>
            <button type="submit" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all active:scale-95"> Simpan Perubahan </button>
        </div>
    </form>
</div>
@endsection
