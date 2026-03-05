<x-guest-layout>
    @section('title', 'Masuk Akun - OneLearning')

    <div class="mb-8 text-center lg:text-left">
        <h2 class="text-3xl font-black text-secondary leading-tight tracking-tight mb-2">Selamat <span class="text-primary italic">Datang</span>.</h2>
        <p class="text-xs font-semibold text-secondary/40 leading-relaxed">Masuk untuk melanjutkan tryout dan akses analisis IRT terbarumu.</p>
    </div>

    <!-- Social Login -->
    <div class="grid grid-cols-2 gap-3 mb-6">
        <a href="#" class="flex items-center justify-center gap-2.5 px-4 py-3 border border-gray-100 rounded-xl hover:bg-gray-50 transition-all group">
            <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-4 h-4" alt="Google">
            <span class="text-[9px] font-black text-secondary uppercase tracking-widest">Google</span>
        </a>
        <a href="#" class="flex items-center justify-center gap-2.5 px-4 py-3 border border-gray-100 rounded-xl hover:bg-gray-50 transition-all group">
            <img src="https://www.svgrepo.com/show/442935/apple-v2.svg" class="w-4 h-4" alt="Apple">
            <span class="text-[9px] font-black text-secondary uppercase tracking-widest">Apple ID</span>
        </a>
    </div>

    <div class="relative flex items-center gap-3 mb-6">
        <div class="h-px bg-gray-100 flex-1"></div>
        <span class="text-[8px] font-black text-secondary/20 uppercase tracking-[0.4em]">Atau Email</span>
        <div class="h-px bg-gray-100 flex-1"></div>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
            <x-input-label for="email" value="Alamat Email" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="nama@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <div>
            <div class="flex justify-between items-center mb-1">
                <x-input-label for="password" value="Kata Sandi" class="mb-0" />
                @if (Route::has('password.request'))
                    <a class="text-[8px] font-black text-primary hover:text-secondary uppercase tracking-widest transition-colors" href="{{ route('password.request') }}">Lupa?</a>
                @endif
            </div>
            <x-text-input id="password" type="password" name="password" required placeholder="••••••••" />
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
