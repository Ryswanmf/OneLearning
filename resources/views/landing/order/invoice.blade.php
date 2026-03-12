<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - {{ $transaction->reference_id }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f1f5f9;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }
        
        @page {
            size: A4;
            margin: 0;
        }

        @media print {
            .no-print { display: none !important; }
            body { 
                background: white !important; 
                padding: 0 !important;
                margin: 0 !important;
            }
            .invoice-wrapper {
                padding: 0 !important;
                margin: 0 !important;
                width: 100% !important;
                max-width: 100% !important;
                box-shadow: none !important;
                border: none !important;
                border-radius: 0 !important;
            }
            .content-area {
                padding: 1cm !important;
            }
            .watermark {
                display: block !important;
                opacity: 0.02 !important;
                font-size: 6rem !important;
            }
        }

        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-30deg);
            font-size: 6rem;
            font-weight: 900;
            color: rgba(14, 165, 233, 0.02);
            pointer-events: none;
            z-index: 0;
            white-space: nowrap;
            text-transform: uppercase;
        }
    </style>
</head>
<body class="py-6 px-4">
    <!-- Action Buttons -->
    <div class="max-w-2xl mx-auto mb-4 flex justify-between items-center no-print">
        <a href="{{ Auth::user()->role === 'admin' ? route('admin.transactions.index') : route('order.history') }}" class="inline-flex items-center gap-2 text-[10px] font-bold text-slate-500 hover:text-primary transition-all">
            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
            Kembali
        </a>
        <button onclick="window.print()" class="px-4 py-2 bg-secondary text-white font-black text-[9px] uppercase tracking-widest rounded-lg shadow hover:bg-primary transition-all flex items-center gap-2">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" /></svg>
            Cetak PDF
        </button>
    </div>

    <!-- Invoice Wrapper -->
    <div class="max-w-2xl mx-auto bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden invoice-wrapper relative">
        <div class="watermark">PAID</div>

        <div class="content-area">
            <!-- Header Section -->
            <div class="p-8 md:p-10 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -mr-32 -mt-32"></div>
                
                <div class="relative z-10 flex flex-col md:flex-row justify-between items-start gap-6">
                    <div class="space-y-3">
                        <div class="flex items-center gap-2.5">
                            <img src="{{ asset('images/logo.png') }}" class="w-10 h-10 object-contain" alt="OneLearning Logo">
                            <div>
                                <div class="text-lg font-black tracking-tighter text-secondary leading-none">One<span class="text-primary italic">Learning</span></div>
                                <div class="text-[7px] font-black text-primary uppercase tracking-[0.2em] mt-0.5">E-Learning Ecosystem</div>
                            </div>
                        </div>
                        <div class="text-[10px] text-slate-500 font-medium leading-tight max-w-[180px]">
                            <p class="font-bold text-secondary mb-0.5">PT OneLearning Indonesia</p>
                            <p>{{ $settings['contact_address'] ?? 'Jakarta Selatan, Indonesia' }}</p>
                        </div>
                    </div>

                    <div class="md:text-right space-y-2">
                        <div>
                            <h1 class="text-3xl font-black text-secondary tracking-tighter italic leading-none">INVOICE</h1>
                        </div>
                        <div class="bg-slate-900 text-white px-3 py-1.5 rounded-lg inline-block">
                            <div class="text-[7px] font-black text-primary uppercase tracking-[0.1em] mb-0.5">ID Transaksi</div>
                            <div class="text-sm font-black tracking-tight">#{{ $transaction->reference_id }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Client & Payment Info -->
            <div class="mx-8 md:mx-10 p-6 grid grid-cols-1 md:grid-cols-2 gap-6 bg-slate-50 rounded-2xl border border-slate-100/50">
                <div>
                    <div class="text-[8px] font-black text-slate-400 uppercase tracking-widest mb-2">Ditagihkan Ke:</div>
                    <div class="space-y-0">
                        <div class="text-[13px] font-black text-secondary">{{ $transaction->user->name }}</div>
                        <div class="text-[10px] font-medium text-slate-500">{{ $transaction->user->email }}</div>
                    </div>
                </div>
                <div class="md:text-right">
                    <div class="text-[8px] font-black text-slate-400 uppercase tracking-widest mb-2">Rincian:</div>
                    <div class="space-y-0 text-[10px]">
                        <p class="font-bold text-secondary">{{ $transaction->created_at->format('d F Y') }}</p>
                        <p class="text-green-600 font-black uppercase">Status: Berhasil</p>
                    </div>
                </div>
            </div>

            <!-- Table Items -->
            <div class="p-8 md:p-10">
                <table class="w-full">
                    <thead>
                        <tr class="text-[8px] font-black text-slate-400 uppercase tracking-widest border-b border-slate-100">
                            <th class="text-left pb-3">Deskripsi Produk</th>
                            <th class="text-center pb-3">Qty</th>
                            <th class="text-right pb-3">Harga</th>
                            <th class="text-right pb-3">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                        <tr>
                            <td class="py-6">
                                <div class="text-[12px] font-black text-secondary italic leading-tight">{{ $transaction->buyable->name ?? $transaction->buyable->title }}</div>
                                <div class="text-[9px] text-slate-400 font-medium mt-1">
                                    • Akses 1 Tahun + Analisis IRT
                                </div>
                            </td>
                            <td class="py-6 text-center text-[10px] font-bold text-secondary">1</td>
                            <td class="py-6 text-right text-[10px] font-bold text-secondary">Rp {{ number_format($transaction->amount, 0, ',', '.') }}</td>
                            <td class="py-6 text-right text-[11px] font-black text-secondary tracking-tight">Rp {{ number_format($transaction->amount, 0, ',', '.') }}</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td class="pt-6 text-right">
                                <div class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Total Bayar</div>
                            </td>
                            <td class="pt-6 text-right">
                                <div class="text-xl font-black text-primary tracking-tighter leading-none">Rp {{ number_format($transaction->amount, 0, ',', '.') }}</div>
                            </td>
                        </tr>
                    </tfoot>
                </table>

                <!-- Bottom Area -->
                <div class="mt-12 flex justify-between items-end">
                    <div class="max-w-[150px]">
                        <p class="text-[8px] text-slate-400 leading-tight italic">
                            Terima kasih. Simpan invoice ini sebagai bukti kepemilikan paket yang sah.
                        </p>
                    </div>
                    <div class="text-right">
                        <div class="relative inline-block border-b border-slate-100 pb-1 px-2">
                            <p class="text-[10px] font-black text-secondary">OneLearning Indonesia</p>
                        </div>
                        <p class="text-[6px] text-slate-300 mt-1 uppercase italic tracking-tighter">Transaction Verified: {{ substr(md5($transaction->reference_id), 0, 8) }}</p>
                    </div>
                </div>
            </div>

            <!-- Page Footer -->
            <div class="bg-secondary p-4 text-center mt-4">
                <p class="text-[8px] text-white/30 font-bold uppercase tracking-[0.3em]">
                    OneLearning Indonesia • Grow Beyond Limits
                </p>
            </div>
        </div>
    </div>

    <!-- Print Footer -->
    <div class="hidden print:block fixed bottom-4 left-0 w-full text-center">
        <p class="text-[6px] text-slate-300 font-medium tracking-[0.3em] uppercase">Billing System OneLearning • {{ now()->format('d/m/Y H:i') }}</p>
    </div>
</body>
</html>
