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
            </div>
        </div>
    </section>

    <!-- Featured Post -->
    <section class="pb-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative group rounded-[3rem] overflow-hidden bg-secondary text-white flex flex-col lg:flex-row shadow-2xl">
                <div class="absolute inset-0 bg-primary/10 mix-blend-overlay"></div>
                <div class="flex-1 relative aspect-[16/9] lg:aspect-auto">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=1200" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Featured Post">
                </div>
                <div class="flex-1 p-8 md:p-16 flex flex-col justify-center relative z-10">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="px-4 py-1.5 bg-primary rounded-full text-[10px] font-black uppercase tracking-widest">UTBK-SNBT</span>
                        <span class="text-xs font-bold text-white/60">5 Menit Baca</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-black mb-6 leading-tight hover:text-primary transition-colors cursor-pointer">
                        Strategi Jitu Menaklukkan Soal Penalaran Matematika UTBK 2024
                    </h2>
                    <p class="text-white/70 text-lg mb-8 leading-relaxed">
                        Simak tips dari instruktur ahli kami tentang cara cepat mengerjakan soal penalaran matematika tanpa harus menghafal banyak rumus.
                    </p>
                    <div class="flex items-center gap-4 pt-8 border-t border-white/10">
                        <img src="https://ui-avatars.com/api/?name=Admin+One&background=0EA5E9&color=fff" class="w-12 h-12 rounded-2xl border-2 border-white/20" alt="Author">
                        <div>
                            <div class="font-black text-sm">Tim Akademik OneLearning</div>
                            <div class="text-[10px] text-white/40 font-bold uppercase">5 Maret 2024</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Content Area -->
    <section class="py-12 bg-gray-50/50" x-data="{ 
        currentPage: 1,
        perPage: 6,
        posts: [
            {title: 'Tips Menjaga Mental Health Saat Persiapan CPNS', cat: 'CPNS', date: '4 Mar 2024', img: 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=600'},
            {title: 'Daftar Sekolah Kedinasan Paling Favorit di Indonesia', cat: 'Kedinasan', date: '3 Mar 2024', img: 'https://images.unsplash.com/photo-1523050335392-9ae8cd2d5972?q=80&w=600'},
            {title: 'Mengenal Sistem Penilaian IRT di Seleksi Masuk PTN', cat: 'Edukasi', date: '2 Mar 2024', img: 'https://images.unsplash.com/photo-1454165833767-027ffea9e77b?q=80&w=600'},
            {title: 'Cara Mengatur Waktu Belajar Bagi Pejuang GAP Year', cat: 'Tips', date: '1 Mar 2024', img: 'https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?q=80&w=600'},
            {title: 'Prediksi Ambang Batas SKD CPNS Tahun 2024', cat: 'CPNS', date: '28 Feb 2024', img: 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=600'},
            {title: 'Review Tryout OneLearning: Kenapa Harus Coba?', cat: 'News', date: '25 Feb 2024', img: 'https://images.unsplash.com/photo-1510074377623-8cf13fb86c08?q=80&w=600'},
            {title: 'Pentingnya Menyiapkan Sertifikat Prestasi Untuk SNBP', cat: 'UTBK', date: '20 Feb 2024', img: 'https://images.unsplash.com/photo-1546410531-bb4caa6b424d?q=80&w=600'},
            {title: 'Panduan Lengkap Pendaftaran Sekolah Kedinasan STAN', cat: 'Kedinasan', date: '15 Feb 2024', img: 'https://images.unsplash.com/photo-1541339907198-e08756cdfb3f?q=80&w=600'}
        ],
        get totalPages() { return Math.ceil(this.posts.length / this.perPage); },
        get paginatedPosts() {
            let start = (this.currentPage - 1) * this.perPage;
            return this.posts.slice(start, start + this.perPage);
        }
    }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Grid Post -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <template x-for="(post, index) in paginatedPosts" :key="index">
                    <article class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl hover:shadow-primary/5 transition-all duration-500 group flex flex-col h-full">
                        <div class="relative aspect-video overflow-hidden">
                            <img :src="post.img" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" :alt="post.title">
                            <div class="absolute top-4 left-4">
                                <span class="px-4 py-1.5 bg-white/90 backdrop-blur-md text-secondary font-black text-[9px] uppercase tracking-widest rounded-xl shadow-sm" x-text="post.cat"></span>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-grow">
                            <div class="text-[10px] font-bold text-secondary/40 uppercase tracking-[0.2em] mb-3" x-text="post.date"></div>
                            <h3 class="text-xl font-black text-secondary mb-4 leading-tight group-hover:text-primary transition-colors line-clamp-2" x-text="post.title"></h3>
                            <div class="mt-auto pt-6 border-t border-gray-50 flex items-center justify-between">
                                <a href="#" class="text-xs font-black text-primary uppercase tracking-widest flex items-center gap-2 group/btn">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 7l5 5m0 0l-5 5m5-5H6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </a>
                            </div>
                        </div>
                    </article>
                </template>
            </div>

            <!-- Blog Pagination -->
            <div class="mt-20 flex justify-center items-center gap-3">
                <button @click="if(currentPage > 1) currentPage--" 
                        :class="currentPage === 1 ? 'opacity-30 cursor-not-allowed' : 'hover:bg-primary hover:text-white'"
                        class="w-12 h-12 rounded-2xl border border-gray-100 flex items-center justify-center text-secondary transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>

                <template x-for="page in totalPages" :key="page">
                    <button @click="currentPage = page" 
                            :class="currentPage === page ? 'bg-primary text-white shadow-xl shadow-primary/30 border-primary' : 'bg-white text-secondary border-gray-100 hover:bg-gray-50'"
                            class="min-w-[48px] h-12 px-4 rounded-2xl border font-black text-sm transition-all" 
                            x-text="page">
                    </button>
                </template>

                <button @click="if(currentPage < totalPages) currentPage++" 
                        :class="currentPage === totalPages ? 'opacity-30 cursor-not-allowed' : 'hover:bg-primary hover:text-white'"
                        class="w-12 h-12 rounded-2xl border border-gray-100 flex items-center justify-center text-secondary transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
            </div>
        </div>
    </section>

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
