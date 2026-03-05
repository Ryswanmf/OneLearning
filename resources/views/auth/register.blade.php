<x-guest-layout>
    @section('title', 'Daftar Akun - OneLearning')

    <div class="mb-6 text-center lg:text-left">
        <h2 class="text-3xl font-black text-secondary leading-tight tracking-tight mb-2">Mulai <span class="text-primary italic">Langkahmu</span>.</h2>
        <p class="text-xs font-semibold text-secondary/40 leading-relaxed">Daftar sekarang untuk akses penuh ribuan tryout berstandar nasional.</p>
    </div>

    <!-- Social Login Section -->
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
        <span class="text-[8px] font-black text-secondary/20 uppercase tracking-[0.4em]">Atau Data Diri</span>
        <div class="h-px bg-gray-100 flex-1"></div>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
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
            <div>
                <x-input-label for="password" value="Kata Sandi" />
                <x-text-input id="password" type="password" name="password" required placeholder="Min. 8 karakter" />
                <x-input-error :messages="$errors->get('password')" class="mt-1" />
            </div>

            <div>
                <x-input-label for="password_confirmation" value="Ulangi Sandi" />
                <x-text-input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Konfirmasi" />
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
