@extends('layouts.app')

@section('title', 'Future Educators - OneLearning')

@section('content')
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-black text-secondary mb-6">Future <span class="text-primary italic">Educators</span></h1>
            <p class="text-lg text-secondary/50 max-w-2xl mx-auto mb-16">Bergabunglah dengan komunitas pendidik inovatif untuk masa depan pendidikan Indonesia yang lebih baik.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($programs as $program)
                <div class="bg-gray-50 p-8 rounded-[2.5rem] border border-gray-100 hover:shadow-xl transition-all group">
                    <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-all overflow-hidden">
                        @if($program->image)
                            @php
                                $isImage = filter_var($program->image, FILTER_VALIDATE_URL) || 
                                          preg_match('/\.(jpg|jpeg|png|gif|svg|webp)$/i', $program->image);
                            @endphp
                            
                            @if($isImage)
                                <img src="{{ filter_var($program->image, FILTER_VALIDATE_URL) ? $program->image : asset('storage/' . $program->image) }}" class="w-full h-full object-cover rounded-2xl">
                            @else
                                <span class="text-3xl">{{ $program->image }}</span>
                            @endif
                        @else
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.247 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                        @endif
                    </div>
                    <h3 class="text-xl font-black text-secondary mb-4">{{ $program->title }}</h3>
                    <p class="text-secondary/60 text-sm font-medium leading-relaxed">{{ $program->description }}</p>
                </div>
                @empty
                <p class="col-span-full text-secondary/30 italic">Program komunitas belum tersedia.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
