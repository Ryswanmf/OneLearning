@extends('layouts.admin')

@section('title', 'Ubah Tryout SMP - OneLearning')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.smp.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Ubah <span class="text-primary italic">Tryout SMP</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Perbarui parameter simulasi ujian <strong>{{ $tryout->name }}</strong>.</p>
        </div>
    </div>

    <form action="{{ route('admin.smp.update', $tryout->id) }}" method="POST" class="space-y-6">
        @csrf @method('PUT')
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="name" value="Nama Simulasi" />
                    <x-text-input id="name" name="name" type="text" :value="old('name', $tryout->name)" required />
                </div>
                <div class="space-y-2">
                    <x-input-label for="subject" value="Mata Pelajaran" />
                    <select id="subject" name="subject" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                        <option value="Matematika" {{ $tryout->subject == 'Matematika' ? 'selected' : '' }}>Matematika</option>
                        <option value="IPA" {{ $tryout->subject == 'IPA' ? 'selected' : '' }}>IPA (Ilmu Pengetahuan Alam)</option>
                        <option value="IPS" {{ $tryout->subject == 'IPS' ? 'selected' : '' }}>IPS (Ilmu Pengetahuan Sosial)</option>
                        <option value="Bahasa Indonesia" {{ $tryout->subject == 'Bahasa Indonesia' ? 'selected' : '' }}>Bahasa Indonesia</option>
                        <option value="Bahasa Inggris" {{ $tryout->subject == 'Bahasa Inggris' ? 'selected' : '' }}>Bahasa Inggris</option>
                        <option value="Campuran" {{ $tryout->subject == 'Campuran' ? 'selected' : '' }}>Campuran / Asesmen Nasional</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2">
                    <x-input-label for="question_count" value="Jumlah Soal" />
                    <x-text-input id="question_count" name="question_count" type="number" :value="old('question_count', $tryout->question_count)" required />
                </div>
                <div class="space-y-2">
                    <x-input-label for="duration_minutes" value="Durasi (Menit)" />
                    <x-text-input id="duration_minutes" name="duration_minutes" type="number" :value="old('duration_minutes', $tryout->duration_minutes)" required />
                </div>
            </div>

            <div class="space-y-2">
                <x-input-label for="status" value="Status" />
                <select id="status" name="status" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-xl h-12 px-4 font-bold text-xs transition-all">
                    <option value="draft" {{ $tryout->status == 'draft' ? 'selected' : '' }}>Draft (Simpan Saja)</option>
                    <option value="published" {{ $tryout->status == 'published' ? 'selected' : '' }}>Published (Tampilkan)</option>
                </select>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.smp.index') }}" class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Batal</a>
            <button type="submit" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all"> Simpan Perubahan </button>
        </div>
    </form>
</div>
@endsection
