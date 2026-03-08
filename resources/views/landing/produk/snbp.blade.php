@extends('layouts.app')

@section('title', 'Analisis SNBP - Prediksi Kelulusan Akurat | OneLearning')

@section('content')
    <section class="relative pt-12 pb-20 overflow-hidden bg-white" x-data="snbpAnalyzer()">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="flex-1 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-accent/20 text-secondary font-black text-[10px] uppercase tracking-widest rounded-lg mb-6">
                        Teknologi Analisis IRT & Big Data
                    </div>
                    <h1 class="text-4xl md:text-6xl font-black text-secondary mb-8 leading-tight">
                        Analisis <span class="text-primary italic">Peluang SNBP</span> Berbasis Data
                    </h1>
                    <p class="text-lg text-secondary/60 mb-10 leading-relaxed font-medium">
                        Bandingkan nilai rapormu dengan data daya tampung dan peminat di {{ $universities->count() }} Perguruan Tinggi Negeri favorit untuk strategi kelulusan maksimal.
                    </p>
                    
                    <!-- Analysis Form -->
                    <div class="bg-gray-50 p-8 rounded-[2.5rem] border border-gray-100 shadow-sm mb-10 text-left space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="text-[10px] font-black text-secondary/40 uppercase tracking-widest ml-1 mb-2 block">Pilih PTN Impian</label>
                                <select x-model="selectedUniversity" @change="fetchMajors()" 
                                        class="w-full bg-white border-gray-200 rounded-2xl h-14 px-5 font-bold text-secondary text-sm focus:ring-primary focus:border-primary">
                                    <option value="">-- Pilih Universitas --</option>
                                    @foreach($universities as $uni)
                                        <option value="{{ $uni->university_name }}">{{ $uni->university_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="text-[10px] font-black text-secondary/40 uppercase tracking-widest ml-1 mb-2 block">Pilih Program Studi</label>
                                <select x-model="selectedMajor" :disabled="!majors.length"
                                        class="w-full bg-white border-gray-200 rounded-2xl h-14 px-5 font-bold text-secondary text-sm focus:ring-primary focus:border-primary disabled:opacity-50">
                                    <option value="">-- Pilih Jurusan --</option>
                                    <template x-for="major in majors" :key="major.id">
                                        <option :value="major.id" x-text="major.major_name"></option>
                                    </template>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="text-[10px] font-black text-secondary/40 uppercase tracking-widest ml-1 mb-2 block">Rata-rata Nilai Rapor (Semester 1-5)</label>
                            <div class="relative">
                                <input type="number" x-model="grade" placeholder="Contoh: 88.5" step="0.1" max="100" min="0"
                                       class="w-full bg-white border-gray-200 rounded-2xl h-14 px-5 font-bold text-secondary text-sm focus:ring-primary focus:border-primary">
                                <div class="absolute right-5 top-1/2 -translate-y-1/2 text-secondary/20 font-black text-xs">SKALA 100</div>
                            </div>
                        </div>

                        <button @click="performAnalysis()" :disabled="!selectedMajor || !grade || loading"
                                class="w-full flex items-center justify-center gap-3 px-10 py-5 bg-secondary text-white font-black rounded-2xl hover:bg-primary transition-all shadow-xl active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed">
                            <template x-if="!loading">
                                <div class="flex items-center gap-3">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-width="2.5"/></svg>
                                    Mulai Analisis Sekarang
                                </div>
                            </template>
                            <template x-if="loading">
                                <div class="flex items-center gap-3">
                                    <svg class="animate-spin h-5 w-5 text-white" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                                    Memproses Data...
                                </div>
                            </template>
                        </button>
                    </div>
                </div>

                <div class="flex-1 w-full relative">
                    <div class="absolute -inset-4 bg-primary/5 rounded-[3rem] blur-3xl -rotate-3"></div>
                    <div class="relative bg-white p-8 md:p-12 rounded-[3rem] border border-gray-100 shadow-2xl overflow-hidden group min-h-[400px] flex flex-col">
                        
                        <!-- Empty State -->
                        <div x-show="!result" class="flex-1 flex flex-col items-center justify-center text-center space-y-6">
                            <div class="w-20 h-20 bg-gray-50 rounded-3xl flex items-center justify-center text-secondary/10">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-width="2"/></svg>
                            </div>
                            <div>
                                <h3 class="font-black text-secondary/40 text-lg">Siap Menganalisis?</h3>
                                <p class="text-sm text-secondary/20 font-medium max-w-xs mx-auto">Isi data di samping untuk melihat probabilitas kelulusanmu.</p>
                            </div>
                        </div>

                        <!-- Result State -->
                        <div x-show="result" x-cloak class="flex-1 animate-fade-up">
                            <div class="flex justify-between items-center mb-10">
                                <h3 class="font-black text-secondary text-2xl italic">Hasil Analisis</h3>
                                <span class="px-4 py-1.5 bg-primary/10 text-primary text-[10px] font-black uppercase tracking-widest rounded-full" x-text="result.status"></span>
                            </div>
                            
                            <div class="space-y-10">
                                <div>
                                    <div class="flex justify-between items-end mb-4">
                                        <div>
                                            <div class="text-xl font-black text-secondary" x-text="result.major.major_name"></div>
                                            <div class="text-[11px] text-secondary/40 font-bold uppercase tracking-widest" x-text="result.major.university_name"></div>
                                        </div>
                                        <div class="text-primary font-black text-4xl italic" x-text="result.chance + '%'"></div>
                                    </div>
                                    <div class="w-full bg-gray-100 h-4 rounded-full overflow-hidden shadow-inner">
                                        <div class="h-full rounded-full transition-all duration-1000 shadow-lg" 
                                             :class="result.chance >= 70 ? 'bg-green-500' : (result.chance >= 40 ? 'bg-yellow-500' : 'bg-red-500')"
                                             :style="`width: ${result.chance}%`""></div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 gap-4">
                                    <div class="p-5 bg-gray-50 rounded-2xl border border-gray-100">
                                        <div class="text-[9px] font-black text-secondary/30 uppercase tracking-widest mb-1">Daya Tampung</div>
                                        <div class="text-lg font-black text-secondary" x-text="result.major.capacity"></div>
                                    </div>
                                    <div class="p-5 bg-gray-50 rounded-2xl border border-gray-100">
                                        <div class="text-[9px] font-black text-secondary/30 uppercase tracking-widest mb-1">Peminat</div>
                                        <div class="text-lg font-black text-secondary" x-text="result.major.applicants"></div>
                                    </div>
                                </div>

                                <div class="p-6 bg-primary text-white rounded-3xl shadow-xl shadow-primary/20 relative overflow-hidden">
                                    <div class="relative z-10">
                                        <h4 class="text-xs font-black uppercase tracking-widest mb-2">Rekomendasi Strategi:</h4>
                                        <p class="text-sm font-medium opacity-90 leading-relaxed" x-text="getRecommendationText()"></p>
                                    </div>
                                    <div class="absolute -right-4 -bottom-4 w-20 h-20 bg-white/10 rounded-full blur-xl"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Decoration -->
                        <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-primary/5 rounded-full group-hover:scale-150 transition-transform duration-1000"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    function snbpAnalyzer() {
        return {
            selectedUniversity: '',
            selectedMajor: '',
            grade: '',
            majors: [],
            loading: false,
            result: null,

            async fetchMajors() {
                if (!this.selectedUniversity) {
                    this.majors = [];
                    return;
                }
                try {
                    const res = await fetch(`{{ route('produk.snbp.get-majors') }}?university=${encodeURIComponent(this.selectedUniversity)}`);
                    this.majors = await res.json();
                    this.selectedMajor = '';
                } catch (e) {
                    console.error("Gagal mengambil data jurusan:", e);
                }
            },

            async performAnalysis() {
                this.loading = true;
                this.result = null;

                try {
                    const res = await fetch("{{ route('produk.snbp.analyze') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            major_id: this.selectedMajor,
                            grade: this.grade
                        })
                    });
                    
                    const data = await res.json();
                    if (data.success) {
                        setTimeout(() => {
                            this.result = data;
                            this.loading = false;
                        }, 800);
                    }
                } catch (e) {
                    alert('Gagal menganalisis data. Coba lagi nanti.');
                    this.loading = false;
                }
            },

            getRecommendationText() {
                if (!this.result) return '';
                const chance = this.result.chance;
                if (chance >= 80) return "Peluang kamu sangat aman. Pertahankan nilai dan fokus pada persiapan sertifikat pendukung untuk memperkuat posisi.";
                if (chance >= 60) return "Peluang cukup baik, namun persaingan sangat ketat. Pastikan kamu memiliki prestasi non-akademik sebagai nilai tambah.";
                if (chance >= 40) return "Posisi kamu beresiko. Disarankan untuk mencari alternatif jurusan dengan passing grade yang lebih rendah atau tingkatkan nilai di tryout SNBT.";
                return "Sangat kompetitif. Kami menyarankan untuk fokus penuh pada persiapan jalur SNBT (UTBK) untuk mengamankan kursi di PTN ini.";
            }
        }
    }
    </script>
@endsection
