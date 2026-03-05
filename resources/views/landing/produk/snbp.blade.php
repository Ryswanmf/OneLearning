@extends('layouts.app')

@section('title', 'Analisis SNBP - Prediksi Kelulusan Akurat | OneLearning')

@section('content')
    <section class="relative pt-12 pb-20 overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="flex-1">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-accent/20 text-secondary font-black text-[10px] uppercase tracking-widest rounded-lg mb-6">
                        Fitur Unggulan
                    </div>
                    <h1 class="text-4xl md:text-6xl font-black text-secondary mb-8 leading-tight">
                        Analisis <span class="text-primary italic">Peluang SNBP</span> Berbasis Data
                    </h1>
                    <p class="text-lg text-secondary/60 mb-10 leading-relaxed font-medium">
                        Jangan menebak-nebak masa depanmu. Gunakan sistem cerdas kami untuk menganalisis nilai rapormu dan membandingkannya dengan data kelulusan tahun-tahun sebelumnya di PTN impianmu.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-10">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center shrink-0 text-primary">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2"/></svg>
                            </div>
                            <div>
                                <h4 class="font-black text-secondary text-sm">Data Real Alumni</h4>
                                <p class="text-xs text-secondary/50 mt-1">Dibandingkan dengan 50rb+ data alumni asli.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center shrink-0 text-primary">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" stroke-width="2"/></svg>
                            </div>
                            <div>
                                <h4 class="font-black text-secondary text-sm">Grafik Trend</h4>
                                <p class="text-xs text-secondary/50 mt-1">Pantau kenaikan nilai rapormu secara visual.</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="inline-block px-10 py-5 bg-primary text-white font-black rounded-2xl hover:bg-secondary transition-all shadow-xl shadow-primary/20">Cek Peluang SNBP Sekarang</a>
                </div>
                <div class="flex-1 w-full">
                    <div class="relative p-8 bg-gray-50 rounded-[3rem] border border-gray-100 shadow-inner">
                        <!-- Mock UI Analysis -->
                        <div class="bg-white p-6 rounded-2xl shadow-xl mb-4 border border-primary/10">
                            <div class="flex justify-between items-center mb-4">
                                <div class="font-black text-secondary">Prediksi Kelulusan</div>
                                <span class="text-[10px] bg-green-500 text-white px-3 py-1 rounded-full font-black uppercase">Tinggi</span>
                            </div>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between text-xs font-bold mb-1">
                                        <span>Kedokteran - UI</span>
                                        <span class="text-primary">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                                        <div class="bg-primary h-full w-[85%] rounded-full"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs font-bold mb-1">
                                        <span>Teknik Informatika - ITB</span>
                                        <span class="text-accent">72%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                                        <div class="bg-accent h-full w-[72%] rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
