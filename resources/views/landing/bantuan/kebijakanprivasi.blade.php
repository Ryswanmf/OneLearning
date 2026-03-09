@extends('layouts.app')

@section('title', 'Kebijakan Privasi - OneLearning')

@section('content')
    <section class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h1 class="text-4xl md:text-6xl font-black text-secondary mb-6 tracking-tight">Kebijakan <span class="text-primary italic">Privasi</span></h1>
                <p class="text-lg text-secondary/50 font-medium leading-relaxed">Terakhir diperbarui: {{ date('d F Y') }}</p>
            </div>

            <div class="prose prose-lg prose-secondary max-w-none space-y-16">
                @forelse($policies as $item)
                <div class="animate-fade-up">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center text-primary font-black text-xs">
                            {{ $loop->iteration }}
                        </div>
                        <h2 class="text-2xl font-black text-secondary m-0 leading-tight tracking-tight">{{ $item->title }}</h2>
                    </div>
                    <div class="text-secondary/60 text-lg font-medium leading-relaxed pl-14">
                        {!! nl2br(e($item->content)) !!}
                    </div>
                </div>
                @empty
                <div class="text-center py-20 bg-gray-50 rounded-[3rem] border border-dashed border-gray-200">
                    <p class="text-secondary/30 font-bold italic">Konten kebijakan belum tersedia.</p>
                </div>
                @endforelse
            </div>

            <div class="mt-24 p-10 bg-secondary rounded-[3rem] text-center text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -mr-16 -mt-16"></div>
                <h3 class="text-xl font-black mb-4 italic">Punya pertanyaan lebih lanjut?</h3>
                <p class="text-white/60 text-sm font-medium mb-8">Tim bantuan kami siap membantu Anda memahami bagaimana kami melindungi data Anda.</p>
                <a href="https://wa.me/6289515915699" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-full hover:bg-white hover:text-secondary transition-all shadow-xl">Hubungi Tim Bantuan</a>
            </div>
        </div>
    </section>
@endsection
