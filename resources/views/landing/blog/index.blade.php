@extends('layouts.app')

@section('title', 'Blog & Tips Belajar - OneLearning')

@section('content')
    <!-- Hero Section Blog -->
    <section class="relative pt-16 pb-12 overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-black text-secondary mb-6 tracking-tight">
                Update Info & <span class="text-primary italic">Tips Belajar</span>
            </h1>
            <p class="text-lg text-secondary/60 max-w-2xl mx-auto font-medium mb-10">
                Temukan strategi sukses UTBK, tips persiapan CPNS, dan berita terbaru seputar dunia pendidikan di Indonesia.
            </p>
        </div>
    </section>

    @if($blogs->count() > 0)
    @php $featured = $blogs->first(); @endphp
    <!-- Featured Post -->
    <section class="pb-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('blog.show', $featured->slug) }}" class="relative group rounded-[3rem] overflow-hidden bg-secondary text-white flex flex-col lg:flex-row shadow-2xl block">
                <div class="absolute inset-0 bg-primary/10 mix-blend-overlay"></div>
                <div class="flex-1 relative aspect-[16/9] lg:aspect-auto">
                    <img src="{{ $featured->image_url ?? 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=1200' }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="{{ $featured->title }}">
                </div>
                <div class="flex-1 p-8 md:p-16 flex flex-col justify-center relative z-10">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="px-4 py-1.5 bg-primary rounded-full text-[10px] font-black uppercase tracking-widest">{{ $featured->category }}</span>
                        <span class="text-xs font-bold text-white/60">Artikel Terbaru</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-black mb-6 leading-tight group-hover:text-primary transition-colors">
                        {{ $featured->title }}
                    </h2>
                    <p class="text-white/70 text-lg mb-8 leading-relaxed line-clamp-3">
                        {{ $featured->excerpt }}
                    </p>
                    <div class="flex items-center gap-4 pt-8 border-t border-white/10">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($featured->author->name) }}&background=0EA5E9&color=fff" class="w-12 h-12 rounded-2xl border-2 border-white/20" alt="Author">
                        <div>
                            <div class="font-black text-sm">{{ $featured->author->name }}</div>
                            <div class="text-[10px] text-white/40 font-bold uppercase">{{ $featured->created_at->format('d F Y') }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- Blog Content Area -->
    <section class="py-12 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Grid Post -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach($blogs->skip(1) as $post)
                <article class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl hover:shadow-primary/5 transition-all duration-500 group flex flex-col h-full">
                    <div class="relative aspect-video overflow-hidden">
                        <img src="{{ $post->image_url ?? 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=600' }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="{{ $post->title }}">
                        <div class="absolute top-4 left-4">
                            <span class="px-4 py-1.5 bg-white/90 backdrop-blur-md text-secondary font-black text-[9px] uppercase tracking-widest rounded-xl shadow-sm">{{ $post->category }}</span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="text-[10px] font-bold text-secondary/40 uppercase tracking-[0.2em] mb-3">{{ $post->created_at->format('d M Y') }}</div>
                        <h3 class="text-xl font-black text-secondary mb-4 leading-tight group-hover:text-primary transition-colors line-clamp-2">{{ $post->title }}</h3>
                        <p class="text-secondary/50 text-sm font-medium line-clamp-3 mb-6">{{ $post->excerpt }}</p>
                        <div class="mt-auto pt-6 border-t border-gray-50 flex items-center justify-between">
                            <a href="{{ route('blog.show', $post->slug) }}" class="text-xs font-black text-primary uppercase tracking-widest flex items-center gap-2 group/btn">
                                Baca Selengkapnya
                                <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 7l5 5m0 0l-5 5m5-5H6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            <!-- Blog Pagination -->
            <div class="mt-20">
                {{ $blogs->links() }}
            </div>
        </div>
    </section>
    @else
    <section class="py-24 bg-white text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-secondary/30 font-bold italic text-xl">Belum ada artikel yang diterbitkan.</p>
        </div>
    </section>
    @endif

    <!-- Newsletter Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-accent/10 p-10 md:p-20 rounded-[4rem] flex flex-col lg:flex-row items-center gap-12 border border-accent/20">
                <div class="flex-1 text-center lg:text-left">
                    <h2 class="text-3xl md:text-5xl font-black text-secondary mb-6 leading-tight">Berlangganan Tips <br class="hidden lg:block"> & Info Terbaru</h2>
                    <p class="text-secondary/60 font-medium text-lg">Dapatkan materi belajar gratis dan update info ujian langsung di emailmu setiap minggu.</p>
                </div>
                <div class="flex-1 w-full max-w-md">
                    <form class="flex flex-col sm:flex-row gap-4">
                        <input type="email" placeholder="Alamat email kamu" class="flex-1 px-8 py-5 bg-white rounded-2xl border-transparent focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all font-bold text-secondary outline-none">
                        <button class="px-10 py-5 bg-secondary text-white font-black rounded-2xl hover:bg-primary transition-all shadow-xl active:scale-95 whitespace-nowrap">
                            Join Sekarang
                        </button>
                    </form>
                    <p class="text-[10px] text-secondary/40 font-bold uppercase tracking-widest mt-4 text-center lg:text-left">Kami benci spam. Data kamu aman bersama kami.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
