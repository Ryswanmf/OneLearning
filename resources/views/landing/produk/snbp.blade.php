@extends('layouts.app')

@section('title', 'Analisis SNBP - Prediksi Kelulusan Akurat | OneLearning')

@section('content')
    <section class="relative pt-12 pb-20 overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="flex-1 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-accent/20 text-secondary font-black text-[10px] uppercase tracking-widest rounded-lg mb-6">
                        Teknologi Analisis IRT & Big Data
                    </div>
                    <h1 class="text-4xl md:text-6xl font-black text-secondary mb-8 leading-tight">
                        Analisis <span class="text-primary italic">Peluang SNBP</span> Berbasis Data
                    </h1>
                    <p class="text-lg text-secondary/60 mb-10 leading-relaxed font-medium">
                        Bandingkan nilai rapormu dengan data daya tampung dan peminat di {{ $universities->count() }} Perguruan Tinggi Negeri favorit untuk strategi kelulusan maksimal.
                    </p>
                    
                    <!-- Search Feature Mockup (Integrated with DB data) -->
                    <div class="bg-gray-50 p-8 rounded-[2.5rem] border border-gray-100 shadow-sm mb-10">
                        <div class="grid grid-cols-1 gap-4">
                            <div class="text-left">
                                <label class="text-[10px] font-black text-secondary/40 uppercase tracking-widest ml-1 mb-2 block">Pilih PTN Impian</label>
                                <select class="w-full bg-white border-gray-200 rounded-2xl h-14 px-5 font-bold text-secondary text-sm focus:ring-primary focus:border-primary">
                                    <option value="">-- Pilih Universitas --</option>
                                    @foreach($universities as $uni)
                                        <option value="{{ $uni->university_name }}">{{ $uni->university_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <a href="{{ route('login') }}" class="w-full mt-6 flex items-center justify-center gap-3 px-10 py-5 bg-secondary text-white font-black rounded-2xl hover:bg-primary transition-all shadow-xl active:scale-95">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-width="2.5"/></svg>
                            Mulai Analisis Sekarang
                        </a>
                    </div>

                    <div class="flex flex-wrap justify-center lg:justify-start gap-8">
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                            <span class="text-xs font-bold text-secondary/60">Data Update SNBT 2024</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 bg-primary rounded-full"></div>
                            <span class="text-xs font-bold text-secondary/60">50rb+ Data Alumni</span>
                        </div>
                    </div>
                </div>

                <div class="flex-1 w-full relative">
                    <div class="absolute -inset-4 bg-primary/5 rounded-[3rem] blur-3xl -rotate-3"></div>
                    <div class="relative bg-white p-8 rounded-[3rem] border border-gray-100 shadow-2xl overflow-hidden group">
                        <!-- Content Card Mock -->
                        <div class="flex justify-between items-center mb-8">
                            <h3 class="font-black text-secondary text-xl italic">Hasil Analisis</h3>
                            <span class="p-2 bg-gray-50 rounded-xl"><svg class="w-6 h-6 text-secondary/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" stroke-width="2"/></svg></span>
                        </div>
                        
                        <div class="space-y-8 relative z-10">
                            @foreach([['Prodi' => 'Teknik Informatika', 'Uni' => 'UI', 'Prob' => 88, 'Color' => 'primary'], ['Prodi' => 'Sistem Informasi', 'Uni' => 'ITS', 'Prob' => 75, 'Color' => 'accent']] as $mock)
                            <div class="animate-fade-up">
                                <div class="flex justify-between items-end mb-3">
                                    <div>
                                        <div class="text-sm font-black text-secondary">{{ $mock['Prodi'] }}</div>
                                        <div class="text-[10px] text-secondary/40 font-bold uppercase tracking-widest">{{ $mock['Uni'] }}</div>
                                    </div>
                                    <div class="text-{{ $mock['Color'] }} font-black text-xl italic">{{ $mock['Prob'] }}%</div>
                                </div>
                                <div class="w-full bg-gray-100 h-3 rounded-full overflow-hidden">
                                    <div class="bg-{{ $mock['Color'] }} h-full w-[{{ $mock['Prob'] }}%] rounded-full transition-all duration-1000"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Decoration -->
                        <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-primary/5 rounded-full group-hover:scale-150 transition-transform duration-1000"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
