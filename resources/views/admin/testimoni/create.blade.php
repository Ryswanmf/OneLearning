@extends('layouts.admin')

@section('title', 'Tambah Testimoni - OneLearning')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.testimoni.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Tambah <span class="text-primary italic">Testimoni</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Lengkapi data alumni dan kisah sukses mereka di bawah ini.</p>
        </div>
    </div>

    <form action="{{ route('admin.testimoni.store') }}" method="POST" class="space-y-6">
        @csrf
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="name" value="Nama Alumni" />
                    <x-text-input id="name" name="name" type="text" :value="old('name')" required placeholder="Contoh: Sarah Azahra" />
                </div>
                <div class="space-y-2">
                    <x-input-label for="target" value="Prestasi / Target Lolos" />
                    <x-text-input id="target" name="target" type="text" :value="old('target')" required placeholder="Contoh: Lolos FK UI 2024" />
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="rating" value="Rating (1-5)" />
                    <select id="rating" name="rating" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                        @for($i=5; $i>=1; $i--)
                            <option value="{{ $i }}">{{ $i }} Bintang</option>
                        @endfor
                    </select>
                </div>
                <div class="flex items-center pt-8">
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="is_featured" value="1" class="sr-only peer" checked>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                        <span class="ms-3 text-xs font-black text-secondary uppercase tracking-widest">Tampilkan di Beranda</span>
                    </label>
                </div>
            </div>

            <div class="space-y-2">
                <x-input-label for="photo" value="URL Foto Alumni" />
                <x-text-input id="photo" name="photo" type="text" :value="old('photo')" placeholder="https://ui-avatars.com/..." />
            </div>

            <div class="space-y-2">
                <x-input-label for="content" value="Isi Testimoni" />
                <textarea id="content" name="content" rows="5" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-4 font-bold text-xs transition-all" placeholder="Tuliskan pengalaman belajar alumni di sini...">{{ old('content') }}</textarea>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.testimoni.index') }}" class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Batal</a>
            <button type="submit" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all"> Simpan Testimoni </button>
        </div>
    </form>
</div>
@endsection
