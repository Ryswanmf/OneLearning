<x-guest-layout>
    @section('title', 'Daftar Akun - OneLearning')

    <div class="mb-6 text-center lg:text-left">
        <div class="flex justify-center lg:justify-start mb-6">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="OneLearning Logo" class="w-12 h-12 shadow-sm">
            </a>
        </div>
        <h2 class="text-3xl font-black text-secondary leading-tight tracking-tight mb-2">Mulai <span class="text-primary italic">Langkahmu</span>.</h2>
        <p class="text-xs font-semibold text-secondary/40 leading-relaxed">Daftar sekarang untuk akses penuh ribuan tryout berstandar nasional.</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4" @submit="loading = true">
        @csrf

        <div class="space-y-4">
            <div>
                <x-input-label for="name" value="Nama Lengkap" />
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus placeholder="Contoh: Muhammad Riswan" />
                <x-input-error :messages="$errors->get('name')" class="mt-1" />
            </div>

            <div>
                <x-input-label for="email" value="Alamat Email" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required placeholder="nama@email.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-1" />
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-1">
            <div x-data="{ show: false }">
                <x-input-label for="password" value="Kata Sandi" />
                <div class="relative">
                    <x-text-input id="password" ::type="show ? 'text' : 'password'" name="password" required placeholder="Min. 8" class="pr-10" />
                    <button type="button" @click="show = !show" class="absolute right-3 top-1/2 -translate-y-1/2 text-secondary/20 hover:text-primary transition-colors focus:outline-none">
                        <svg x-show="!show" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                        <svg x-show="show" style="display: none;" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.059 10.059 0 014.478-5.91m3.232-1.18A9.969 9.969 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.025 10.05 0 01-4.132 5.411m0 0L21 21m-2.101-2.101L3 3m12 9a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </button>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-1" />
            </div>

            <div x-data="{ show: false }">
                <x-input-label for="password_confirmation" value="Ulangi Sandi" />
                <div class="relative">
                    <x-text-input id="password_confirmation" ::type="show ? 'text' : 'password'" name="password_confirmation" required placeholder="Konfirmasi" class="pr-10" />
                    <button type="button" @click="show = !show" class="absolute right-3 top-1/2 -translate-y-1/2 text-secondary/20 hover:text-primary transition-colors focus:outline-none">
                        <svg x-show="!show" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                        <svg x-show="show" style="display: none;" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.059 10.059 0 014.478-5.91m3.232-1.18A9.969 9.969 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.025 10.05 0 01-4.132 5.411m0 0L21 21m-2.101-2.101L3 3m12 9a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </button>
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
            </div>
        </div>

        <div class="flex items-center gap-2 px-3 py-2.5 bg-gray-50 rounded-xl mt-2">
            <svg class="w-3.5 h-3.5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
            <p class="text-[9px] font-bold text-secondary/40 leading-tight">Data pribadi kamu terenkripsi aman.</p>
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full flex items-center justify-center h-14 bg-primary text-white font-black text-[11px] uppercase tracking-[0.2em] rounded-xl shadow-xl shadow-primary/10 hover:bg-secondary hover:shadow-secondary/20 transition-all active:scale-[0.98] group">
                Buat Akun Sekarang
                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
            </button>
            
            <p class="mt-6 text-center text-[11px] font-bold text-secondary/30">
                Sudah punya akun? 
                <a href="{{ route('login') }}" class="text-primary hover:text-secondary font-black transition-colors underline decoration-primary/20 underline-offset-4">Masuk Saja</a>
            </p>
        </div>
    </form>
</x-guest-layout>
