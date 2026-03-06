@extends('layouts.admin')

@section('title', 'Ubah Data SNBP - OneLearning')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.snbp.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Ubah <span class="text-primary italic">Prodi SNBP</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Perbarui data untuk prodi <strong>{{ $major->major_name }}</strong>.</p>
        </div>
    </div>

    <form action="{{ route('admin.snbp.update', $major->id) }}" method="POST" class="space-y-6">
        @csrf @method('PUT')
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="university_name" value="Nama Universitas" />
                    <x-text-input id="university_name" name="university_name" type="text" :value="old('university_name', $major->university_name)" required />
                </div>
                <div class="space-y-2">
                    <x-input-label for="major_name" value="Nama Program Studi" />
                    <x-text-input id="major_name" name="major_name" type="text" :value="old('major_name', $major->major_name)" required />
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="space-y-2">
                    <x-input-label for="category" value="Kelompok" />
                    <select id="category" name="category" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                        <option value="SAINTEK" {{ $major->category == 'SAINTEK' ? 'selected' : '' }}>SAINTEK</option>
                        <option value="SOSHUM" {{ $major->category == 'SOSHUM' ? 'selected' : '' }}>SOSHUM</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <x-input-label for="capacity" value="Daya Tampung" />
                    <x-text-input id="capacity" name="capacity" type="number" :value="old('capacity', $major->capacity)" required />
                </div>
                <div class="space-y-2">
                    <x-input-label for="applicants" value="Peminat Lalu" />
                    <x-text-input id="applicants" name="applicants" type="number" :value="old('applicants', $major->applicants)" required />
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="passing_grade" value="Estimasi Passing Grade (%)" />
                    <x-text-input id="passing_grade" name="passing_grade" type="number" step="0.01" :value="old('passing_grade', $major->passing_grade)" />
                </div>
                <div class="flex items-center pt-8">
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="is_active" value="1" class="sr-only peer" {{ $major->is_active ? 'checked' : '' }}>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                        <span class="ms-3 text-xs font-black text-secondary uppercase tracking-widest">Status Aktif</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.snbp.index') }}" class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Batal</a>
            <button type="submit" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all"> Simpan Perubahan </button>
        </div>
    </form>
</div>
@endsection
