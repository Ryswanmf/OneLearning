@extends('layouts.app')

@section('title', $title . ' - OneLearning')

@section('content')
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-black text-secondary mb-6">Program <span class="text-primary italic">{{ $level }}</span></h1>
            <p class="text-lg text-secondary/60 max-w-2xl mx-auto font-medium mb-12">
                Persiapan tryout komprehensif yang dirancang khusus untuk kurikulum {{ $level }}. 
                Tingkatkan nilai akademik dan siapkan diri untuk jenjang berikutnya.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @for($i=1; $i<=3; $i++)
                <div class="bg-gray-50 p-8 rounded-[2.5rem] border border-gray-100 hover:bg-white hover:shadow-2xl transition-all duration-500 group text-left">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6 text-primary group-hover:bg-primary group-hover:text-white transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                    </div>
                    <h3 class="text-xl font-black text-secondary mb-4 italic">Tryout Ulangan Harian #{{ $i }}</h3>
                    <p class="text-secondary/60 text-sm mb-6 leading-relaxed">Paket latihan soal tematik lengkap dengan pembahasan detail untuk membantu pemahaman materi harian.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-xs font-black text-primary uppercase tracking-widest group-hover:gap-3 transition-all">
                        Lihat Paket 
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 7l5 5m0 0l-5 5m5-5H6" stroke-width="2"/></svg>
                    </a>
                </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
