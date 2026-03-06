@extends('layouts.admin')

@section('title', 'Ubah FAQ - OneLearning')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.faq.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Ubah <span class="text-primary italic">Pertanyaan</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Perbarui detail FAQ bantuan.</p>
        </div>
    </div>

    <form action="{{ route('admin.faq.update', $faq->id) }}" method="POST" class="space-y-6">
        @csrf @method('PUT')
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="category" value="Kategori Bantuan" />
                    <select id="category" name="category" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                        <option value="Akun & Profil" {{ $faq->category == 'Akun & Profil' ? 'selected' : '' }}>Akun & Profil</option>
                        <option value="Pembayaran & Paket" {{ $faq->category == 'Pembayaran & Paket' ? 'selected' : '' }}>Pembayaran & Paket</option>
                        <option value="Teknis Tryout" {{ $faq->category == 'Teknis Tryout' ? 'selected' : '' }}>Teknis Tryout</option>
                        <option value="Sertifikat & Nilai" {{ $faq->category == 'Sertifikat & Nilai' ? 'selected' : '' }}>Sertifikat & Nilai</option>
                        <option value="Lainnya" {{ $faq->category == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <x-input-label for="order" value="Urutan Tampil" />
                    <x-text-input id="order" name="order" type="number" :value="old('order', $faq->order)" required />
                </div>
            </div>

            <div class="space-y-2">
                <x-input-label for="question" value="Pertanyaan" />
                <x-text-input id="question" name="question" type="text" :value="old('question', $faq->question)" required />
            </div>

            <div class="space-y-2">
                <x-input-label for="answer" value="Jawaban Lengkap" />
                <textarea id="answer" name="answer" rows="6" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-6 font-medium text-sm transition-all">{{ old('answer', $faq->answer) }}</textarea>
            </div>

            <div class="flex items-center pt-4">
                <label class="relative inline-flex items-center cursor-pointer group">
                    <input type="checkbox" name="is_active" value="1" class="sr-only peer" {{ $faq->is_active ? 'checked' : '' }}>
                    <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                    <span class="ms-3 text-xs font-black text-secondary uppercase tracking-widest">Tampilkan di Web</span>
                </label>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.faq.index') }}" class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Batal</a>
            <button type="submit" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all"> Simpan Perubahan </button>
        </div>
    </form>
</div>
@endsection
