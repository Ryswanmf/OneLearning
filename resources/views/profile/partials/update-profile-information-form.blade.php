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

    <form method="post" action="{{ route('profile.update') }}" class="space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="space-y-6">
            <!-- Profile Photo -->
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            x-ref="photo"
                            name="profile_photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-input-label for="photo" value="{{ __('Foto Profil') }}" class="text-[10px] font-black uppercase tracking-widest text-secondary/40 ml-1 mb-2" />

                <div class="flex items-center gap-6">
                    <!-- Current Profile Photo -->
                    <div class="relative" x-show="! photoPreview">
                        <div class="w-20 h-20 rounded-3xl bg-gray-50 border-2 border-dashed border-gray-100 flex items-center justify-center overflow-hidden group-hover:border-primary/30 transition-all">
                            @if($user->profile_photo_path)
                                <img src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="{{ $user->name }}" class="w-full h-full object-cover">
                            @else
                                <div class="flex flex-col items-center justify-center text-secondary/20">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- New Profile Photo Preview -->
                    <div class="relative" x-show="photoPreview" style="display: none;">
                        <span class="block w-20 h-20 rounded-3xl bg-cover bg-no-repeat bg-center border-2 border-primary/30"
                              x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>

                    <div class="space-y-2">
                        <button type="button" class="px-4 py-2 bg-white border border-gray-200 rounded-xl text-[10px] font-black uppercase tracking-widest text-secondary hover:bg-gray-50 transition-all shadow-sm" x-on:click.prevent="$refs.photo.click()">
                            {{ __('Pilih Foto Baru') }}
                        </button>

                        @if ($user->profile_photo_path)
                            <p class="text-[9px] font-bold text-secondary/30 uppercase tracking-tight">Format: JPG, PNG, WEBP (Maks. 2MB)</p>
                        @endif
                    </div>
                </div>

                <x-input-error for="profile_photo" class="mt-2" :messages="$errors->get('profile_photo')" />
            </div>

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
