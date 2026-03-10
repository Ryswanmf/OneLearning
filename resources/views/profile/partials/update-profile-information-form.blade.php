<section>
    <header class="mb-6">
        <h3 class="text-sm font-black text-secondary uppercase tracking-widest italic">Detail Akun</h3>
        <p class="mt-1 text-[10px] font-bold text-secondary/30 uppercase tracking-tight">
            Pastikan alamat email kamu aktif untuk menerima informasi penting.
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
        @csrf
        @method('patch')

        <div class="space-y-4">
            <div class="space-y-2">
                <x-input-label for="name" :value="__('Nama Lengkap')" class="text-[10px] font-black uppercase tracking-widest text-secondary/40 ml-1" />
                <x-text-input id="name" name="name" type="text" class="block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div class="space-y-2">
                <x-input-label for="email" :value="__('Alamat Email')" class="text-[10px] font-black uppercase tracking-widest text-secondary/40 ml-1" />
                <x-text-input id="email" name="email" type="email" class="block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div class="mt-4 p-4 bg-yellow-50 rounded-2xl border border-yellow-100">
                        <p class="text-[10px] font-bold text-yellow-700 uppercase tracking-tight">
                            {{ __('Email kamu belum diverifikasi.') }}

                            <button form="send-verification" class="ml-2 underline hover:text-yellow-900 transition-all">
                                {{ __('Klik di sini untuk kirim ulang email verifikasi.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 text-[10px] font-black text-green-600 uppercase">
                                {{ __('Link verifikasi baru telah dikirim ke email kamu.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>
        </div>

        <div class="flex items-center gap-4 pt-4">
            <button type="submit" class="px-8 py-4 bg-primary text-white font-black text-[10px] uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all active:scale-95">
                {{ __('Simpan Perubahan') }}
            </button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-[10px] font-black text-green-600 uppercase tracking-widest"
                >{{ __('Berhasil Disimpan.') }}</p>
            @endif
        </div>
    </form>
</section>
