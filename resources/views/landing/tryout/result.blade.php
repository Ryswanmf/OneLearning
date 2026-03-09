@extends('layouts.app')

@section('title', 'Hasil - ' . $paket_belajar->name)

@section('content')
<div class="min-h-screen bg-[#F8FAFC] pb-20 pt-4" x-data="resultPage()">
    <!-- Header Section -->
    <div class="bg-secondary pt-16 pb-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="px-4 py-1.5 bg-primary/10 text-primary rounded-full text-[10px] font-black uppercase tracking-[0.3em] border border-primary/10 mb-6 inline-block">Evaluation Report</span>
            <h1 class="text-4xl md:text-5xl font-black text-white italic tracking-tight mb-4">
                {{ $paket_belajar->name }}
            </h1>
            <p class="text-white/40 text-sm font-medium uppercase tracking-[0.2em]">Skor Akhir Kamu</p>
            <div class="mt-6 flex items-center justify-center gap-4">
                <div class="text-7xl md:text-8xl font-black text-primary italic leading-none">{{ round($submission->score) }}</div>
                <div class="h-16 w-px bg-white/10 hidden md:block"></div>
                <div class="hidden md:block text-left">
                    <div class="text-white font-black text-xl italic uppercase leading-none mb-1">Point</div>
                    <div class="text-white/30 text-[10px] font-bold uppercase tracking-widest">IRT Standardized</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 relative z-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- LEFT SIDEBAR -->
            <div class="lg:col-span-4 space-y-6">
                <div class="sticky top-24 space-y-6">
                    <!-- Performance Quick Filter -->
                    <div class="bg-white p-6 rounded-[2.5rem] border border-gray-100 shadow-xl shadow-secondary/5">
                        <h3 class="text-[9px] font-black text-secondary uppercase tracking-[0.3em] mb-6 italic flex items-center gap-2">
                            <span class="w-1 h-3 bg-primary rounded-full"></span> Quick Analysis
                        </h3>
                        
                        <div class="grid grid-cols-3 gap-2">
                            <button @click="filter = (filter === 'correct' ? 'all' : 'correct')" 
                                    :class="filter === 'correct' ? 'bg-green-600 text-white shadow-lg' : 'bg-green-50 text-green-600 border-green-100'" 
                                    class="flex flex-col items-center p-3 rounded-xl transition-all border group">
                                <span class="text-lg font-black italic">{{ $stats['correct'] }}</span>
                                <span class="text-[7px] font-black uppercase tracking-widest opacity-60">Benar</span>
                            </button>
                            <button @click="filter = (filter === 'wrong' ? 'all' : 'wrong')" 
                                    :class="filter === 'wrong' ? 'bg-red-600 text-white shadow-lg' : 'bg-red-50 text-red-600 border-red-100'" 
                                    class="flex flex-col items-center p-3 rounded-xl transition-all border">
                                <span class="text-xl font-black italic">{{ $stats['wrong'] }}</span>
                                <span class="text-[7px] font-black uppercase tracking-widest opacity-60">Salah</span>
                            </button>
                            <button @click="filter = (filter === 'empty' ? 'all' : 'empty')" 
                                    :class="filter === 'empty' ? 'bg-gray-700 text-white shadow-lg' : 'bg-gray-50 text-gray-500 border-gray-200'" 
                                    class="flex flex-col items-center p-3 rounded-xl transition-all border">
                                <span class="text-xl font-black italic">{{ $stats['empty'] }}</span>
                                <span class="text-[7px] font-black uppercase tracking-widest opacity-60">Kosong</span>
                            </button>
                        </div>
                    </div>

                    <!-- Smart Question Map -->
                    <div class="bg-white p-6 rounded-[2.5rem] border border-gray-100 shadow-xl">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-[9px] font-black text-secondary uppercase tracking-[0.3em] italic">Question Map</h3>
                            <button @click="filter = 'all'" class="text-[8px] font-black text-primary uppercase tracking-widest bg-primary/5 px-2 py-1 rounded-md hover:bg-primary hover:text-white transition-all">Clear</button>
                        </div>
                        
                        <div class="grid grid-cols-6 gap-2">
                            @foreach($questions as $index => $q)
                            @php
                                $userAns = $userAnswers['q' . $q->id] ?? null;
                                $status = $userAns === $q->correct_answer ? 'correct' : ($userAns ? 'wrong' : 'empty');
                            @endphp
                            <a href="#q-{{ $index + 1 }}" 
                               @click.prevent="scrollToQuestion({{ $index + 1 }})"
                               x-show="filter === 'all' || filter === '{{ $status }}'"
                               class="aspect-square rounded-lg flex items-center justify-center text-[10px] font-black transition-all hover:scale-110 shadow-sm border-2
                               {{ $status === 'correct' ? 'bg-green-500 border-green-600 text-white' : ($status === 'wrong' ? 'bg-red-500 border-red-600 text-white' : 'bg-gray-400 border-gray-500 text-white') }}">
                                {{ $index + 1 }}
                            </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Certificate Action -->
                    <div class="bg-primary p-8 rounded-[2.5rem] text-white relative overflow-hidden group shadow-2xl animate-fade-up">
                        <div class="absolute inset-0 bg-secondary/10 mix-blend-overlay"></div>
                        <div class="relative z-10 text-center">
                            <h4 class="text-sm font-black italic mb-1 uppercase tracking-tight">Sertifikat</h4>
                            <p class="text-white/60 text-[8px] mb-6 uppercase tracking-widest">Download Achievement</p>
                            <a href="{{ route('tryout.certificate', [$type, $id]) }}" target="_blank" class="w-full py-4 bg-white text-primary text-center font-black text-[10px] uppercase tracking-[0.3em] rounded-xl hover:bg-secondary hover:text-white transition-all flex items-center justify-center gap-3">
                                Download PDF
                            </a>
                        </div>
                    </div>

                    <!-- Back to Dashboard -->
                    <div class="animate-fade-up" style="animation-delay: 100ms">
                        <a href="{{ route('dashboard') }}" class="w-full py-5 bg-gray-50 text-secondary text-center font-black text-[10px] uppercase tracking-[0.2em] rounded-2xl hover:bg-secondary hover:text-white transition-all flex items-center justify-center gap-3 border border-gray-100 shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                            Kembali ke Dashboard
                        </a>
                    </div>
                </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="lg:col-span-8 space-y-8">
                
                <!-- Topic Analysis Card -->
                <div class="bg-white rounded-[2.5rem] border border-gray-100 shadow-sm p-10 animate-fade-up">
                    <div class="flex items-center justify-between mb-10">
                        <div>
                            <h3 class="text-2xl font-black text-secondary italic">Analisis <span class="text-primary not-italic">Materi</span></h3>
                            <p class="text-secondary/40 text-[10px] font-black uppercase tracking-widest mt-1">Evaluasi penguasaan materi berdasarkan topik soal</p>
                        </div>
                        <div class="w-12 h-12 bg-primary/5 rounded-2xl flex items-center justify-center text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                        <div class="relative h-[250px]">
                            <canvas id="topicChart"></canvas>
                        </div>

                        <div class="space-y-5">
                            @foreach($topicAnalysis as $topic => $data)
                            @php 
                                $percent = ($data['total'] > 0) ? ($data['correct'] / $data['total']) * 100 : 0;
                                $isWeak = $percent < 60;
                            @endphp
                            <div class="flex items-center justify-between group">
                                <div class="flex items-center gap-3">
                                    <div class="w-2 h-2 rounded-full {{ $isWeak ? 'bg-red-400' : 'bg-green-400' }}"></div>
                                    <span class="text-xs font-bold text-secondary/70">{{ $topic }}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-24 h-1.5 bg-gray-100 rounded-full overflow-hidden">
                                        <div class="h-full {{ $isWeak ? 'bg-red-400' : 'bg-green-400' }}" style="width: {{ $percent }}%"></div>
                                    </div>
                                    <span class="text-[10px] font-black text-secondary w-8">{{ round($percent) }}%</span>
                                </div>
                            </div>
                            @endforeach

                            <div class="mt-8 p-6 bg-secondary text-white rounded-[2rem] border border-white/5 relative overflow-hidden">
                                <div class="absolute -right-4 -bottom-4 w-16 h-16 bg-white/5 rounded-full blur-xl"></div>
                                <h4 class="text-[10px] font-black uppercase tracking-widest mb-2 opacity-50 italic">Rekomendasi Belajar:</h4>
                                <p class="text-xs font-medium leading-relaxed">
                                    @php 
                                        $weakTopics = collect($topicAnalysis)->filter(fn($d) => ($d['correct'] / ($d['total'] ?: 1) * 100) < 60)->keys();
                                    @endphp
                                    @if($weakTopics->count() > 0)
                                        Fokus tingkatkan pemahamanmu pada materi <span class="text-primary font-bold">{{ $weakTopics->implode(', ') }}</span> untuk mencapai skor maksimal.
                                    @else
                                        Luar biasa! Penguasaan materimu sudah sangat merata. Pertahankan performamu!
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between px-4 py-2 mt-8">
                    <h2 class="text-lg font-black text-secondary tracking-tight italic uppercase">Review <span class="text-primary not-italic">&</span> Pembahasan</h2>
                    <span class="text-[9px] font-black text-secondary/20 uppercase tracking-widest">{{ $stats['total'] }} Soal</span>
                </div>

                <div class="space-y-4 pb-24">
                    @foreach($questions as $index => $q)
                    @php
                        $userAns = $userAnswers['q' . $q->id] ?? null;
                        $isCorrect = $userAns === $q->correct_answer;
                        $status = $isCorrect ? 'correct' : ($userAns ? 'wrong' : 'empty');
                    @endphp
                    <div id="q-{{ $index + 1 }}" 
                         x-show="filter === 'all' || filter === '{{ $status }}'"
                         class="bg-white rounded-[2rem] border border-gray-100 shadow-sm overflow-hidden group hover:border-primary/20 transition-all duration-500 scroll-mt-32">
                        
                        <div class="p-8 md:p-10">
                            <!-- Question Header -->
                            <div class="flex items-center justify-between mb-8">
                                <div class="flex items-center gap-4">
                                    <div class="w-8 h-8 {{ $isCorrect ? 'bg-green-500' : ($userAns ? 'bg-red-500' : 'bg-gray-400') }} text-white rounded-xl flex items-center justify-center font-black italic text-xs shadow-lg">
                                        {{ $index + 1 }}
                                    </div>
                                    <span class="text-[8px] font-black {{ $isCorrect ? 'text-green-600' : ($userAns ? 'text-red-600' : 'text-gray-500') }} uppercase tracking-[0.2em]">
                                        {{ $isCorrect ? 'Benar' : ($userAns ? 'Salah' : 'Kosong') }}
                                    </span>
                                    <span class="text-[8px] font-black text-secondary/20 uppercase tracking-widest ml-2 px-2 py-1 bg-gray-50 rounded-lg">Topik: {{ $q->topic ?? 'Umum' }}</span>
                                </div>
                                <button @click="toggleExpl({{ $q->id }})" 
                                        class="p-2 bg-gray-50 hover:bg-primary/10 text-secondary hover:text-primary rounded-xl transition-all">
                                    <svg class="w-4 h-4 transition-transform duration-500" :class="showExpl === {{ $q->id }} ? 'rotate-180 text-primary' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                                </button>
                            </div>

                            <!-- Question Content -->
                            <div class="space-y-8">
                                <div class="text-base font-bold text-secondary leading-relaxed pr-4">
                                    {!! nl2br(e($q->question_text)) !!}
                                </div>

                                @if($q->question_image)
                                    <div class="w-full max-w-sm rounded-[1.5rem] overflow-hidden border-2 border-gray-50 shadow-sm mx-auto">
                                        <img src="{{ asset('storage/' . $q->question_image) }}" class="w-full h-auto">
                                    </div>
                                @endif

                                <div class="grid grid-cols-1 gap-2">
                                    @foreach(['a', 'b', 'c', 'd', 'e'] as $opt)
                                    @php
                                        $isThisCorrect = $q->correct_answer === $opt;
                                        $isThisUserAns = $userAns === $opt;
                                    @endphp
                                    <div class="p-3 md:p-4 rounded-xl border-2 flex items-center gap-4 transition-all duration-500
                                        @if($isThisCorrect) bg-green-50 border-green-500 text-green-900 
                                        @elseif($isThisUserAns) bg-red-50 border-red-500 text-red-900 
                                        @else bg-white border-gray-50 text-secondary/40 @endif">
                                        
                                        <div class="w-7 h-7 rounded-lg flex items-center justify-center font-black text-[10px] uppercase flex-shrink-0
                                            @if($isThisCorrect) bg-green-500 text-white
                                            @elseif($isThisUserAns) bg-red-500 text-white
                                            @else bg-gray-50 border border-gray-100 text-secondary/30 @endif">
                                            {{ $opt }}
                                        </div>
                                        
                                        <div class="text-[11px] font-bold flex-1 leading-snug">{{ $q->{'option_'.$opt} }}</div>
                                        
                                        @if($isThisCorrect)
                                            <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Explanation Accordion -->
                            <div x-show="showExpl === {{ $q->id }}" 
                                 x-collapse x-cloak
                                 class="mt-6 pt-6 border-t border-gray-50 space-y-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-1 h-1 bg-primary rounded-full"></div>
                                    <h5 class="text-[9px] font-black text-primary uppercase tracking-[0.2em]">Pembahasan</h5>
                                </div>
                                <div class="bg-gray-50 p-6 rounded-2xl text-secondary/70 text-xs font-medium leading-[1.6] italic border-l-2 border-primary">
                                    {!! nl2br(e($q->explanation ?? 'Pembahasan segera hadir.')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('topicChart').getContext('2d');
    const data = @json($topicAnalysis);
    const labels = Object.keys(data);
    const values = Object.values(data).map(d => Math.round((d.correct / (d.total || 1)) * 100));
    
    new Chart(ctx, {
        type: 'radar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Penguasaan (%)',
                data: values,
                backgroundColor: 'rgba(14, 165, 233, 0.2)',
                borderColor: '#0EA5E9',
                borderWidth: 3,
                pointBackgroundColor: '#0EA5E9',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: '#0EA5E9'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                r: {
                    angleLines: { color: 'rgba(0,0,0,0.05)' },
                    suggestedMin: 0,
                    suggestedMax: 100,
                    ticks: { display: false },
                    pointLabels: {
                        font: { family: 'Instrument Sans', size: 10, weight: 'bold' },
                        color: '#1E3A8A'
                    }
                }
            },
            plugins: {
                legend: { display: false }
            }
        }
    });
});

function resultPage() {
    return {
        filter: 'all',
        showExpl: null,
        toggleExpl(id) { this.showExpl = (this.showExpl === id ? null : id); },
        scrollToQuestion(number) {
            const el = document.getElementById('q-' + number);
            if (el) { el.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
        }
    }
}
</script>
@endpush
@endsection
