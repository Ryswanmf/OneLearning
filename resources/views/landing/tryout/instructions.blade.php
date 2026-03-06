@extends('layouts.app')

@section('title', 'Instruksi Tryout - ' . $paket_belajar->title)

@section('content')
<div class="min-h-screen bg-gray-50 py-20">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-[3.5rem] border border-gray-100 shadow-2xl overflow-hidden animate-fade-up">
            <!-- Header -->
            <div class="bg-secondary p-12 text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-primary/10 mix-blend-overlay"></div>
                <div class="relative z-10">
                    <span class="px-4 py-1.5 bg-primary text-white text-[10px] font-black uppercase tracking-[0.2em] rounded-full mb-6 inline-block">Persiapan Ujian</span>
                    <h1 class="text-3xl md:text-4xl font-black text-white italic mb-2">{{ $paket_belajar->title }}</h1>
                    <p class="text-white/60 font-medium italic">{{ $paket_belajar->category }}</p>
                </div>
            </div>

            <!-- Instructions -->
            <div class="p-12 space-y-10">
                <div class="grid grid-cols-3 gap-6 text-center">
                    <div class="p-6 bg-gray-50 rounded-3xl border border-gray-100">
                        <div class="text-2xl font-black text-secondary">{{ $questionsCount }}</div>
                        <div class="text-[9px] font-bold text-secondary/30 uppercase tracking-widest mt-1">Soal</div>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-3xl border border-gray-100">
                        <div class="text-2xl font-black text-secondary">{{ $paket_belajar->duration }}</div>
                        <div class="text-[9px] font-bold text-secondary/30 uppercase tracking-widest mt-1">Waktu</div>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-3xl border border-gray-100">
                        <div class="text-2xl font-black text-primary italic">IRT</div>
                        <div class="text-[9px] font-bold text-secondary/30 uppercase tracking-widest mt-1">Penilaian</div>
                    </div>
                </div>

                <div class="space-y-6">
                    <h3 class="text-lg font-black text-secondary flex items-center gap-3">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        Aturan Pengerjaan:
                    </h3>
                    <ul class="space-y-4">
                        @foreach([
                            'Gunakan koneksi internet yang stabil selama ujian berlangsung.',
                            'Waktu akan terus berjalan meskipun Anda menutup browser.',
                            'Jawaban akan tersimpan secara otomatis setiap kali Anda memilih opsi.',
                            'Pastikan mengklik tombol "Selesai Ujian" sebelum waktu habis.',
                            'Dilarang melakukan kecurangan dalam bentuk apapun.'
                        ] as $index => $rule)
                        <li class="flex items-start gap-4 text-secondary/60 font-medium">
                            <span class="w-6 h-6 bg-primary/10 rounded-lg flex items-center justify-center text-primary font-black text-[10px] shrink-0 mt-0.5">{{ $index + 1 }}</span>
                            {{ $rule }}
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="pt-8 flex flex-col sm:flex-row items-center gap-4">
                    <a href="{{ route('dashboard') }}" class="w-full sm:w-1/3 py-5 text-center text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Kembali</a>
                    <a href="{{ route('tryout.start', $paket_belajar->slug) }}" class="w-full sm:w-2/3 py-5 bg-primary text-white text-center font-black text-sm uppercase tracking-[0.2em] rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all transform hover:scale-[1.02] active:scale-95 flex items-center justify-center gap-3">
                        Mulai Ujian Sekarang
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
