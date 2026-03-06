@extends('layouts.app')

@section('title', 'Hasil Tryout - ' . $paket_belajar->title)

@section('content')
<div class="min-h-screen bg-[#F8FAFC] pb-24">
    <!-- Score Header -->
    <div class="relative bg-secondary pt-20 pb-40 overflow-hidden">
        <div class="absolute inset-0 bg-primary/10 mix-blend-overlay"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="animate-fade-up">
                <span class="px-4 py-1.5 bg-primary text-white text-[10px] font-black uppercase tracking-[0.2em] rounded-full mb-6 inline-block">Hasil Ujian Anda</span>
                <h1 class="text-4xl md:text-5xl font-black text-white italic mb-8 leading-tight">{{ $paket_belajar->title }}</h1>
                
                <!-- Main Score Circle -->
                <div class="relative inline-block group">
                    <div class="absolute -inset-4 bg-primary/20 rounded-full blur-2xl group-hover:bg-primary/40 transition duration-700"></div>
                    <div class="relative w-48 h-48 md:w-56 md:h-56 rounded-full bg-white flex flex-col items-center justify-center shadow-2xl border-8 border-primary/10">
                        <div class="text-[10px] font-black text-secondary/30 uppercase tracking-widest mb-1">Skor Akhir</div>
                        <div class="text-6xl md:text-7xl font-black text-secondary tracking-tighter">{{ $submission->score }}</div>
                        <div class="text-[10px] font-black text-primary uppercase tracking-[0.2em] mt-1">Skor Maksimal 1000</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics & Review -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-24 relative z-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- Statistics Sidebar (4 Col) -->
            <div class="lg:col-span-4 space-y-8 animate-fade-up" style="animation-delay: 200ms">
                <div class="bg-white p-8 rounded-[3rem] border border-gray-100 shadow-xl">
                    <h3 class="text-sm font-black text-secondary uppercase tracking-[0.2em] mb-8 italic">Detail Statistik</h3>
                    <div class="space-y-6">
                        <div class="flex items-center justify-between p-4 bg-green-50 rounded-2xl border border-green-100">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-green-500 rounded-lg flex items-center justify-center text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                <span class="text-sm font-bold text-green-700">Jawaban Benar</span>
                            </div>
                            <span class="text-xl font-black text-green-700">{{ $stats['correct'] }}</span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-red-50 rounded-2xl border border-red-100">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-red-500 rounded-lg flex items-center justify-center text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" /></svg>
                                </div>
                                <span class="text-sm font-bold text-red-700">Jawaban Salah</span>
                            </div>
                            <span class="text-xl font-black text-red-700">{{ $stats['wrong'] }}</span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-2xl border border-gray-100">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-gray-400 rounded-lg flex items-center justify-center text-white">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 12H4" /></svg>
                                </div>
                                <span class="text-sm font-bold text-gray-600">Tidak Dijawab</span>
                            </div>
                            <span class="text-xl font-black text-gray-600">{{ $stats['empty'] }}</span>
                        </div>
                    </div>

                    <div class="mt-10 pt-8 border-t border-gray-50">
                        <div class="text-[10px] font-black text-secondary/30 uppercase tracking-widest mb-4">Informasi Waktu</div>
                        <div class="space-y-3">
                            <div class="flex justify-between text-xs font-bold">
                                <span class="text-secondary/40">Mulai:</span>
                                <span class="text-secondary">{{ $submission->started_at->format('H:i:s') }} WIB</span>
                            </div>
                            <div class="flex justify-between text-xs font-bold">
                                <span class="text-secondary/40">Selesai:</span>
                                <span class="text-secondary">{{ $submission->finished_at->format('H:i:s') }} WIB</span>
                            </div>
                            <div class="flex justify-between text-xs font-bold">
                                <span class="text-secondary/40">Durasi:</span>
                                <span class="text-primary italic">{{ $submission->started_at->diffInMinutes($submission->finished_at) }} Menit</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-primary p-8 rounded-[3rem] text-white shadow-xl shadow-primary/20 relative overflow-hidden group">
                    <div class="absolute inset-0 bg-secondary/10 mix-blend-overlay"></div>
                    <h4 class="text-lg font-black italic mb-4">Ingin Skor Lebih Tinggi?</h4>
                    <p class="text-white/70 text-sm font-medium leading-relaxed mb-8">Pelajari materi yang masih lemah melalui rekomendasi paket belajar kami.</p>
                    <a href="{{ route('dashboard') }}" class="w-full py-4 bg-white text-primary text-center font-black text-xs uppercase tracking-widest rounded-2xl hover:bg-secondary hover:text-white transition-all inline-block shadow-lg">Kembali ke Dashboard</a>
                </div>
            </div>

            <!-- Discussion / Review List (8 Col) -->
            <div class="lg:col-span-8 space-y-8 animate-fade-up" style="animation-delay: 300ms" x-data="{ showExpl: null }">
                <div class="flex items-center justify-between px-4">
                    <h2 class="text-2xl font-black text-secondary tracking-tight italic">Review & <span class="text-primary not-italic">Pembahasan</span></h2>
                    <span class="text-[10px] font-black text-secondary/30 uppercase tracking-widest">{{ $stats['total'] }} Pertanyaan</span>
                </div>

                <div class="space-y-6">
                    @foreach($questions as $index => $q)
                    @php
                        $userAns = $userAnswers['q' . $q->id] ?? null;
                        $isCorrect = $userAns === $q->correct_answer;
                    @endphp
                    <div class="bg-white rounded-[2.5rem] border border-gray-100 shadow-sm overflow-hidden group">
                        <div class="p-8 md:p-10">
                            <div class="flex items-center justify-between mb-8">
                                <div class="flex items-center gap-3">
                                    <span class="w-10 h-10 {{ $isCorrect ? 'bg-green-500' : ($userAns ? 'bg-red-500' : 'bg-gray-400') }} text-white rounded-xl flex items-center justify-center font-black italic text-sm">
                                        {{ $index + 1 }}
                                    </span>
                                    @if($isCorrect)
                                        <span class="text-[10px] font-black text-green-500 uppercase tracking-widest">Benar</span>
                                    @elseif($userAns)
                                        <span class="text-[10px] font-black text-red-500 uppercase tracking-widest">Salah</span>
                                    @else
                                        <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Kosong</span>
                                    @endif
                                </div>
                                <button @click="showExpl = (showExpl === {{ $q->id }} ? null : {{ $q->id }})" 
                                        class="px-4 py-2 bg-gray-50 hover:bg-primary/10 text-secondary hover:text-primary rounded-xl text-[10px] font-black uppercase tracking-widest transition-all">
                                    <span x-text="showExpl === {{ $q->id }} ? 'Tutup Pembahasan' : 'Lihat Pembahasan'"></span>
                                </button>
                            </div>

                            <div class="space-y-6">
                                <div class="text-lg font-bold text-secondary leading-relaxed">
                                    {!! nl2br(e($q->question_text)) !!}
                                </div>

                                @if($q->question_image)
                                    <div class="w-full max-w-md rounded-2xl overflow-hidden border border-gray-100">
                                        <img src="{{ asset('storage/' . $q->question_image) }}" class="w-full h-auto">
                                    </div>
                                @endif

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    @foreach(['a', 'b', 'c', 'd', 'e'] as $opt)
                                    <div class="p-4 rounded-2xl border-2 flex items-start gap-3
                                        {{ $q->correct_answer === $opt ? 'bg-green-50 border-green-200 text-green-700' : 
                                           ($userAns === $opt ? 'bg-red-50 border-red-200 text-red-700' : 'bg-white border-gray-50 text-secondary/40') }}">
                                        <span class="uppercase font-black text-xs mt-0.5">{{ $opt }}.</span>
                                        <span class="text-sm font-medium">{{ $q->{'option_'.$opt} }}</span>
                                        @if($q->correct_answer === $opt)
                                            <svg class="w-4 h-4 ml-auto text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Explanation Accordion -->
                            <div x-show="showExpl === {{ $q->id }}" 
                                 x-collapse x-cloak
                                 class="mt-10 pt-8 border-t border-gray-50">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-1.5 h-6 bg-primary rounded-full"></div>
                                    <h5 class="text-[11px] font-black text-primary uppercase tracking-[0.2em]">Pembahasan Lengkap</h5>
                                </div>
                                <div class="bg-gray-50 p-8 rounded-[2rem] text-secondary/70 text-sm font-medium leading-relaxed italic">
                                    {!! nl2br(e($q->explanation ?? 'Belum ada pembahasan tersedia untuk soal ini.')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
