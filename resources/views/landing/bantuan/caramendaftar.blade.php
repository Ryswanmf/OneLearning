@extends('layouts.app')

@section('title', 'Cara Mendaftar - OneLearning')

@section('content')
    <!-- Header -->
    <section class="relative pt-20 pb-32 overflow-hidden bg-secondary text-white text-center">
        <div class="absolute inset-0 bg-primary/10 mix-blend-overlay"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 rounded-full border border-white/10 mb-8 backdrop-blur-md">
                <span class="text-[10px] font-black text-primary uppercase tracking-[0.2em]">Tutorial Bergabung</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-black mb-6 leading-tight tracking-tight">Mulai Belajar dalam <br> <span class="text-primary italic">Beberapa Langkah</span></h1>
            <p class="text-lg text-white/60 max-w-2xl mx-auto font-medium">Ikuti panduan mudah di bawah ini untuk mulai mengakses ribuan paket tryout berkualitas.</p>
        </div>
    </section>

    <!-- Tutorial Steps -->
    <section class="py-24 bg-white -mt-16 relative z-20 rounded-t-[4rem]">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-24">
                @forelse($steps as $item)
                <div class="flex flex-col {{ $loop->even ? 'lg:flex-row-reverse' : 'lg:flex-row' }} items-center gap-16 animate-fade-up">
                    <!-- Visual Side -->
                    <div class="flex-1 w-full relative">
                        <div class="absolute -inset-4 bg-primary/5 rounded-[3rem] blur-2xl"></div>
                        <div class="relative bg-gray-50 rounded-[3rem] overflow-hidden border border-gray-100 shadow-xl group aspect-video">
                            @if($item->image)
                                <img src="{{ asset('storage/'.$item->image) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="{{ $item->title }}">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-secondary/5">
                                    <span class="text-secondary/10 font-black text-9xl italic">{{ $item->step_number }}</span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Content Side -->
                    <div class="flex-1 text-center lg:text-left">
                        <div class="w-14 h-14 bg-primary text-white rounded-2xl flex items-center justify-center font-black text-2xl mb-8 shadow-lg shadow-primary/20 mx-auto lg:mx-0">
                            {{ $item->step_number }}
                        </div>
                        <h2 class="text-3xl font-black text-secondary mb-6 leading-tight tracking-tight italic">{{ $item->title }}</h2>
                        <p class="text-secondary/60 text-lg font-medium leading-relaxed">
                            {!! nl2br(e($item->description)) !!}
                        </p>
                    </div>
                </div>
                @empty
                <div class="text-center py-20 bg-gray-50 rounded-[3rem] border border-dashed border-gray-200">
                    <p class="text-secondary/30 font-bold italic">Tutorial pendaftaran belum tersedia.</p>
                </div>
                @endforelse
            </div>

            <!-- Ready CTA -->
            <div class="mt-32 p-16 bg-secondary rounded-[4rem] text-center text-white relative overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/10 rounded-full -mr-32 -mt-32"></div>
                <h3 class="text-3xl md:text-4xl font-black mb-8 italic leading-tight">Sudah Paham Caranya? <br> Ayo <span class="text-primary">Mulai Sekarang!</span></h3>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="{{ route('register') }}" class="px-12 py-5 bg-primary text-white font-black text-sm uppercase tracking-widest rounded-2xl hover:bg-white hover:text-secondary transition-all shadow-xl">Daftar Akun Gratis</a>
                    <a href="https://wa.me/6289515915699" class="px-12 py-5 border-2 border-white/20 text-white font-black text-sm uppercase tracking-widest rounded-2xl hover:bg-white/10 transition-all">Butuh Bantuan?</a>
                </div>
            </div>
        </div>
    </section>
@endsection
