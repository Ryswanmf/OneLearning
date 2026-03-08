<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat - {{ auth()->user()->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:700,900|instrument-sans:400,500,600,700,800" rel="stylesheet" />
    <style>
        @page { size: A4 landscape; margin: 0; }
        @media print {
            .no-print { display: none; }
            body { margin: 0; padding: 0; background: white; }
            .cert-wrapper { padding: 0 !important; margin: 0 !important; width: 100% !important; height: 100vh !important; border: none !important; box-shadow: none !important; }
        }
        body { font-family: 'Instrument Sans', sans-serif; background-color: #F1F5F9; }
        .serif { font-family: 'Playfair Display', serif; }
        .cert-wrapper {
            width: 1000px; /* Reduced width */
            height: 700px; /* Reduced height */
            background: white;
            position: relative;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 30px 60px -12px rgba(0,0,0,0.1);
            background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%231e3a8a' fill-opacity='0.015'%3E%3Cpath d='M24 22v-2h-2v2h-2v2h2v2h2v-2h2v-2h-2zM4 22v-2H2v2H0v2h2v2h2v-2h2v-2H4zM4 4v-2H2v2H0v2h2v2h2v-2h2v-2H4zM24 4v-2h-2v2h-2v2h2v2h2v-2h2v-2h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .border-main {
            border: 10px double #1E3A8A;
            height: 100%;
            width: 100%;
            padding: 8px;
            position: relative;
        }
        .border-inner {
            border: 1.5px solid #EAB308;
            height: 100%;
            width: 100%;
            padding: 30px 50px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow: hidden;
        }
        .name-display {
            font-size: 3.5rem; /* Dynamic sizing */
            max-width: 800px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            line-height: 1.2;
        }
        .seal-container {
            width: 110px;
            height: 110px;
            background: #EAB308;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 20px rgba(234, 179, 8, 0.3);
            border: 4px double rgba(255,255,255,0.4);
            color: white;
            transform: rotate(-12deg);
        }
    </style>
</head>
<body class="antialiased">

    <!-- Floating Actions -->
    <div class="no-print fixed top-6 right-6 z-50 flex gap-3 scale-90">
        <button onclick="window.print()" class="px-6 py-3 bg-[#1E3A8A] text-white font-black rounded-xl shadow-xl hover:bg-secondary transition-all flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 00-2 2h2m2 4h10a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 00-2 2h2m8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" /></svg>
            Print
        </button>
        <a href="{{ url()->previous() }}" class="px-6 py-3 bg-white border border-gray-200 text-secondary font-black rounded-xl shadow-md hover:bg-gray-50 transition-all">Kembali</a>
    </div>

    <div class="cert-wrapper">
        <div class="border-main">
            <div class="border-inner">
                
                <!-- Logo -->
                <div class="flex flex-col items-center mb-6">
                    <img src="{{ asset('images/logo.png') }}" class="w-12 h-12 mb-2">
                    <div class="text-sm font-black tracking-[0.3em] text-secondary uppercase italic">One<span class="text-primary">Learning</span></div>
                    <div class="h-0.5 w-12 bg-accent mt-1"></div>
                </div>

                <!-- Title -->
                <div class="text-center mb-8">
                    <h1 class="serif text-5xl text-secondary uppercase tracking-[0.1em] mb-1">Certificate</h1>
                    <div class="text-[9px] font-black text-primary uppercase tracking-[0.5em]">OF ACHIEVEMENT</div>
                </div>

                <!-- Recipient -->
                <div class="text-center mb-6">
                    <p class="text-[11px] text-secondary/40 font-medium italic mb-4 uppercase tracking-widest">Sertifikat ini diberikan kepada:</p>
                    <div class="serif name-display text-secondary border-b border-gray-100 px-10 pb-2 inline-block italic">
                        {{ auth()->user()->name }}
                    </div>
                </div>

                <!-- Body -->
                <div class="text-center max-w-xl mb-10">
                    <p class="text-sm text-secondary/60 leading-relaxed font-medium">
                        Telah berhasil menyelesaikan Tryout <strong>{{ $tryout->name }}</strong> 
                        pada platform OneLearning dengan validasi sistem penilaian <strong>IRT</strong>.
                    </p>
                </div>

                <!-- Footer -->
                <div class="w-full grid grid-cols-3 items-end mt-auto">
                    <div class="text-left space-y-4">
                        <div>
                            <div class="text-[8px] font-black text-secondary/30 uppercase tracking-widest">IRT Score Index</div>
                            <div class="text-2xl font-black text-primary italic leading-none">{{ $submission->score }} <span class="text-[10px] text-secondary/20 not-italic">/ 1000</span></div>
                        </div>
                        <div>
                            <div class="text-[8px] font-black text-secondary/30 uppercase tracking-widest mb-1">Date Issued</div>
                            <div class="text-xs font-bold text-secondary">{{ $submission->finished_at->format('d F Y') }}</div>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <div class="seal-container">
                            <div class="text-center text-white">
                                <div class="text-[8px] font-black uppercase tracking-tighter">Official</div>
                                <div class="text-[10px] font-black italic border-y border-white/20 py-0.5 my-0.5 uppercase">Certified</div>
                                <div class="text-[8px] font-black uppercase tracking-tighter text-white/70">OneLearning</div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <div class="flex flex-col items-end">
                            <div class="serif text-xl text-secondary mb-1 opacity-80 italic">Riswan Nofendi</div>
                            <div class="h-px w-32 bg-secondary/20 ml-auto mb-1"></div>
                            <div class="text-[8px] font-black text-secondary uppercase tracking-widest">CEO OneLearning</div>
                            <div class="text-[6px] font-bold text-secondary/20 mt-4">ID: {{ strtoupper(substr(md5($submission->id), 0, 16)) }}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
