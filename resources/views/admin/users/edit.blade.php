@extends('layouts.admin')

@section('title', 'Ubah User - OneLearning')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.users.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Ubah <span class="text-primary italic">Profil User</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Perbarui informasi akun <strong>{{ $user->name }}</strong>.</p>
        </div>
    </div>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="space-y-6">
        @csrf @method('PUT')
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="name" value="Nama Lengkap" />
                    <x-text-input id="name" name="name" type="text" :value="old('name', $user->name)" required />
                </div>
                <div class="space-y-2">
                    <x-input-label for="email" value="Alamat Email" />
                    <x-text-input id="email" name="email" type="email" :value="old('email', $user->email)" required />
                </div>
            </div>

            <div class="p-6 bg-primary/5 rounded-2xl border border-primary/10">
                <p class="text-[10px] font-black text-primary uppercase tracking-widest mb-4">Ganti Password (Kosongkan jika tidak diubah)</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <x-input-label for="password" value="Password Baru" />
                        <x-text-input id="password" name="password" type="password" />
                    </div>
                    <div class="space-y-2">
                        <x-input-label for="password_confirmation" value="Konfirmasi Password" />
                        <x-text-input id="password_confirmation" name="password_confirmation" type="password" />
                    </div>
                </div>
            </div>

            <div class="space-y-2">
                <x-input-label for="role" value="Peran Akun (Role)" />
                <select id="role" name="role" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User (Siswa)</option>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Administrator</option>
                </select>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.users.index') }}" class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Batal</a>
            <button type="submit" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all"> Simpan Perubahan </button>
        </div>
    </form>
</div>
@endsection
