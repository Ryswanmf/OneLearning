@extends('layouts.admin')

@section('title', 'Tambah User - OneLearning')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.users.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Tambah <span class="text-primary italic">User Baru</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Daftarkan akun admin atau siswa secara manual.</p>
        </div>
    </div>

    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <!-- Profile Photo -->
            <div x-data="{photoName: null, photoPreview: null}" class="space-y-4">
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

                <x-input-label for="photo" value="Foto Profil" />

                <div class="flex items-center gap-6">
                    <div class="relative" x-show="! photoPreview">
                        <div class="w-20 h-20 rounded-3xl bg-gray-50 border-2 border-dashed border-gray-100 flex items-center justify-center overflow-hidden">
                            <svg class="w-8 h-8 text-secondary/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        </div>
                    </div>

                    <div class="relative" x-show="photoPreview" style="display: none;">
                        <span class="block w-20 h-20 rounded-3xl bg-cover bg-no-repeat bg-center border-2 border-primary/30"
                              x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>

                    <button type="button" class="px-4 py-2 bg-white border border-gray-200 rounded-xl text-[10px] font-black uppercase tracking-widest text-secondary hover:bg-gray-50 transition-all shadow-sm" x-on:click.prevent="$refs.photo.click()">
                        Pilih Foto
                    </button>
                </div>
                <x-input-error for="profile_photo" class="mt-2" :messages="$errors->get('profile_photo')" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="name" value="Nama Lengkap" />
                    <x-text-input id="name" name="name" type="text" :value="old('name')" required />
                </div>
                <div class="space-y-2">
                    <x-input-label for="email" value="Alamat Email" />
                    <x-text-input id="email" name="email" type="email" :value="old('email')" required />
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="password" value="Password" />
                    <x-text-input id="password" name="password" type="password" required />
                </div>
                <div class="space-y-2">
                    <x-input-label for="password_confirmation" value="Konfirmasi Password" />
                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" required />
                </div>
            </div>

            <div class="space-y-2">
                <x-input-label for="role" value="Peran Akun (Role)" />
                <select id="role" name="role" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                    <option value="user">User (Siswa)</option>
                    <option value="admin">Administrator</option>
                </select>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.users.index') }}" class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Batal</a>
            <button type="submit" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all"> Simpan Akun </button>
        </div>
    </form>
</div>
@endsection
