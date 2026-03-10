<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat - {{ auth()->user()->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:italic,700,900|instrument-sans:400,500,600,700,800" rel="stylesheet" />
    <style>
        @page { size: A4 landscape; margin: 0; }
        @media print {
            .no-print { display: none; }
            body { margin: 0; padding: 0; background: white; }
            .cert-wrapper { 
                padding: 0 !important; 
                margin: 0 !important; 
                width: 297mm !important; 
                height: 210mm !important; 
                border: none !important; 
                box-shadow: none !important; 
            }
        }
        body { font-family: 'Instrument Sans', sans-serif; background-color: #F8FAFC; }
        .serif { font-family: 'Playfair Display', serif; }
        .cert-wrapper {
            width: 880px;
            height: 620px;
            background: white;
            position: relative;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 50px 100px -20px rgba(30,58,138,0.15);
            overflow: hidden;
        }
        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 350px;
            opacity: 0.03;
            pointer-events: none;
            z-index: 5;
        }
        .border-outer {
            border: 1px solid #1E3A8A;
            height: 100%;
            width: 100%;
            padding: 6px;
            position: relative;
            z-index: 10;
        }
        .border-inner {
            border: 4px double #1E3A8A;
            height: 100%;
            width: 100%;
            padding: 35px 50px 45px 50px; /* Increased bottom padding to 45px */
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: rgba(255,255,255,0.98);
        }
        .corner {
            position: absolute;
            width: 50px;
            height: 50px;
            z-index: 20;
        }
        .corner-tl { top: -2px; left: -2px; border-top: 4px solid #EAB308; border-left: 4px solid #EAB308; }
        .corner-tr { top: -2px; right: -2px; border-top: 4px solid #EAB308; border-right: 4px solid #EAB308; }
        .corner-bl { bottom: -2px; left: -2px; border-bottom: 4px solid #EAB308; border-left: 4px solid #EAB308; }
        .corner-br { bottom: -2px; right: -2px; border-bottom: 4px solid #EAB308; border-right: 4px solid #EAB308; }
        
        .name-display {
            font-size: 3.5rem;
            color: #1E3A8A;
            margin: 8px 0;
            letter-spacing: -0.02em;
            line-height: 1;
        }
        .seal {
            width: 95px;
            height: 95px;
            background: linear-gradient(135deg, #EAB308 0%, #B45309 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 20px rgba(180, 83, 9, 0.25);
            border: 4px double rgba(255,255,255,0.4);
            transform: rotate(-8deg);
        }
    </style>
</head>
<body class="antialiased">

    <!-- Actions -->
    <div class="no-print fixed top-6 right-6 z-[100] flex gap-3 scale-90">
        <button onclick="window.print()" class="px-6 py-3 bg-[#1E3A8A] text-white font-black rounded-xl shadow-xl hover:bg-secondary transition-all flex items-center gap-2 active:scale-95">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 00-2 2h2m2 4h10a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 00-2 2h2m8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" /></svg>
            Print Sertifikat
        </button>
        <a href="{{ route('dashboard') }}" class="px-6 py-3 bg-white border border-gray-200 text-secondary font-black rounded-xl shadow-md hover:bg-gray-50 transition-all">Tutup</a>
    </div>

    <div class="cert-wrapper">
        <img src="{{ asset('images/logo.png') }}" class="watermark">
        
        <div class="border-outer">
            <div class="corner corner-tl"></div>
            <div class="corner corner-tr"></div>
            <div class="corner corner-bl"></div>
            <div class="corner corner-br"></div>

            <div class="border-inner">
                
                <!-- Logo & Brand -->
                <div class="flex flex-col items-center mb-6">
                    <img src="{{ asset('images/logo.png') }}" class="w-12 h-12 mb-2">
                    <div class="text-[10px] font-black tracking-[0.4em] text-secondary uppercase italic leading-none">One<span class="text-primary">Learning</span></div>
                    <div class="h-0.5 w-12 bg-accent mt-1.5"></div>
                </div>

                <!-- Title -->
                <div class="text-center mb-6">
                    <h1 class="serif text-4xl text-secondary uppercase tracking-[0.12em] mb-1">Certificate</h1>
                    <div class="text-[8px] font-black text-primary uppercase tracking-[0.6em] leading-none opacity-70">OF ACHIEVEMENT & COMPLETION</div>
                </div>

                <!-- Recipient -->
                <div class="text-center mb-6">
                    <p class="text-[9px] text-secondary/40 font-bold uppercase tracking-[0.2em] mb-2">Sertifikat ini diberikan kepada:</p>
                    <div class="serif name-display italic">
                        {{ auth()->user()->name }}
                    </div>
                    <div class="w-40 h-px bg-gradient-to-r from-transparent via-primary/30 to-transparent mx-auto mt-3"></div>
                </div>

                <!-- Description -->
                <div class="text-center max-w-lg mb-6">
                    <p class="text-[12px] text-secondary/60 leading-relaxed font-medium">
                        Atas keberhasilan menyelesaikan simulasi pengerjaan soal
                        <span class="text-secondary font-black italic">"{{ $tryout->name }}"</span> 
                        dengan standar penilaian <span class="text-primary font-black">IRT (Item Response Theory)</span> 
                        melalui platform OneLearning Indonesia.
                    </p>
                </div>

                <!-- Footer - Pulled Up -->
                <div class="w-full grid grid-cols-3 items-end mt-auto pt-4">
                    <!-- Score -->
                    <div class="text-left">
                        <div class="space-y-3">
                            <div>
                                <div class="text-[8px] font-black text-secondary/30 uppercase tracking-[0.2em] mb-0.5">IRT Score Index</div>
                                <div class="text-3xl font-black text-primary italic leading-none">
                                    {{ $submission->score }} <span class="text-xs text-secondary/20 not-italic">/ 1000</span>
                                </div>
                            </div>
                            <div>
                                <div class="text-[8px] font-black text-secondary/30 uppercase tracking-[0.2em] mb-0.5">Issue Date</div>
                                <div class="text-[10px] font-extrabold text-secondary italic">
                                    {{ $submission->finished_at->format('d F Y') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seal -->
                    <div class="flex justify-center">
                        <div class="seal">
                            <div class="text-center text-white">
                                <div class="text-[7px] font-black uppercase tracking-tighter">Official</div>
                                <div class="text-[10px] font-black italic border-y border-white/20 py-0.5 my-0.5 uppercase">Certified</div>
                                <div class="text-[7px] font-black uppercase tracking-tighter text-white/70">OneLearning</div>
                            </div>
                        </div>
                    </div>

                    <!-- Signature -->
                    <div class="text-right">
                        <div class="flex flex-col items-end">
                            <div class="serif text-xl text-secondary mb-0.5 opacity-90 italic leading-none">M Riswan Mufid</div>
                            <div class="h-px w-32 bg-secondary/20 ml-auto mb-1"></div>
                            <div class="text-[9px] font-black text-secondary uppercase tracking-widest leading-none">Chief Executive Officer</div>
                            
                            <div class="mt-4 flex flex-col items-end opacity-40">
                                <div class="text-[6px] font-bold text-secondary uppercase tracking-widest mb-0.5">Verification ID</div>
                                <div class="text-[8px] font-black text-secondary font-mono leading-none">
                                    {{ strtoupper(substr(md5($submission->id), 0, 14)) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
