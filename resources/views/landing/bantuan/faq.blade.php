@extends('layouts.app')

@section('title', 'Pusat Bantuan - OneLearning')

@section('content')
    <!-- Hero Header -->
    <section class="relative pt-20 pb-32 overflow-hidden bg-secondary text-white text-center">
        <div class="absolute inset-0 bg-primary/10 mix-blend-overlay"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <h1 class="text-4xl md:text-6xl font-black mb-6 leading-tight">Pusat <span class="text-primary italic">Bantuan</span></h1>
            <p class="text-lg text-white/60 max-w-2xl mx-auto font-medium">Temukan jawaban cepat untuk pertanyaan Anda seputar layanan OneLearning.</p>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="py-24 bg-white -mt-16 relative z-20 rounded-t-[4rem]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="space-y-16">
                @foreach($faqs->groupBy('category') as $category => $items)
                <div class="animate-fade-up">
                    <h2 class="text-[10px] font-black text-primary uppercase tracking-[0.3em] mb-8 border-l-4 border-primary pl-4">{{ $category }}</h2>
                    
                    <div class="space-y-4" x-data="{ active: null }">
                        @foreach($items as $faq)
                        <div class="border border-gray-100 rounded-[2rem] overflow-hidden transition-all duration-300" 
                             :class="active === {{ $faq->id }} ? 'bg-gray-50 shadow-lg' : 'bg-white'">
                            <button @click="active = (active === {{ $faq->id }} ? null : {{ $faq->id }})" 
                                    class="w-full px-8 py-6 text-left flex items-center justify-between gap-4">
                                <span class="text-lg font-black text-secondary leading-tight">{{ $faq->question }}</span>
                                <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary flex-shrink-0 transition-transform duration-300"
                                     :class="active === {{ $faq->id }} ? 'rotate-180 bg-primary text-white' : ''">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                                </div>
                            </button>
                            
                            <div x-show="active === {{ $faq->id }}" 
                                 x-collapse
                                 x-cloak>
                                <div class="px-8 pb-8 text-secondary/60 font-medium leading-relaxed prose prose-sm max-w-none">
                                    {!! nl2br(e($faq->answer)) !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach

                @if($faqs->isEmpty())
                <div class="text-center py-20 bg-gray-50 rounded-[3rem] border border-dashed border-gray-200">
                    <p class="text-secondary/30 font-bold italic">Belum ada bantuan yang tersedia.</p>
                </div>
                @endif
            </div>

            <!-- Need More Help? -->
            <div class="mt-32 p-12 bg-gray-50 rounded-[4rem] border border-gray-100 text-center relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary via-accent to-primary"></div>
                <h3 class="text-2xl font-black text-secondary mb-4 italic">Masih butuh bantuan?</h3>
                <p class="text-secondary/40 font-medium mb-10">Tim Customer Experience kami siap melayani Anda setiap hari jam 08.00 - 21.00 WIB.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="https://wa.me/your-number" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-full hover:bg-secondary transition-all shadow-xl flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.353-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.13.57-.072 1.758-.718 2.005-1.412.248-.695.248-1.29.173-1.412-.074-.122-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.87 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Chat via WhatsApp
                    </a>
                    <a href="mailto:support@onelearning.id" class="px-10 py-4 bg-white border border-gray-200 text-secondary font-black text-xs uppercase tracking-widest rounded-full hover:bg-gray-100 transition-all">Kirim Email</a>
                </div>
            </div>
        </div>
    </section>
@endsection
