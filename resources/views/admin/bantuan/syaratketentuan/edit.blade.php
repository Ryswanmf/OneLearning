@extends('layouts.admin')

@section('title', 'Ubah Syarat & Ketentuan - OneLearning')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.terms.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Ubah <span class="text-primary italic">Aturan</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Perbarui detail untuk bagian <strong>{{ $term->title }}</strong>.</p>
        </div>
    </div>

    <form action="{{ route('admin.terms.update', $term->id) }}" method="POST" class="space-y-6">
        @csrf @method('PUT')
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-3 space-y-2">
                    <x-input-label for="title" value="Judul Pasal / Poin" />
                    <x-text-input id="title" name="title" type="text" :value="old('title', $term->title)" required />
                </div>
                <div class="space-y-2">
                    <x-input-label for="order" value="Urutan" />
                    <x-text-input id="order" name="order" type="number" :value="old('order', $term->order)" required />
                </div>
            </div>

            <div class="space-y-2">
                <x-input-label for="content" value="Isi Ketentuan" />
                <textarea id="content" name="content" rows="10" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-6 font-medium text-sm transition-all">{{ old('content', $term->content) }}</textarea>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.terms.index') }}" class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Batal</a>
            <button type="submit" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all"> Simpan Perubahan </button>
        </div>
    </form>
</div>
@endsection
