@extends('layouts.app')

@section('title', 'Testimoni Alumni - OneLearning')

@section('content')
    <!-- Hero Section Testimoni -->
    <section class="relative pt-16 pb-20 overflow-hidden bg-white">
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-accent/5 rounded-full blur-[80px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-primary/5 text-primary rounded-full mb-6 border border-primary/10">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <span class="text-xs font-black uppercase tracking-widest">Cerita Sukses Alumni</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-black text-secondary mb-6 leading-tight">
                Bukti Nyata <span class="text-primary italic">Kualitas</span> Kami
            </h1>
            <p class="text-lg md:text-xl text-secondary/60 max-w-2xl mx-auto font-medium">
                Ribuan pelajar telah berhasil menaklukkan ujian impian mereka. Baca pengalaman inspiratif mereka selama belajar bersama OneLearning.
            </p>
        </div>
    </section>

    <!-- Testimonials Section with Alpine.js Pagination -->
    <section class="py-12 bg-white" x-data="{ 
        currentPage: 1,
        perPage: 6,
        allAlumni: {{ $testimonials->map(function($t) { 
            return [
                'name' => $t->name,
                'target' => $t->target,
                'content' => $t->content,
                'rating' => $t->rating,
                'photo' => $t->photo ? (filter_var($t->photo, FILTER_VALIDATE_URL) ? $t->photo : asset('storage/' . $t->photo)) : 'https://ui-avatars.com/api/?name='.urlencode($t->name).'&background=0EA5E9&color=fff'
            ];
        })->toJson() }},
        get totalPages() {
            return Math.ceil(this.allAlumni.length / this.perPage);
        },
        get paginatedAlumni() {
            let start = (this.currentPage - 1) * this.perPage;
            return this.allAlumni.slice(start, start + this.perPage);
        }
    }">
        <!-- Tabs Filter (UI Only) -->
        <div class="bg-gray-50 border-y border-gray-100 py-4 mb-12 sticky top-16 z-40 backdrop-blur-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="flex items-center justify-center gap-3 overflow-x-auto no-scrollbar">
                    <button class="px-6 py-2 bg-primary text-white font-bold rounded-full text-sm shadow-lg">Semua Cerita</button>
                    <button class="px-6 py-2 bg-white text-secondary font-bold rounded-full text-sm border border-gray-100">UTBK-SNBT</button>
                    <button class="px-6 py-2 bg-white text-secondary font-bold rounded-full text-sm border border-gray-100">Kedinasan</button>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Grid Testimoni -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 min-h-[400px]">
                <template x-for="(person, index) in paginatedAlumni" :key="index">
                    <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-2xl hover:shadow-primary/10 transition-all duration-500 flex flex-col group h-full"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 translate-y-4"
                         x-transition:enter-end="opacity-100 translate-y-0">
                        <div class="flex items-center gap-1 text-accent mb-4">
                            <template x-for="i in person.rating">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </template>
                        </div>
                        <p class="text-secondary/70 italic leading-relaxed mb-8 flex-grow" x-text="'&quot;' + person.content + '&quot;'">
                        </p>
                        <div class="flex items-center gap-4 pt-6 border-t border-gray-50">
                            <img :src="person.photo" 
                                 class="w-14 h-14 rounded-2xl border-2 border-gray-50 group-hover:border-primary/20 transition-colors object-cover" alt="Alumni">
                            <div>
                                <div class="font-black text-secondary group-hover:text-primary transition-colors" x-text="person.name"></div>
                                <div class="text-[10px] text-primary font-bold uppercase tracking-wider">Lolos <span x-text="person.target"></span></div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Custom Pagination -->
            <div class="mt-20 flex flex-wrap items-center justify-center gap-3">
                <!-- Previous -->
                <button @click="if(currentPage > 1) currentPage--" 
                        :class="currentPage === 1 ? 'opacity-30 cursor-not-allowed' : 'hover:bg-primary hover:text-white'"
                        class="w-10 h-10 rounded-xl border border-gray-100 flex items-center justify-center text-secondary transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"/></svg>
                </button>

                <!-- Page Numbers -->
                <template x-for="page in totalPages" :key="page">
                    <button @click="currentPage = page" 
                            :class="currentPage === page ? 'bg-primary text-white shadow-lg shadow-primary/30 border-primary' : 'bg-white text-secondary border-gray-100 hover:bg-gray-50'"
                            class="min-w-[40px] h-10 px-3 rounded-xl border font-bold text-sm transition-all" 
                            x-text="page">
                    </button>
                </template>

                <!-- Next -->
                <button @click="if(currentPage < totalPages) currentPage++" 
                        :class="currentPage === totalPages ? 'opacity-30 cursor-not-allowed' : 'hover:bg-primary hover:text-white'"
                        class="w-10 h-10 rounded-xl border border-gray-100 flex items-center justify-center text-secondary transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="pb-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-secondary p-10 md:p-16 rounded-[4rem] shadow-2xl flex flex-col items-center text-center relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <div class="relative z-10">
                    <h2 class="text-3xl md:text-5xl font-black text-white mb-6">Ingin Sukses Seperti Mereka?</h2>
                    <p class="text-white/60 mb-10 max-w-xl mx-auto font-medium">Mulai persiapanmu hari ini dan jadilah bagian dari alumni OneLearning berikutnya yang lolos ujian impian.</p>
                    <a href="#" class="inline-block px-12 py-5 bg-primary text-white font-black text-lg rounded-full hover:bg-white hover:text-primary transition-all transform hover:scale-105 shadow-xl shadow-primary/20">
                        Daftar OneLearning Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
