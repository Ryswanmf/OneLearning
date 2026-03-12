<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function __construct()
    {
        \Midtrans\Config::$serverKey = config('services.midtrans.server_key');
        \Midtrans\Config::$isProduction = (bool)config('services.midtrans.is_production');
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
    }

    private function getBuyableModel($type, $id)
    {
        $map = [
            'utbk' => \App\Models\UtbkTryout::class,
            'sd' => \App\Models\SdTryout::class,
            'smp' => \App\Models\SmpTryout::class,
            'sma' => \App\Models\SmaTryout::class,
            'sma-utbk' => \App\Models\SmaUtbkTryout::class,
            'alumni' => \App\Models\AlumniTryout::class,
            'paket' => \App\Models\StudyPackage::class,
        ];
        $modelClass = $map[$type] ?? abort(404);
        return $modelClass::where('id', $id)->orWhere('slug', $id)->firstOrFail();
    }

    public function checkout($type, $id)
    {
        $item = $this->getBuyableModel($type, $id);
        return view('landing.order.checkout', compact('item', 'type'));
    }

    public function store(Request $request, $type, $id)
    {
        $item = $this->getBuyableModel($type, $id);
        $user = Auth::user();
        $reference_id = 'INV-' . strtoupper(Str::random(10));
        
        $transaction = Transaction::create([
            'reference_id' => $reference_id,
            'user_id' => $user->id,
            'buyable_id' => $item->id,
            'buyable_type' => $item->getMorphClass(),
            'amount' => $item->price,
            'status' => 'pending'
        ]);

        $params = [
            'transaction_details' => [
                'order_id' => $reference_id,
                'gross_amount' => (int)$item->price,
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'email' => $user->email,
            ],
            'item_details' => [
                [
                    'id' => $item->id,
                    'price' => (int)$item->price,
                    'quantity' => 1,
                    'name' => substr($item->name ?? $item->title, 0, 50),
                ]
            ]
        ];

        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);
            $transaction->update(['snap_token' => $snapToken]);
            return redirect()->route('order.payment', $transaction->reference_id);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sistem pembayaran sedang sibuk: ' . $e->getMessage());
        }
    }

    public function payment($reference_id)
    {
        $transaction = Transaction::where('reference_id', $reference_id)
            ->where('user_id', Auth::id())
            ->firstOrFail();
            
        return view('landing.order.payment', compact('transaction'));
    }

    private function getRedirectRoute($item)
    {
        $class = $item->getMorphClass();
        $map = [
            \App\Models\UtbkTryout::class => 'produk.utbk',
            \App\Models\SdTryout::class => 'produk.sd',
            \App\Models\SmpTryout::class => 'produk.smp',
            \App\Models\SmaTryout::class => 'produk.sma',
            \App\Models\SmaUtbkTryout::class => 'produk.sma_utbk',
            \App\Models\AlumniTryout::class => 'produk.alumni',
            \App\Models\StudyPackage::class => 'paket.index',
        ];
        return $map[$class] ?? 'order.history';
    }

    // Handler Otomatis setelah popup Midtrans selesai
    public function handleSuccess($reference_id)
    {
        $transaction = Transaction::with(['user', 'buyable'])->where('reference_id', $reference_id)->firstOrFail();

        try {
            // Cek status langsung ke server Midtrans (Initiated by our server)
            $status = \Midtrans\Transaction::status($reference_id);
            $paymentStatus = $status->transaction_status;
            
            if ($paymentStatus == 'settlement' || $paymentStatus == 'capture' || $paymentStatus == 'success') {
                $this->activatePackage($transaction);
                $route = $this->getRedirectRoute($transaction->buyable);
                return redirect()->route($route)->with('success', 'Pembayaran berhasil dikonfirmasi! Paket Anda sudah aktif.');
            }
        } catch (\Exception $e) {
            // Jika gagal cek (misal: belum terbayar di bank), tetap kirim ke history
        }

        return redirect()->route('order.history');
    }

    private function activatePackage($transaction)
    {
        $transaction->update(['status' => 'success']);
        $user = $transaction->user;
        $item = $transaction->buyable;
        $expiredAt = now()->addDays(365);
        $morphClass = $item->getMorphClass();

        \Illuminate\Support\Facades\DB::table('user_study_package')->updateOrInsert(
            ['user_id' => $user->id, 'accessible_id' => $item->id, 'accessible_type' => $morphClass],
            ['expired_at' => $expiredAt, 'created_at' => now(), 'updated_at' => now()]
        );
    }

    public function history()
    {
        $transactions = Transaction::where('user_id', Auth::id())->latest()->get();
        return view('landing.order.history', compact('transactions'));
    }

    public function printInvoice($reference_id)
    {
        $transaction = Transaction::with(['user', 'buyable'])->where('reference_id', $reference_id);
        
        // Jika bukan admin, hanya bisa cetak invoice miliknya sendiri
        if (Auth::user()->role !== 'admin') {
            $transaction->where('user_id', Auth::id());
        }

        $transaction = $transaction->firstOrFail();

        // Hanya invoice yang sukses/berhasil yang bisa dicetak
        if ($transaction->status !== 'success') {
            return redirect()->back()->with('error', 'Invoice hanya tersedia untuk transaksi yang sudah berhasil.');
        }

        $settings = Setting::pluck('value', 'key');
        
        return view('landing.order.invoice', compact('transaction', 'settings'));
    }
}
