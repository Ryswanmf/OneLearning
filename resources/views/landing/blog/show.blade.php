@extends('layouts.app')

@section('title', $blog->title . ' - OneLearning Blog')

@section('content')
    <!-- Article Header -->
    <header class="pt-16 pb-12 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex items-center justify-center gap-3 mb-8">
                <span class="px-4 py-1.5 bg-primary/10 text-primary rounded-full text-[10px] font-black uppercase tracking-widest">{{ $blog->category }}</span>
                <span class="text-secondary/30">&bull;</span>
                <span class="text-[10px] text-secondary/40 font-bold uppercase tracking-widest">{{ $blog->created_at->format('d F Y') }}</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-secondary leading-[1.1] mb-10 italic">
                {{ $blog->title }}
            </h1>
            
            <div class="flex items-center justify-center gap-4 py-8 border-y border-gray-50">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($blog->author->name) }}&background=0EA5E9&color=fff" class="w-12 h-12 rounded-2xl border-2 border-white shadow-sm" alt="{{ $blog->author->name }}">
                <div class="text-left">
                    <div class="font-black text-sm text-secondary">{{ $blog->author->name }}</div>
                    <div class="text-[10px] text-secondary/40 font-bold uppercase tracking-widest">Penulis Akademik</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Featured Image -->
    <section class="bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative aspect-[21/9] rounded-[3.5rem] overflow-hidden shadow-2xl">
                <img src="{{ $blog->image ?? 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=1200' }}" class="absolute inset-0 w-full h-full object-cover" alt="{{ $blog->title }}">
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <article class="py-20 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg prose-secondary max-w-none 
                        prose-headings:text-secondary prose-headings:font-black prose-headings:italic
                        prose-p:text-secondary/70 prose-p:leading-relaxed prose-p:font-medium
                        prose-li:text-secondary/70 prose-li:font-medium
                        prose-strong:text-secondary prose-strong:font-black">
                {!! $blog->content !!}
            </div>

            <!-- Share Section -->
            <div class="mt-20 pt-10 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-4">
                    <span class="text-xs font-black text-secondary/30 uppercase tracking-widest">Bagikan:</span>
                    <div class="flex gap-2">
                        <a href="#" class="w-10 h-10 rounded-xl bg-gray-50 flex items-center justify-center text-secondary hover:bg-primary hover:text-white transition-all"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-gray-50 flex items-center justify-center text-secondary hover:bg-primary hover:text-white transition-all"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.922 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.84 4.996 4.996 0 01-2.212.085 4.936 4.926 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg></a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-gray-50 flex items-center justify-center text-secondary hover:bg-primary hover:text-white transition-all"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                    </div>
                </div>
                <a href="{{ route('blog') }}" class="text-xs font-black text-primary uppercase tracking-widest flex items-center gap-2 hover:gap-3 transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 17l-5-5m0 0l5-5m-5 5h12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    Kembali ke Blog
                </a>
            </div>
        </div>
    </article>

    <!-- Related Articles -->
    @if($relatedBlogs->count() > 0)
    <section class="py-24 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-black text-secondary mb-12 text-center italic">Artikel <span class="text-primary">Terkait</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @foreach($relatedBlogs as $post)
                <article class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500 group">
                    <div class="relative aspect-video overflow-hidden">
                        <img src="{{ $post->image ?? 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=600' }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="{{ $post->title }}">
                    </div>
                    <div class="p-8">
                        <div class="text-[10px] font-bold text-secondary/40 uppercase tracking-widest mb-3">{{ $post->created_at->format('d M Y') }}</div>
                        <h3 class="text-lg font-black text-secondary mb-4 leading-tight group-hover:text-primary transition-colors line-clamp-2">{{ $post->title }}</h3>
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-xs font-black text-primary uppercase tracking-widest inline-block border-b-2 border-primary/10 hover:border-primary transition-all">Baca Artikel</a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Newsletter CTA -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-black text-secondary mb-6 leading-tight">Jangan Lewatkan Tips & Info Terbaru</h2>
                <p class="text-secondary/50 font-medium text-lg mb-10">Dapatkan update langsung ke emailmu setiap minggu tentang strategi lolos ujian dan berita pendidikan.</p>
                <form class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                    <input type="email" placeholder="Alamat email kamu" class="flex-1 px-8 py-5 bg-gray-50 rounded-2xl border-transparent focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all font-bold text-secondary outline-none">
                    <button class="px-10 py-5 bg-primary text-white font-black rounded-2xl hover:bg-secondary shadow-xl active:scale-95 whitespace-nowrap">
                        Berlangganan
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
