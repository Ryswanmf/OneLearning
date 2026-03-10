<section class="space-y-6">
    <header>
        <h3 class="text-sm font-black text-red-500 uppercase tracking-widest italic">Hapus Akun Permanen</h3>
        <p class="mt-1 text-[10px] font-bold text-secondary/30 uppercase tracking-tight">
            Setelah akun kamu dihapus, semua data dan riwayat tryout akan hilang selamanya.
        </p>
    </header>

    <button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="px-8 py-3 bg-red-50 text-red-500 border border-red-100 font-black text-[10px] uppercase tracking-widest rounded-2xl hover:bg-red-500 hover:text-white transition-all active:scale-95"
    >{{ __('Hapus Akun Saya') }}</button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-10">
            @csrf
            @method('delete')

            <h2 class="text-xl font-black text-secondary italic uppercase tracking-tight">
                {{ __('Apakah kamu yakin?') }}
            </h2>

            <p class="mt-4 text-sm font-medium text-secondary/50 leading-relaxed">
                {{ __('Tindakan ini tidak dapat dibatalkan. Masukkan kata sandi kamu untuk mengonfirmasi bahwa kamu ingin menghapus akun secara permanen.') }}
            </p>

            <div class="mt-8 space-y-2">
                <x-input-label for="password" value="{{ __('Kata Sandi') }}" class="sr-only" />
                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="block w-full"
                    placeholder="{{ __('Masukkan Kata Sandi Kamu') }}"
                />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-10 flex justify-end gap-4">
                <button type="button" x-on:click="$dispatch('close')" class="px-6 py-3 text-[10px] font-black text-secondary/30 uppercase tracking-widest hover:text-secondary transition-all">
                    {{ __('Batal') }}
                </button>

                <button type="submit" class="px-10 py-3 bg-red-500 text-white font-black text-[10px] uppercase tracking-widest rounded-xl shadow-lg shadow-red-500/20 hover:bg-red-600 transition-all active:scale-95">
                    {{ __('Ya, Hapus Akun') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
