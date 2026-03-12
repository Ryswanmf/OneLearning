@extends('layouts.admin')

@section('title', 'Tambah Layanan Bisnis - OneLearning')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.layanan-bisnis.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Tambah <span class="text-primary italic">Layanan Bisnis</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Buat program kemitraan B2B baru untuk institusi atau sekolah.</p>
        </div>
    </div>

    <form action="{{ route('admin.layanan-bisnis.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <div class="space-y-2">
                <x-input-label for="title" value="Nama Layanan" />
                <x-text-input id="title" name="title" type="text" :value="old('title')" required placeholder="Contoh: Kemitraan Sekolah Nasional" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="image" value="Gambar/Ikon Layanan" />
                    <input id="image" name="image" type="file" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl px-4 py-3 font-bold text-xs transition-all" accept="image/*" />
                    <p class="text-[10px] text-secondary/30 font-medium italic mt-1">Format: JPG, PNG, SVG (Maks. 2MB)</p>
                </div>
                <div class="flex items-center pt-8">
                    <label class="relative inline-flex items-center cursor-pointer group">
                        <input type="checkbox" name="is_active" value="1" class="sr-only peer" checked>
                        <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                        <span class="ms-3 text-xs font-black text-secondary uppercase tracking-widest">Status Aktif</span>
                    </label>
                </div>
            </div>

            <div class="space-y-2">
                <x-input-label for="description" value="Deskripsi Lengkap" />
                <textarea id="description" name="description" rows="5" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-4 font-bold text-xs transition-all" placeholder="Jelaskan detail layanan atau keuntungan bagi mitra...">{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.layanan-bisnis.index') }}" class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Batal</a>
            <button type="submit" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all"> Simpan Layanan </button>
        </div>
    </form>
</div>
@endsection
