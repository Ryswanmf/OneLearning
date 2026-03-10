<x-guest-layout>
    @section('title', 'Masuk Akun - OneLearning')

    <div class="mb-8 text-center lg:text-left">
        <div class="flex justify-center lg:justify-start mb-6">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="OneLearning Logo" class="w-12 h-12 shadow-sm">
            </a>
        </div>
        <h2 class="text-3xl font-black text-secondary leading-tight tracking-tight mb-2">Selamat <span class="text-primary italic">Datang</span>.</h2>
        <p class="text-xs font-semibold text-secondary/40 leading-relaxed">Masuk untuk melanjutkan tryout dan akses analisis IRT terbarumu.</p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-4" @submit="loading = true">
        @csrf

        <div>
            <x-input-label for="email" value="Alamat Email" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="nama@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <div x-data="{ showPassword: false }">
            <div class="flex justify-between items-center mb-1">
                <x-input-label for="password" value="Kata Sandi" class="mb-0" />
                @if (Route::has('password.request'))
                    <a class="text-[8px] font-black text-primary hover:text-secondary uppercase tracking-widest transition-colors" href="{{ route('password.request') }}">Lupa?</a>
                @endif
            </div>
            <div class="relative">
                <x-text-input id="password" ::type="showPassword ? 'text' : 'password'" name="password" required placeholder="••••••••" class="pr-12" />
                <button type="button" @click="showPassword = !showPassword" class="absolute right-4 top-1/2 -translate-y-1/2 text-secondary/20 hover:text-primary transition-colors focus:outline-none">
                    <!-- Eye Open -->
                    <svg x-show="!showPassword" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                    <!-- Eye Closed -->
                    <svg x-show="showPassword" style="display: none;" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.059 10.059 0 014.478-5.91m3.232-1.18A9.969 9.969 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.025 10.05 0 01-4.132 5.411m0 0L21 21m-2.101-2.101L3 3m12 9a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

        <div class="flex items-center ml-1">
            <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                <input id="remember_me" type="checkbox" class="rounded-md border-gray-200 text-primary shadow-sm focus:ring-primary/20 h-4 w-4 transition-all cursor-pointer" name="remember">
                <span class="ms-2.5 text-[10px] font-black text-secondary/40 group-hover:text-secondary transition-colors uppercase tracking-wide">Ingat saya</span>
            </label>
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full flex items-center justify-center h-14 bg-secondary text-white font-black text-[11px] uppercase tracking-[0.2em] rounded-xl shadow-xl shadow-secondary/10 hover:bg-primary hover:shadow-primary/20 transition-all active:scale-[0.98] group">
                Masuk Dashboard
                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
            </button>
            
            <p class="mt-8 text-center text-[11px] font-bold text-secondary/30">
                Belum punya akun? 
                <a href="{{ route('register') }}" class="text-primary hover:text-secondary font-black transition-colors underline decoration-primary/20 underline-offset-4">Daftar Sekarang</a>
            </p>
        </div>
    </form>
</x-guest-layout>
