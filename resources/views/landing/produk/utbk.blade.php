@extends('layouts.app')

@section('title', 'Tryout UTBK-SNBT - Simulasi Terakurat | OneLearning')

@section('content')
    <!-- Hero UTBK -->
    <section class="pt-12 pb-24 bg-white overflow-hidden text-center lg:text-left">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="flex-1">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 rounded-full border border-primary/20 mb-8">
                        <span class="text-[10px] font-black text-primary uppercase tracking-[0.2em]">Update Terkini SNBT 2024</span>
                    </div>
                    <h1 class="text-4xl md:text-6xl font-black text-secondary mb-8 leading-[1.1]">
                        Simulasi <span class="text-primary italic">UTBK-SNBT</span> Paling Mirip Aslinya
                    </h1>
                    <p class="text-lg text-secondary/60 mb-10 leading-relaxed font-medium">
                        Rasakan pengalaman ujian sesungguhnya dengan sistem <span class="text-secondary font-bold underline decoration-primary decoration-2 underline-offset-4">IRT & Ranking Real-time</span>.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#daftar-tryout" class="px-10 py-5 bg-secondary text-white font-black rounded-2xl hover:bg-primary transition-all shadow-xl">Lihat Paket Tryout</a>
                        <a href="{{ route('register') }}" class="px-10 py-5 border-2 border-secondary/10 text-secondary font-black rounded-2xl hover:bg-secondary hover:text-white transition-all">Daftar Akun Gratis</a>
                    </div>
                </div>
                <div class="flex-1 relative">
                    <!-- Mock Exam UI (Static Visual) -->
                    <div class="relative bg-secondary p-6 rounded-[2.5rem] shadow-2xl border-4 border-white/10 rotate-2 hover:rotate-0 transition-transform duration-700">
                        <div class="bg-white rounded-2xl overflow-hidden shadow-inner">
                            <div class="bg-gray-100 px-4 py-3 flex justify-between items-center border-b">
                                <div class="text-[10px] font-black text-secondary uppercase tracking-widest">Subtes: Penalaran Matematika</div>
                                <div class="text-xs font-black text-red-500">29:59</div>
                            </div>
                            <div class="p-8">
                                <div class="w-full h-4 bg-gray-100 rounded-full mb-4"></div>
                                <div class="w-[60%] h-4 bg-gray-100 rounded-full mb-10"></div>
                                <div class="space-y-4">
                                    @foreach(['A', 'B', 'C'] as $opt)
                                    <div class="flex items-center gap-4 p-4 rounded-xl border border-gray-100">
                                        <div class="w-8 h-8 rounded-full bg-gray-50 border border-gray-200 flex items-center justify-center text-xs font-bold">{{ $opt }}</div>
                                        <div class="w-full h-3 bg-gray-50 rounded-full"></div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic Tryout Section -->
    <section id="daftar-tryout" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-black text-secondary tracking-tight">Pilih Paket <span class="text-primary italic">Simulasi</span></h2>
                <p class="text-secondary/50 font-medium mt-4">Setiap paket sudah termasuk analisis nilai IRT dan rangking nasional.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($tryouts as $tryout)
                <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500 group relative overflow-hidden">
                    @if($tryout->price == 0)
                    <div class="absolute top-6 right-6 px-3 py-1 bg-green-500 text-white text-[10px] font-black uppercase tracking-widest rounded-full z-10 animate-pulse">Gratis</div>
                    @endif
                    
                    <div class="relative z-10">
                        <span class="inline-block px-3 py-1 bg-primary/10 text-primary font-black text-[10px] uppercase tracking-widest rounded-lg mb-4">{{ $tryout->category }}</span>
                        <h3 class="text-2xl font-black text-secondary mb-2 group-hover:text-primary transition-colors">{{ $tryout->name }}</h3>
                        
                        <div class="flex gap-6 my-6 pt-6 border-t border-gray-50">
                            <div>
                                <div class="text-xl font-black text-secondary">{{ $tryout->question_count }}</div>
                                <div class="text-[10px] text-secondary/40 font-bold uppercase tracking-widest">Butir Soal</div>
                            </div>
                            <div class="w-px h-10 bg-gray-100"></div>
                            <div>
                                <div class="text-xl font-black text-secondary">{{ $tryout->duration_minutes }}</div>
                                <div class="text-[10px] text-secondary/40 font-bold uppercase tracking-widest">Waktu (Menit)</div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-8">
                            <div>
                                <div class="text-[10px] text-secondary/40 font-bold uppercase tracking-widest leading-none mb-1">Harga Paket</div>
                                <div class="text-xl font-black text-secondary italic">
                                    @if($tryout->price > 0)
                                        Rp {{ number_format($tryout->price, 0, ',', '.') }}
                                    @else
                                        FREE
                                    @endif
                                </div>
                            </div>
                            <a href="{{ route('login') }}" class="px-6 py-3 bg-secondary text-white font-black text-xs uppercase tracking-widest rounded-xl hover:bg-primary transition-all">Kerjakan</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-20 bg-white rounded-[3rem] border border-dashed border-gray-200">
                    <p class="text-secondary/30 font-bold italic">Belum ada paket tryout yang diterbitkan.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
