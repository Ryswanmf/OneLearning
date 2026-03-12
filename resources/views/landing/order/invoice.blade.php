<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - {{ $transaction->reference_id }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        @media print {
            .no-print { display: none !important; }
            body { background: white !important; }
            .invoice-card { border: none !important; box-shadow: none !important; margin: 0 !important; padding: 0 !important; }
        }
    </style>
</head>
<body class="bg-gray-100 py-12 px-4">
    <!-- Floating Action Bar -->
    <div class="max-w-3xl mx-auto mb-8 flex justify-between items-center no-print">
        <a href="{{ Auth::user()->role === 'admin' ? route('admin.transactions.show', $transaction->id) : route('order.history') }}" class="flex items-center gap-2 text-sm font-bold text-secondary/60 hover:text-primary transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
            Kembali
        </a>
        <button onclick="window.print()" class="px-6 py-3 bg-secondary text-white font-black text-xs uppercase tracking-widest rounded-xl shadow-xl hover:bg-primary transition-all flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" /></svg>
            Cetak Invoice
        </button>
    </div>

    <!-- Invoice Card -->
    <div class="max-w-3xl mx-auto bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden invoice-card">
        <!-- Header -->
        <div class="bg-secondary p-10 md:p-12 text-white relative">
            <div class="absolute top-0 right-0 w-64 h-64 bg-primary/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
            <div class="relative z-10 flex flex-col md:flex-row justify-between gap-8">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <img src="{{ asset('images/logo.png') }}" class="w-10 h-10 brightness-0 invert" alt="Logo">
                        <span class="text-xl font-black tracking-tight">One<span class="text-primary">Learning</span></span>
                    </div>
                    <div class="space-y-1">
                        <p class="text-xs font-medium text-white/60">Email: support@onelearning.id</p>
                        <p class="text-xs font-medium text-white/60">Web: www.onelearning.id</p>
                    </div>
                </div>
                <div class="md:text-right">
                    <h1 class="text-3xl font-black italic tracking-tighter mb-2">INVOICE</h1>
                    <div class="text-xs font-black text-primary uppercase tracking-[0.2em]">#{{ $transaction->reference_id }}</div>
                </div>
            </div>
        </div>

        <!-- Body -->
        <div class="p-10 md:p-12 space-y-12">
            <!-- Info Grid -->
            <div class="grid grid-cols-2 gap-8">
                <div>
                    <div class="text-[10px] font-black text-secondary/30 uppercase tracking-widest mb-3">Ditagihkan Kepada:</div>
                    <div class="text-sm font-black text-secondary">{{ $transaction->user->name }}</div>
                    <div class="text-xs font-medium text-secondary/50">{{ $transaction->user->email }}</div>
                </div>
                <div class="text-right">
                    <div class="text-[10px] font-black text-secondary/30 uppercase tracking-widest mb-3">Tanggal Transaksi:</div>
                    <div class="text-sm font-black text-secondary">{{ $transaction->created_at->format('d F Y') }}</div>
                    <div class="text-xs font-medium text-secondary/50">{{ $transaction->created_at->format('H:i') }} WIB</div>
                </div>
            </div>

            <!-- Table -->
            <div class="border-t border-gray-100 pt-8">
                <table class="w-full">
                    <thead>
                        <tr class="text-[10px] font-black text-secondary/30 uppercase tracking-widest">
                            <th class="text-left pb-4">Deskripsi Produk</th>
                            <th class="text-right pb-4">Jumlah</th>
                            <th class="text-right pb-4">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <tr>
                            <td class="py-6">
                                <div class="text-sm font-black text-secondary italic">{{ $transaction->buyable->name ?? $transaction->buyable->title }}</div>
                                <div class="text-[10px] text-secondary/40 font-medium mt-1">Akses 1 Tahun + Sertifikat Digital</div>
                            </td>
                            <td class="py-6 text-right text-sm font-bold text-secondary">1</td>
                            <td class="py-6 text-right text-sm font-black text-secondary">Rp {{ number_format($transaction->amount, 0, ',', '.') }}</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="border-t-2 border-secondary/5">
                            <td colspan="2" class="pt-8 text-right">
                                <div class="text-xs font-bold text-secondary/40 uppercase tracking-widest">Total Pembayaran</div>
                            </td>
                            <td class="pt-8 text-right">
                                <div class="text-2xl font-black text-primary tracking-tighter">Rp {{ number_format($transaction->amount, 0, ',', '.') }}</div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <!-- Status Badge -->
            <div class="flex justify-center">
                <div class="px-8 py-3 bg-green-50 text-green-600 rounded-2xl border border-green-100 flex items-center gap-3">
                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                    <span class="text-[10px] font-black uppercase tracking-[0.2em]">Status: Pembayaran Berhasil</span>
                </div>
            </div>

            <!-- Footer Note -->
            <div class="bg-gray-50 rounded-[2rem] p-8 text-center">
                <p class="text-[10px] text-secondary/40 font-medium leading-relaxed">
                    Invoice ini adalah bukti pembayaran yang sah secara elektronik. <br>
                    Terima kasih telah mempercayakan persiapan masa depan Anda bersama <strong>OneLearning Indonesia</strong>.
                </p>
            </div>
        </div>
    </div>

    <!-- Print Footer -->
    <div class="hidden print:block fixed bottom-0 left-0 w-full text-center pb-8">
        <p class="text-[8px] text-gray-300 font-medium tracking-widest uppercase">Generated by OneLearning System - {{ now()->format('d/m/Y H:i') }}</p>
    </div>
</body>
</html>
