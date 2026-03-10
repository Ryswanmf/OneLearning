@extends('layouts.app')

@section('title', $settings['site_title'] ?? 'OneLearning - Solusi Tryout Online Terakreditasi Nomor #1')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-6 pb-24 lg:pb-32 overflow-hidden bg-white">
        <!-- Modern Abstract Background -->
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <div class="absolute -top-[10%] -right-[10%] w-[600px] h-[600px] bg-primary/5 rounded-full blur-[120px] animate-pulse"></div>
            <div class="absolute -bottom-[10%] -left-[10%] w-[500px] h-[500px] bg-accent/5 rounded-full blur-[100px]"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full opacity-[0.02]" 
                 style="background-image: radial-gradient(#1E3A8A 1px, transparent 1px); background-size: 40px 40px;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16 xl:gap-24">
                
                <!-- Content (Left) -->
                <div class="flex-1 text-center lg:text-left order-2 lg:order-1 max-w-3xl animate-fade-up">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-primary/5 rounded-full border border-primary/10 mb-8 shadow-sm">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                        </span>
                        <span class="text-[10px] font-black text-primary uppercase tracking-[0.25em]">Sistem Penilaian IRT Terakreditasi</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl md:text-6xl xl:text-7xl font-black text-secondary leading-[1.1] sm:leading-[1.05] tracking-tight mb-8">
                        @php
                            $heroTitle = $settings['hero_title'] ?? 'Raih Kampus Impianmu Sekarang.';
                            $titleParts = explode(' ', $heroTitle);
                            $lastWord = array_pop($titleParts);
                            $secondLastWord = array_pop($titleParts);
                            $mainTitle = implode(' ', $titleParts);
                        @endphp
                        {{ $mainTitle }} <br class="hidden sm:block">
                        <span class="relative inline-block italic text-primary">
                            {{ $secondLastWord }}
                            <svg class="absolute -bottom-2 left-0 w-full h-3 text-accent/30 -z-10" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 5 Q 25 0 50 5 T 100 5" stroke="currentColor" stroke-width="8" fill="none"/></svg>
                        </span> 
                        {{ $lastWord }}
                    </h1>
                    
                    <p class="text-lg md:text-xl text-secondary/50 mb-12 leading-relaxed font-medium max-w-xl mx-auto lg:mx-0">
                        {{ $settings['hero_subtitle'] ?? 'Platform simulasi tryout tercanggih dengan sistem IRT & Ranking Real-time. Persiapan matang untuk masa depan cerah.' }}
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center gap-5 justify-center lg:justify-start">
                        <a href="{{ route('login') }}" class="w-full sm:w-auto px-12 py-5 bg-primary text-white font-extrabold rounded-2xl hover:bg-secondary shadow-[0_20px_50px_rgba(14,165,233,0.3)] hover:shadow-secondary/30 transition-all transform hover:-translate-y-1 active:scale-95 text-lg text-center">
                            {{ $settings['hero_cta_text'] ?? 'Mulai Tryout Gratis' }}
                        </a>
                        <a href="{{ route('paket.index') }}" class="w-full sm:w-auto px-10 py-5 bg-white border border-secondary/10 text-secondary font-bold rounded-2xl hover:bg-gray-50 transition-all transform hover:-translate-y-1 flex items-center justify-center gap-3 text-lg group shadow-sm">
                            Lihat Paket Belajar
                        </a>
                    </div>
                    
                    <!-- Trusted Badge -->
                    <div class="mt-16 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-6 opacity-80">
                        <div class="flex -space-x-3">
                            @for($i=1; $i<=4; $i++)
                            <img class="w-10 h-10 rounded-xl border-4 border-white shadow-md object-cover" src="https://ui-avatars.com/api/?name=User+{{$i}}&background=random&color=fff" alt="User" loading="lazy">
                            @endfor
                        </div>
                        <div class="text-left">
                            <div class="text-[11px] font-black text-secondary uppercase tracking-[0.1em]">Bergabung Dengan</div>
                            <div class="text-sm font-bold text-secondary/40 italic">100.000+ Siswa di Seluruh Indonesia</div>
                        </div>
                    </div>
                </div>

                <!-- Visual (Right) -->
                <div class="flex-1 w-full order-1 lg:order-2 relative">
                    <div class="relative max-w-[550px] mx-auto lg:ml-auto group">
                        <!-- Background Glow -->
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/20 via-transparent to-accent/20 rounded-[4rem] blur-3xl opacity-50 group-hover:opacity-80 transition-opacity duration-1000"></div>
                        
                        <!-- Main Image Container -->
                        <div class="relative bg-white/40 backdrop-blur-2xl p-5 rounded-[4rem] shadow-[0_32px_64px_-12px_rgba(30,58,138,0.1)] border border-white/60 overflow-hidden">
                            @php
                                $heroImg = isset($settings['hero_image']) && !empty($settings['hero_image']) 
                                    ? (filter_var($settings['hero_image'], FILTER_VALIDATE_URL) ? $settings['hero_image'] : asset('storage/' . $settings['hero_image']))
                                    : 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=1200';
                            @endphp
                            <div class="aspect-square bg-gray-50 rounded-[3.5rem] overflow-hidden border border-gray-100 relative">
                                <img src="{{ $heroImg }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000">
                                <!-- Floating Card inside Image -->
                                <div class="absolute bottom-8 left-8 right-8 bg-white/90 backdrop-blur-xl p-6 rounded-3xl shadow-2xl border border-white/50 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-700">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 bg-green-500 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-green-500/20">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4" /></svg>
                                        </div>
                                        <div>
                                            <div class="text-[10px] font-black text-secondary/40 uppercase tracking-widest leading-none mb-1">Hasil Terverifikasi</div>
                                            <div class="text-lg font-black text-secondary italic leading-none">Passing Grade 98.5%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Counter Section -->
    <section class="py-12 bg-white relative z-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-secondary rounded-[2.5rem] sm:rounded-[3.5rem] p-8 sm:p-12 lg:p-16 shadow-2xl shadow-secondary/30 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-96 h-96 bg-primary/10 rounded-full -mr-48 -mt-48 blur-3xl group-hover:scale-110 transition-transform duration-1000"></div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-16 relative z-10 text-center">
                    <div class="space-y-3">
                        <div class="text-5xl sm:text-6xl font-black text-white tracking-tighter">{{ $settings['stats_students'] ?? '100.000+' }}</div>
                        <div class="text-[10px] sm:text-[11px] font-black text-primary uppercase tracking-[0.3em]">Siswa Aktif Belajar</div>
                    </div>
                    <div class="space-y-3 border-y md:border-y-0 md:border-x border-white/10 py-8 md:py-0">
                        <div class="text-5xl sm:text-6xl font-black text-white tracking-tighter">{{ $settings['stats_passing_rate'] ?? '98%' }}</div>
                        <div class="text-[10px] sm:text-[11px] font-black text-primary uppercase tracking-[0.3em]">Tingkat Kelulusan PTN</div>
                    </div>
                    <div class="space-y-3">
                        <div class="text-5xl sm:text-6xl font-black text-white tracking-tighter">{{ $settings['stats_total_tryouts'] ?? '1.500+' }}</div>
                        <div class="text-[10px] sm:text-[11px] font-black text-primary uppercase tracking-[0.3em]">Materi & Bank Soal</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages Section -->
    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-24 max-w-3xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-black text-secondary leading-tight tracking-tight">Kenapa Harus <span class="text-primary italic">OneLearning?</span></h2>
                <p class="text-secondary/50 font-medium mt-6 text-lg">Kami menghadirkan pengalaman belajar paling efisien dengan teknologi yang disesuaikan dengan kebutuhan ujian nasional.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Advantage 1 -->
                <div class="group p-12 bg-gray-50 rounded-[3.5rem] hover:bg-secondary transition-all duration-700 hover:-translate-y-3 border border-gray-100 shadow-sm relative overflow-hidden">
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-10 group-hover:bg-primary group-hover:text-white transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        </div>
                        <h3 class="text-2xl font-black text-secondary mb-5 group-hover:text-white transition-colors duration-500 italic">{{ $settings['adv_1_title'] ?? 'Sistem IRT Akurat' }}</h3>
                        <p class="text-secondary/50 font-medium leading-relaxed group-hover:text-white/60 transition-colors duration-500">
                            {{ $settings['adv_1_desc'] ?? 'Penilaian menggunakan algoritma Item Response Theory yang sama dengan standar nasional untuk hasil yang presisi.' }}
                        </p>
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-primary/5 rounded-full blur-2xl group-hover:bg-white/5 transition-colors duration-500"></div>
                </div>

                <!-- Advantage 2 -->
                <div class="group p-12 bg-gray-50 rounded-[3.5rem] hover:bg-secondary transition-all duration-700 hover:-translate-y-3 border border-gray-100 shadow-sm relative overflow-hidden">
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center text-accent mb-10 group-hover:bg-accent group-hover:text-secondary transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                        </div>
                        <h3 class="text-2xl font-black text-secondary mb-5 group-hover:text-white transition-colors duration-500 italic">{{ $settings['adv_2_title'] ?? 'Analisis Mendalam' }}</h3>
                        <p class="text-secondary/50 font-medium leading-relaxed group-hover:text-white/60 transition-colors duration-500">
                            {{ $settings['adv_2_desc'] ?? 'Dapatkan laporan kelemahan dan kekuatan di setiap materi pelajaran secara detail untuk strategi belajar yang lebih baik.' }}
                        </p>
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-accent/5 rounded-full blur-2xl group-hover:bg-white/5 transition-colors duration-500"></div>
                </div>

                <!-- Advantage 3 -->
                <div class="group p-12 bg-gray-50 rounded-[3.5rem] hover:bg-secondary transition-all duration-700 hover:-translate-y-3 border border-gray-100 shadow-sm relative overflow-hidden">
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-10 group-hover:bg-primary group-hover:text-white transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <h3 class="text-2xl font-black text-secondary mb-5 group-hover:text-white transition-colors duration-500 italic">Waktu Fleksibel</h3>
                        <p class="text-secondary/50 font-medium leading-relaxed group-hover:text-white/60 transition-colors duration-500">Akses simulasi tryout kapan saja dan di mana saja melalui smartphone atau laptop Anda sesuai jadwal harian Anda.</p>
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-primary/5 rounded-full blur-2xl group-hover:bg-white/5 transition-colors duration-500"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Unggulan Section -->
    <section class="py-32 bg-gray-50/50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-black text-secondary leading-tight tracking-tight">
                    {!! $settings['programs_title'] ?? 'Kategori Program <span class="text-primary italic">Populer</span>' !!}
                </h2>
                <p class="text-secondary/50 font-medium mt-6 text-lg">
                    {{ $settings['programs_subtitle'] ?? 'Pilih jalur pendidikan yang ingin Anda taklukkan hari ini.' }}
                </p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                @foreach($featuredProducts as $product)
                @php
                    $route = '#';
                    $count = $product->package_count;
                    $title_low = strtolower($product->title);
                    if(Str::contains($title_low, 'snbp')) $route = route('produk.snbp');
                    elseif(Str::contains($title_low, 'utbk') && !Str::contains($title_low, 'sma')) { $route = route('produk.utbk'); $count = $counts['utbk'] ?? $count; }
                    elseif(Str::contains($title_low, 'sd')) { $route = route('produk.sd'); $count = $counts['sd'] ?? $count; }
                    elseif(Str::contains($title_low, 'smp')) { $route = route('produk.smp'); $count = $counts['smp'] ?? $count; }
                    elseif(Str::contains($title_low, 'sma') && Str::contains($title_low, 'utbk')) { $route = route('produk.sma_utbk'); $count = $counts['sma_utbk'] ?? $count; }
                    elseif(Str::contains($title_low, 'sma')) { $route = route('produk.sma'); $count = $counts['sma'] ?? $count; }
                    elseif(Str::contains($title_low, 'alumni')) { $route = route('produk.alumni'); $count = $counts['alumni'] ?? $count; }
                @endphp
                <a href="{{ $route }}" class="relative group rounded-[3.5rem] overflow-hidden aspect-[4/5] shadow-[0_20px_50px_rgba(30,58,138,0.05)] border border-white block transition-all duration-700 hover:shadow-2xl">
                    <div class="absolute inset-0 bg-secondary/40 group-hover:bg-secondary/10 transition-colors duration-700 z-10"></div>
                    <img src="{{ $product->image ?? 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=600' }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                    <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/20 to-transparent z-20"></div>
                    <div class="absolute bottom-0 left-0 p-10 z-30 w-full text-left transform translate-y-6 group-hover:translate-y-0 transition-transform duration-500">
                        <span class="inline-block px-3 py-1 bg-accent text-secondary font-black text-[9px] uppercase tracking-widest rounded-lg mb-4">{{ $product->category }}</span>
                        <h3 class="text-white font-extrabold text-2xl mb-5 leading-tight italic">{{ $product->title }}</h3>
                        <div class="flex items-center gap-5 pt-5 border-t border-white/20">
                            <div class="flex items-center gap-2 text-white/80 font-bold text-xs">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.247 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" stroke-width="2.5"/></svg>
                                {{ $count }} Paket
                            </div>
                            <div class="flex items-center gap-2 text-white/80 font-bold text-xs">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2.5"/></svg>
                                {{ $product->duration }}
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Learning Steps Section -->
    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-24 max-w-3xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-black text-secondary leading-tight tracking-tight">4 Langkah Meraih <span class="text-primary italic">Sukses</span></h2>
                <p class="text-secondary/50 font-medium mt-6 text-lg">Alur belajar terstruktur yang telah membantu ribuan siswa lolos kampus impian.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                @foreach([['Pilih Paket', 'Sesuaikan dengan jenjang dan target kampus impianmu.'], ['Lakukan Tryout', 'Kerjakan soal-soal berkualitas dengan sistem IRT asli.'], ['Analisis Hasil', 'Dapatkan laporan kelemahan dan rangking nasional.'], ['Evaluasi & Lolos', 'Tingkatkan kemampuan hingga target skor tercapai.']] as $idx => $step)
                <div class="relative p-10 rounded-[3.5rem] bg-white border border-gray-100 shadow-[0_20px_50px_rgba(0,0,0,0.02)] text-center group hover:bg-primary transition-all duration-500">
                    <div class="w-16 h-16 bg-secondary text-white rounded-2xl flex items-center justify-center font-black text-2xl mx-auto mb-8 shadow-xl shadow-secondary/20 group-hover:bg-white group-hover:text-primary transition-all duration-500">{{ $idx + 1 }}</div>
                    <h4 class="text-xl font-black text-secondary mb-4 group-hover:text-white transition-colors italic">{{ $step[0] }}</h4>
                    <p class="text-sm text-secondary/50 font-medium leading-relaxed group-hover:text-white/70 transition-colors">{{ $step[1] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-primary rounded-[2.5rem] sm:rounded-[4rem] p-10 sm:p-12 md:p-24 relative overflow-hidden shadow-2xl text-center">
                <div class="absolute inset-0 bg-secondary/10 mix-blend-overlay"></div>
                <div class="absolute -top-[20%] -left-[10%] w-[500px] h-[500px] bg-white/10 rounded-full blur-[100px]"></div>
                
                <div class="relative z-10 max-w-4xl mx-auto">
                    <h2 class="text-3xl sm:text-4xl md:text-6xl lg:text-7xl font-black text-white mb-8 leading-tight tracking-tight">
                        {{ $settings['cta_bottom_title'] ?? 'Siap Jadi Bagian Dari Alumni Sukses Kami?' }}
                    </h2>
                    <p class="text-white/80 text-lg sm:text-xl md:text-2xl font-medium mb-12 sm:mb-16 leading-relaxed opacity-90">
                        {{ $settings['cta_bottom_subtitle'] ?? 'Jangan tunda lagi masa depanmu. Mulai persiapan sekarang dan jadilah juara.' }}
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4 sm:gap-6">
                        <a href="{{ route('register') }}" class="px-8 sm:px-14 py-5 sm:py-6 bg-white text-primary font-black text-lg sm:text-xl rounded-2xl sm:rounded-[2.5rem] hover:bg-secondary hover:text-white transition-all transform hover:scale-105 active:scale-95 shadow-2xl inline-block">
                            Daftar Sekarang - Gratis
                        </a>
                        <a href="https://wa.me/6289515915699" class="px-8 sm:px-14 py-5 sm:py-6 border-2 border-white/30 text-white font-black text-lg sm:text-xl rounded-2xl sm:rounded-[2.5rem] hover:bg-white/10 transition-all inline-block">
                            Tanya Lewat WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
