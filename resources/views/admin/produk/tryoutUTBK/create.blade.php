@extends('layouts.admin')

@section('title', 'Tambah Tryout UTBK - OneLearning')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.utbk.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Tambah <span class="text-primary italic">Tryout UTBK</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Buat simulasi ujian baru dengan parameter waktu dan soal.</p>
        </div>
    </div>

    <form action="{{ route('admin.utbk.store') }}" method="POST" class="space-y-6">
        @csrf
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="name" value="Nama Simulasi" />
                    <x-text-input id="name" name="name" type="text" :value="old('name')" required placeholder="Contoh: Tryout Akbar Nasional #1" />
                </div>
                <div class="space-y-2">
                    <x-input-label for="category" value="Kategori Materi" />
                    <select id="category" name="category" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                        <option value="TPS">TPS (Tes Potensi Skolastik)</option>
                        <option value="Literasi">Literasi (B.Indo & B.Inggris)</option>
                        <option value="Penalaran">Penalaran Matematika</option>
                        <option value="Campuran">Full Simulasi (Campuran)</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="space-y-2">
                    <x-input-label for="question_count" value="Jumlah Soal" />
                    <x-text-input id="question_count" name="question_count" type="number" :value="old('question_count', 0)" required />
                </div>
                <div class="space-y-2">
                    <x-input-label for="duration_minutes" value="Durasi (Menit)" />
                    <x-text-input id="duration_minutes" name="duration_minutes" type="number" :value="old('duration_minutes', 0)" required />
                </div>
                <div class="space-y-2">
                    <x-input-label for="price" value="Harga (Rp)" />
                    <x-text-input id="price" name="price" type="number" :value="old('price', 0)" required placeholder="0 untuk gratis" />
                </div>
            </div>

            <div class="space-y-2">
                <x-input-label for="status" value="Status" />
                <select id="status" name="status" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                    <option value="draft">Draft (Belum Rilis)</option>
                    <option value="published">Published (Siap Dikerjakan)</option>
                </select>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.utbk.index') }}" class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Batal</a>
            <button type="submit" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all"> Simpan Tryout </button>
        </div>
    </form>
</div>
@endsection
