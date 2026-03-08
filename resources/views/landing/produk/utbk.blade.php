@extends('layouts.app')

@section('title', 'Tryout UTBK-SNBT - Simulasi Terakurat | OneLearning')

@section('content')
    <!-- Dynamic Tryout Section -->
    <section id="daftar-tryout" class="py-24 bg-white">
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
                            @auth
                                @php
                                    $hasAccess = $tryout->price == 0 || auth()->user()->hasAccessTo($tryout);
                                @endphp
                                @if($hasAccess)
                                    <a href="{{ route('tryout.instructions', ['type' => 'utbk', 'id' => $tryout->slug]) }}" class="px-6 py-3 bg-secondary text-white font-black text-xs uppercase tracking-widest rounded-xl hover:bg-primary transition-all">Kerjakan</a>
                                @else
                                    <a href="{{ route('order.checkout', ['type' => 'utbk', 'id' => $tryout->slug]) }}" class="px-6 py-3 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-xl hover:bg-secondary transition-all">Beli Paket</a>
                                @endif
                            @else
                                <a href="{{ route('login') }}" class="px-6 py-3 bg-secondary text-white font-black text-xs uppercase tracking-widest rounded-xl hover:bg-primary transition-all">Mulai Belajar</a>
                            @endauth
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
