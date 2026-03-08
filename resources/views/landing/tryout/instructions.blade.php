@extends('layouts.app')

@section('title', 'Instruksi - ' . $paket_belajar->name)

@section('content')
<div class="min-h-screen bg-[#F8FAFC] py-16 overflow-hidden relative flex items-center justify-center">
    <div class="max-w-2xl mx-auto px-4 relative z-10 w-full">
        <div class="bg-white rounded-[2.5rem] border border-gray-100 shadow-2xl overflow-hidden animate-fade-up">
            
            <!-- Ultra Compact Header -->
            <div class="bg-secondary p-8 text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-primary/5 mix-blend-overlay"></div>
                <div class="relative z-10">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-primary/20 rounded-full border border-primary/20 mb-3 backdrop-blur-sm">
                        <span class="w-1 h-1 bg-primary rounded-full animate-pulse"></span>
                        <span class="text-[7px] font-black text-white uppercase tracking-[0.2em]">Readiness Check</span>
                    </div>
                    <h1 class="text-xl md:text-2xl font-black text-white italic mb-1 tracking-tight leading-tight uppercase">{{ $paket_belajar->name }}</h1>
                    <p class="text-[8px] text-white/30 font-bold uppercase tracking-[0.3em]">{{ $paket_belajar->category }}</p>
                </div>
            </div>

            <!-- Stats Overview (Slim) -->
            <div class="px-8 py-8">
                <div class="grid grid-cols-3 gap-3 text-center mb-8">
                    <div class="p-4 bg-gray-50/50 rounded-2xl border border-gray-100">
                        <div class="text-lg font-black text-secondary leading-none">{{ $questionsCount }}</div>
                        <div class="text-[7px] font-black text-secondary/30 uppercase tracking-widest mt-1">Soal</div>
                    </div>
                    <div class="p-4 bg-gray-50/50 rounded-2xl border border-gray-100">
                        <div class="text-lg font-black text-secondary leading-none">{{ $paket_belajar->duration_minutes ?? $paket_belajar->duration }}</div>
                        <div class="text-[7px] font-black text-secondary/30 uppercase tracking-widest mt-1">Menit</div>
                    </div>
                    <div class="p-4 bg-gray-50/50 rounded-2xl border border-gray-100">
                        <div class="text-lg font-black text-primary italic uppercase leading-none">IRT</div>
                        <div class="text-[7px] font-black text-secondary/30 uppercase tracking-widest mt-1">Sistem</div>
                    </div>
                </div>

                <!-- Rules List (Tight) -->
                <div class="space-y-4 bg-gray-50 p-6 rounded-[2rem] border border-gray-100 mb-8">
                    <h3 class="text-[10px] font-black text-secondary flex items-center gap-2 uppercase tracking-widest italic mb-2">
                        <div class="w-1 h-3 bg-primary rounded-full"></div> Petunjuk Singkat
                    </h3>
                    <div class="grid grid-cols-1 gap-3">
                        @foreach([
                            'Jawaban tersimpan otomatis.',
                            'Waktu sinkron dengan server.',
                            'Fitur ragu-ragu tersedia.',
                            'Skor IRT muncul instan.'
                        ] as $index => $rule)
                        <div class="flex items-start gap-3">
                            <div class="w-5 h-5 bg-white rounded-lg flex items-center justify-center text-secondary/20 font-black text-[8px] shadow-sm border border-gray-100 shrink-0">{{ $index + 1 }}</div>
                            <p class="text-secondary/60 text-[11px] font-medium leading-tight mt-0.5">{{ $rule }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Action Buttons (Slim) -->
                <div class="flex items-center gap-3">
                    <a href="{{ route('dashboard') }}" class="flex-1 py-3 text-center text-[9px] font-black text-secondary/30 uppercase tracking-widest hover:text-secondary transition-all">Batalkan</a>
                    <a href="{{ route('tryout.start', ['type' => $type, 'id' => $id]) }}" class="flex-[2] py-4 bg-primary text-white text-center font-black text-[9px] uppercase tracking-[0.2em] rounded-xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all transform active:scale-95 flex items-center justify-center gap-2">
                        Mulai Sekarang
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
