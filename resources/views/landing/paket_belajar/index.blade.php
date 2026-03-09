@extends('layouts.app')

@section('title', 'Pilihan Paket Belajar - OneLearning')

@section('content')
    <!-- Hero Section Paket -->
    <section class="relative pt-16 pb-12 overflow-hidden bg-white text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl sm:text-4xl md:text-6xl font-black text-secondary mb-6 tracking-tight leading-tight">
                Pilih Paket <span class="text-primary italic">Terbaikmu</span>
            </h1>
            <p class="text-base sm:text-lg text-secondary/60 max-w-2xl mx-auto font-medium mb-10">
                Investasi terbaik untuk masa depanmu. Pilih paket simulasi yang sesuai dengan kebutuhan target ujianmu.
            </p>
            
            <!-- Toggle Info (Visual Only) -->
            <div class="flex items-center justify-center gap-4 mb-12">
                <span class="text-sm font-bold text-secondary">Akses Selamanya</span>
                <div class="w-12 h-6 bg-primary/20 rounded-full relative p-1">
                    <div class="w-4 h-4 bg-primary rounded-full shadow-sm"></div>
                </div>
                <span class="text-sm font-bold text-secondary/40">Premium Member</span>
            </div>
        </div>
    </section>

    <!-- Pricing Grid -->
    <section class="py-20 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                @foreach($packages as $package)
                <div class="{{ $package->is_popular ? 'bg-secondary lg:scale-105 z-10 shadow-2xl shadow-primary/20' : 'bg-white border border-gray-100 shadow-sm hover:shadow-xl' }} p-8 sm:p-10 rounded-[2.5rem] sm:rounded-[3.5rem] transition-all duration-500 relative flex flex-col group h-full">
                    @if($package->is_popular)
                    <div class="absolute -top-5 left-1/2 -translate-x-1/2 px-6 py-2 bg-accent text-secondary font-black text-[10px] uppercase tracking-widest rounded-full shadow-lg whitespace-nowrap">Paling Populer</div>
                    @endif

                    <div class="mb-8">
                        <h3 class="text-2xl font-black {{ $package->is_popular ? 'text-white' : 'text-secondary' }} mb-2 italic">{{ $package->name }}</h3>
                        <p class="text-sm {{ $package->is_popular ? 'text-white/40' : 'text-secondary/40' }} font-bold uppercase tracking-widest">{{ $package->description }}</p>
                    </div>
                    
                    <div class="mb-10 {{ $package->is_popular ? 'text-white' : '' }}">
                        <span class="text-5xl font-black {{ $package->is_popular ? 'text-accent' : 'text-secondary' }} italic">Rp {{ number_format($package->price, 0, ',', '.') }}</span>
                        <div class="text-[10px] mt-2 font-black uppercase tracking-widest {{ $package->is_popular ? 'text-white/30' : 'text-secondary/30' }}">Masa Aktif: {{ $package->duration }}</div>
                    </div>

                    <div class="space-y-5 mb-12 flex-grow">
                        <div class="text-[10px] font-black uppercase tracking-[0.2em] {{ $package->is_popular ? 'text-white/20' : 'text-secondary/20' }}">Fitur Utama</div>
                        <ul class="space-y-4">
                            @foreach(explode("\n", $package->features) as $feature)
                            @if(trim($feature))
                            <li class="flex items-start gap-3 text-sm font-bold {{ $package->is_popular ? 'text-white/80' : 'text-secondary/70' }}">
                                <svg class="w-5 h-5 flex-shrink-0 {{ $package->is_popular ? 'text-accent' : 'text-primary' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                <span>{{ $feature }}</span>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>

                    @auth
                        @php $hasAccess = auth()->user()->hasAccessTo($package); @endphp
                        @if($hasAccess)
                            <a href="{{ route('dashboard') }}" class="block text-center py-5 {{ $package->is_popular ? 'bg-primary text-white hover:bg-white hover:text-primary' : 'bg-secondary text-white hover:bg-primary' }} font-black rounded-[2rem] transition-all shadow-xl">
                                Masuk Dashboard
                            </a>
                        @else
                            <a href="{{ route('order.checkout', ['type' => 'paket', 'id' => $package->slug]) }}" class="block text-center py-5 {{ $package->is_popular ? 'bg-primary text-white hover:bg-white hover:text-primary' : 'bg-gray-50 text-secondary hover:bg-primary hover:text-white' }} font-black rounded-[2rem] transition-all shadow-sm">
                                Pilih Paket Ini
                            </a>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="block text-center py-5 {{ $package->is_popular ? 'bg-primary text-white hover:bg-white hover:text-primary' : 'bg-gray-50 text-secondary hover:bg-primary hover:text-white' }} font-black rounded-[2rem] transition-all shadow-sm">
                            Pilih Paket Ini
                        </a>
                    @endauth
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Preview -->
    <section class="py-32 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-black text-secondary mb-4 italic">Punya Pertanyaan?</h2>
                <p class="text-secondary/50 font-medium">Beberapa hal yang sering ditanyakan oleh calon juara.</p>
            </div>

            <div class="space-y-4" x-data="{ active: null }">
                <div class="border border-gray-100 rounded-3xl overflow-hidden transition-all" :class="active === 1 ? 'bg-gray-50 shadow-lg' : 'bg-white'">
                    <button @click="active = (active === 1 ? null : 1)" class="w-full px-8 py-6 text-left flex items-center justify-between font-black text-secondary hover:text-primary transition-colors">
                        Apakah bisa pindah paket setelah membeli?
                        <svg class="w-5 h-5 transition-transform duration-300" :class="active === 1 ? 'rotate-180 text-primary' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="2.5"/></svg>
                    </button>
                    <div x-show="active === 1" x-collapse x-cloak>
                        <div class="px-8 pb-8 text-secondary/60 font-medium leading-relaxed">
                            Ya, Anda bisa melakukan upgrade paket kapan saja dengan hanya membayar selisih harganya. Hubungi tim bantuan kami untuk proses yang lebih cepat.
                        </div>
                    </div>
                </div>

                <div class="border border-gray-100 rounded-3xl overflow-hidden transition-all" :class="active === 2 ? 'bg-gray-50 shadow-lg' : 'bg-white'">
                    <button @click="active = (active === 2 ? null : 2)" class="w-full px-8 py-6 text-left flex items-center justify-between font-black text-secondary hover:text-primary transition-colors">
                        Bagaimana metode pembayarannya?
                        <svg class="w-5 h-5 transition-transform duration-300" :class="active === 2 ? 'rotate-180 text-primary' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="2.5"/></svg>
                    </button>
                    <div x-show="active === 2" x-collapse x-cloak>
                        <div class="px-8 pb-8 text-secondary/60 font-medium leading-relaxed">
                            Kami mendukung berbagai metode pembayaran melalui Transfer Bank (Virtual Account), E-Wallet (Dana, OVO, ShopeePay), serta pembayaran tunai melalui Alfamart dan Indomaret di seluruh Indonesia.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
