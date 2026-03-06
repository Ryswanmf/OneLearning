@extends('layouts.admin')

@section('title', 'Ubah Langkah Pendaftaran - OneLearning')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.how-to-register.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl text-secondary hover:text-primary transition-all shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        </a>
        <div>
            <h2 class="text-2xl font-black text-secondary tracking-tight">Ubah <span class="text-primary italic">Langkah</span>.</h2>
            <p class="text-xs font-medium text-secondary/40 mt-1">Perbarui detail panduan pendaftaran.</p>
        </div>
    </div>

    <form action="{{ route('admin.how-to-register.update', $step->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf @method('PUT')
        <div class="bg-white p-10 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-3 space-y-2">
                    <x-input-label for="title" value="Judul Langkah" />
                    <x-text-input id="title" name="title" type="text" :value="old('title', $step->title)" required />
                </div>
                <div class="space-y-2">
                    <x-input-label for="step_number" value="Nomor Urut" />
                    <x-text-input id="step_number" name="step_number" type="number" :value="old('step_number', $step->step_number)" required />
                </div>
            </div>

            <div class="space-y-2">
                <x-input-label for="description" value="Penjelasan Singkat" />
                <textarea id="description" name="description" rows="4" class="block w-full bg-gray-50/50 border-gray-100 focus:border-primary focus:ring-primary/10 rounded-2xl p-6 font-medium text-sm transition-all">{{ old('description', $step->description) }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <x-input-label for="image" value="Ganti Ilustrasi / Screenshot" />
                    @if($step->image)
                        <div class="w-32 h-20 rounded-lg overflow-hidden border border-gray-100 mb-2">
                            <img src="{{ asset('storage/'.$step->image) }}" class="w-full h-full object-cover">
                        </div>
                    @endif
                    <input type="file" id="image" name="image" class="block w-full text-xs text-secondary/40 file:mr-4 file:py-2.5 file:px-6 file:rounded-xl file:border-0 file:text-[10px] file:font-black file:uppercase file:tracking-widest file:bg-primary/10 file:text-primary hover:file:bg-primary/20 transition-all cursor-pointer">
                </div>
                <div class="flex items-center pt-8">
                    <label class="relative inline-flex items-center cursor-pointer group">
                        <input type="checkbox" name="is_active" value="1" class="sr-only peer" {{ $step->is_active ? 'checked' : '' }}>
                        <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                        <span class="ms-3 text-xs font-black text-secondary uppercase tracking-widest">Status Aktif</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.how-to-register.index') }}" class="px-8 py-4 text-xs font-black text-secondary/40 uppercase tracking-widest hover:text-secondary transition-all">Batal</a>
            <button type="submit" class="px-10 py-4 bg-primary text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-primary/20 hover:bg-secondary transition-all"> Simpan Perubahan </button>
        </div>
    </form>
</div>
@endsection
