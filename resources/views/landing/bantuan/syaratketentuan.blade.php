@extends('layouts.app')

@section('title', 'Syarat & Ketentuan - OneLearning')

@section('content')
    <section class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h1 class="text-4xl md:text-6xl font-black text-secondary mb-6 tracking-tight">Syarat & <span class="text-primary italic">Ketentuan</span></h1>
                <p class="text-lg text-secondary/50 font-medium leading-relaxed">Harap baca dengan seksama sebelum menggunakan layanan kami.</p>
            </div>

            <div class="space-y-12">
                @forelse($terms as $item)
                <div class="p-10 bg-gray-50 rounded-[3rem] border border-gray-100 hover:shadow-xl transition-all duration-500 group">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-secondary text-white rounded-2xl flex items-center justify-center font-black text-lg shadow-lg shadow-secondary/20">
                            {{ $item->order }}
                        </div>
                        <h2 class="text-2xl font-black text-secondary m-0 leading-tight">{{ $item->title }}</h2>
                    </div>
                    <div class="text-secondary/60 text-lg font-medium leading-relaxed pl-2 md:pl-16">
                        {!! nl2br(e($item->content)) !!}
                    </div>
                </div>
                @empty
                <div class="text-center py-20 bg-gray-50 rounded-[3rem] border border-dashed border-gray-200">
                    <p class="text-secondary/30 font-bold italic">Konten syarat & ketentuan belum tersedia.</p>
                </div>
                @endforelse
            </div>

            <div class="mt-20 text-center p-10 bg-primary/5 rounded-[3rem] border border-primary/10">
                <p class="text-secondary/40 text-sm font-bold italic">Dengan menggunakan layanan OneLearning, Anda dianggap telah menyetujui seluruh ketentuan di atas.</p>
            </div>
        </div>
    </section>
@endsection
