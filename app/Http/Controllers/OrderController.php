<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Transaction as TransactionModel; // Alias agar tidak tabrakan
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Midtrans\Config as MidtransConfig;
use Midtrans\Snap as MidtransSnap;
use Midtrans\Transaction as MidtransApi; // Alias berbeda lagi

class OrderController extends Controller
{
    public function __construct()
    {
        MidtransConfig::$serverKey = config('services.midtrans.server_key');
        MidtransConfig::$isProduction = (bool)config('services.midtrans.is_production');
        MidtransConfig::$isSanitized = true;
        MidtransConfig::$is3ds = true;
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

        // Menggunakan Alias TransactionModel
        $existingTransaction = TransactionModel::where('user_id', $user->id)
            ->where('buyable_id', $item->id)
            ->where('buyable_type', $item->getMorphClass())
            ->where('status', 'pending')
            ->first();

        if ($existingTransaction) {
            return redirect()->route('order.payment', $existingTransaction->reference_id);
        }

        $reference_id = 'INV-' . strtoupper(Str::random(10));
        
        $transaction = TransactionModel::create([
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
            // Menggunakan Alias MidtransSnap
            $snapToken = MidtransSnap::getSnapToken($params);
            $transaction->update(['snap_token' => $snapToken]);
            return redirect()->route('order.payment', $transaction->reference_id);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sistem pembayaran sedang sibuk: ' . $e->getMessage());
        }
    }

    public function payment($reference_id)
    {
        $transaction = TransactionModel::where('reference_id', $reference_id)
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

    public function handleSuccess($reference_id)
    {
        $transaction = TransactionModel::with(['user', 'buyable'])->where('reference_id', $reference_id)->firstOrFail();

        try {
            // Menggunakan Alias MidtransApi
            $status = MidtransApi::status($reference_id);
            $paymentStatus = $status->transaction_status;
            
            if ($paymentStatus == 'settlement' || $paymentStatus == 'capture' || $paymentStatus == 'success') {
                $this->activatePackage($transaction);
                $route = $this->getRedirectRoute($transaction->buyable);
                return redirect()->route($route)->with('success', 'Pembayaran berhasil dikonfirmasi! Paket Anda sudah aktif.');
            }
        } catch (\Exception $e) {
            // Log error jika perlu
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

        DB::table('user_study_package')->updateOrInsert(
            ['user_id' => $user->id, 'accessible_id' => $item->id, 'accessible_type' => $morphClass],
            ['expired_at' => $expiredAt, 'created_at' => now(), 'updated_at' => now()]
        );
    }

    public function history()
    {
        $transactions = TransactionModel::where('user_id', Auth::id())->latest()->get();
        return view('landing.order.history', compact('transactions'));
    }

    public function printInvoice($reference_id)
    {
        $query = TransactionModel::with(['user', 'buyable'])->where('reference_id', $reference_id);
        
        if (Auth::user()->role !== 'admin') {
            $query->where('user_id', Auth::id());
        }

        $transaction = $query->firstOrFail();

        if ($transaction->status !== 'success') {
            return redirect()->back()->with('error', 'Invoice hanya tersedia untuk transaksi yang sudah berhasil.');
        }

        $settings = Setting::pluck('value', 'key');
        
        return view('landing.order.invoice', compact('transaction', 'settings'));
    }
}
