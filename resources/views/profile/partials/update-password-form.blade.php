<section>
    <header class="mb-6">
        <h3 class="text-sm font-black text-secondary uppercase tracking-widest italic">Ubah Kata Sandi</h3>
        <p class="mt-1 text-[10px] font-bold text-secondary/30 uppercase tracking-tight">
            Gunakan kata sandi yang kuat dan unik agar akun kamu tetap aman.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
        @csrf
        @method('put')

        <div class="space-y-4">
            <div class="space-y-2">
                <x-input-label for="update_password_current_password" :value="__('Kata Sandi Saat Ini')" class="text-[10px] font-black uppercase tracking-widest text-secondary/40 ml-1" />
                <x-text-input id="update_password_current_password" name="current_password" type="password" class="block w-full" autocomplete="current-password" placeholder="••••••••" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>

            <div class="space-y-2">
                <x-input-label for="update_password_password" :value="__('Kata Sandi Baru')" class="text-[10px] font-black uppercase tracking-widest text-secondary/40 ml-1" />
                <x-text-input id="update_password_password" name="password" type="password" class="block w-full" autocomplete="new-password" placeholder="Minimal 8 karakter" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div class="space-y-2">
                <x-input-label for="update_password_password_confirmation" :value="__('Konfirmasi Kata Sandi Baru')" class="text-[10px] font-black uppercase tracking-widest text-secondary/40 ml-1" />
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="block w-full" autocomplete="new-password" placeholder="Ulangi kata sandi" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center gap-4 pt-4">
            <button type="submit" class="px-8 py-4 bg-secondary text-white font-black text-[10px] uppercase tracking-widest rounded-2xl shadow-xl shadow-secondary/20 hover:bg-primary transition-all active:scale-95">
                {{ __('Perbarui Password') }}
            </button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-[10px] font-black text-green-600 uppercase tracking-widest"
                >{{ __('Password Diperbarui.') }}</p>
            @endif
        </div>
    </form>
</section>
