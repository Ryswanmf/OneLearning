@extends('layouts.app')

@section('title', 'Tryout UTBK-SNBT 2024 - Simulasi Terakurat | OneLearning')

@section('content')
    <!-- Hero UTBK -->
    <section class="pt-12 pb-24 bg-white overflow-hidden text-center lg:text-left">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="flex-1">
                    <h1 class="text-4xl md:text-6xl font-black text-secondary mb-8 leading-[1.1]">
                        Simulasi <span class="text-primary italic">UTBK-SNBT</span> Paling Mirip Aslinya
                    </h1>
                    <p class="text-lg text-secondary/60 mb-10 leading-relaxed font-medium">
                        Rasakan pengalaman ujian sesungguhnya dengan sistem <span class="text-secondary font-bold">Item Response Theory (IRT)</span>, timer per sub-tes, dan antarmuka simulasi yang 99% mirip dengan aplikasi resmi SNBT.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-12">
                        <a href="#" class="px-10 py-5 bg-primary text-white font-black rounded-2xl hover:bg-secondary transition-all shadow-xl shadow-primary/20">Coba Tryout Gratis</a>
                        <div class="flex items-center gap-3 px-6 py-4 bg-gray-50 rounded-2xl border border-gray-100">
                            <div class="flex -space-x-2">
                                <div class="w-8 h-8 rounded-full bg-blue-500 border-2 border-white"></div>
                                <div class="w-8 h-8 rounded-full bg-orange-500 border-2 border-white"></div>
                                <div class="w-8 h-8 rounded-full bg-indigo-500 border-2 border-white"></div>
                            </div>
                            <span class="text-xs font-bold text-secondary/60">10k+ Siswa Sedang Online</span>
                        </div>
                    </div>
                </div>
                <div class="flex-1 relative">
                    <div class="absolute inset-0 bg-primary/5 rounded-[3rem] -rotate-3 blur-2xl"></div>
                    <div class="relative bg-secondary p-6 rounded-[2.5rem] shadow-2xl border-4 border-white/10">
                        <!-- Mock Exam Interface -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-inner">
                            <div class="bg-gray-100 px-4 py-3 flex justify-between items-center border-b">
                                <div class="text-[10px] font-black text-secondary uppercase tracking-widest">Subtes: Penalaran Umum</div>
                                <div class="text-xs font-black text-red-500">14:59</div>
                            </div>
                            <div class="p-6">
                                <div class="w-full h-4 bg-gray-100 rounded-full mb-4"></div>
                                <div class="w-[80%] h-4 bg-gray-100 rounded-full mb-8"></div>
                                <div class="space-y-3">
                                    @foreach(['A', 'B', 'C', 'D'] as $opt)
                                    <div class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:bg-primary/5 cursor-pointer transition-all">
                                        <div class="w-6 h-6 rounded-full border-2 border-gray-200 flex items-center justify-center text-[10px] font-bold">{{ $opt }}</div>
                                        <div class="w-full h-3 bg-gray-50 rounded-full"></div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
