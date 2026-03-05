@extends('layouts.app')

@section('title', 'Tentang Kami - OneLearning')

@section('content')
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h1 class="text-4xl md:text-6xl font-black text-secondary mb-6">Tentang <span class="text-primary italic">OneLearning</span></h1>
                <p class="text-lg text-secondary/50 max-w-2xl mx-auto">Mengenal lebih dekat visi dan misi kami dalam merevolusi pendidikan di Indonesia.</p>
            </div>

            <div class="space-y-24">
                @forelse($profiles as $profile)
                <div class="flex flex-col {{ $loop->iteration % 2 == 0 ? 'md:flex-row-reverse' : 'md:flex-row' }} gap-16 items-center">
                    <div class="w-full md:w-1/2">
                        <div class="relative">
                            <div class="absolute -inset-4 bg-primary/10 rounded-[3rem] blur-2xl"></div>
                            <div class="relative rounded-[3rem] overflow-hidden shadow-2xl aspect-video bg-gray-100">
                                @if($profile->image)
                                    <img src="{{ $profile->image }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-primary font-black text-6xl italic">One</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <span class="inline-block px-4 py-1 bg-primary/10 text-primary font-black text-xs uppercase tracking-widest rounded-full mb-6">{{ $profile->category }}</span>
                        <h2 class="text-3xl md:text-4xl font-black text-secondary mb-6 leading-tight">{{ $profile->title }}</h2>
                        <div class="text-secondary/60 text-lg font-medium leading-relaxed space-y-4">
                            {!! nl2br(e($profile->description)) !!}
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-center text-secondary/30 italic">Informasi profil belum tersedia.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
