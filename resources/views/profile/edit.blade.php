@extends('layouts.app')

@section('title', 'Edit Profil - OneLearning')

@section('content')
<div class="min-h-screen bg-[#F8FAFC] py-20 overflow-hidden relative">
    <!-- Background Decor -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-[100px] -mr-64 -mt-64 animate-float"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-secondary/5 rounded-full blur-[80px] -ml-48 -mb-48 animate-float" style="animation-delay: 2s"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header Section -->
        <div class="mb-12 text-center animate-fade-up">
            <h1 class="text-4xl md:text-5xl font-black text-secondary tracking-tight italic mb-4">Pengaturan <span class="text-primary not-italic">Profil</span></h1>
            <p class="text-secondary/40 font-bold uppercase tracking-widest text-[10px]">Perbarui informasi akun dan keamanan kamu</p>
        </div>

        <div class="space-y-10 animate-fade-up" style="animation-delay: 100ms">
            <!-- Update Profile Information -->
            <div class="bg-white p-8 md:p-12 rounded-[3rem] border border-gray-100 shadow-xl shadow-secondary/5 relative overflow-hidden group">
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-primary/5 rounded-full blur-2xl group-hover:bg-primary/10 transition-all duration-700"></div>
                
                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-10">
                        <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-black text-secondary italic">Informasi <span class="text-primary not-italic">Dasar</span></h2>
                            <p class="text-[9px] font-bold text-secondary/30 uppercase tracking-widest mt-1">Nama dan alamat email terdaftar</p>
                        </div>
                    </div>

                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <!-- Update Password -->
            <div class="bg-white p-8 md:p-12 rounded-[3rem] border border-gray-100 shadow-xl shadow-secondary/5 relative overflow-hidden group">
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-secondary/5 rounded-full blur-2xl group-hover:bg-secondary/10 transition-all duration-700"></div>
                
                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-10">
                        <div class="w-12 h-12 bg-secondary/10 rounded-2xl flex items-center justify-center text-secondary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 00-2 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-black text-secondary italic">Keamanan <span class="text-primary not-italic">Akun</span></h2>
                            <p class="text-[9px] font-bold text-secondary/30 uppercase tracking-widest mt-1">Perbarui kata sandi secara berkala</p>
                        </div>
                    </div>

                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <!-- Delete User Account -->
            <div class="bg-white p-8 md:p-12 rounded-[3rem] border border-red-50 shadow-xl shadow-red-900/5 relative overflow-hidden group border-dashed">
                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-10 text-red-500">
                        <div class="w-12 h-12 bg-red-50 rounded-2xl flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-black italic">Hapus <span class="not-italic">Akun</span></h2>
                            <p class="text-[9px] font-bold text-red-500/30 uppercase tracking-widest mt-1">Tindakan ini tidak dapat dibatalkan</p>
                        </div>
                    </div>

                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
