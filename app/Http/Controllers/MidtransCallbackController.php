<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class MidtransCallbackController extends Controller
{
    public function __construct()
    {
        \Midtrans\Config::$serverKey = config('services.midtrans.server_key');
        \Midtrans\Config::$isProduction = (bool)config('services.midtrans.is_production');
    }

    public function handle(Request $request)
    {
        try {
            $notification = new \Midtrans\Notification();
            
            $transactionStatus = $notification->transaction_status;
            $orderId = $notification->order_id;
            $fraudStatus = $notification->fraud_status;

            $transaction = Transaction::with(['user', 'buyable'])->where('reference_id', $orderId)->first();

            if (!$transaction) return response()->json(['message' => 'Transaction not found'], 404);

            if ($transactionStatus == 'capture') {
                if ($fraudStatus == 'challenge') {
                    $transaction->update(['status' => 'pending']);
                } else if ($fraudStatus == 'accept') {
                    $this->activatePackage($transaction);
                }
            } else if ($transactionStatus == 'settlement') {
                $this->activatePackage($transaction);
            } else if ($transactionStatus == 'cancel' || $transactionStatus == 'deny' || $transactionStatus == 'expire') {
                $transaction->update(['status' => 'failed']);
            } else if ($transactionStatus == 'pending') {
                $transaction->update(['status' => 'pending']);
            }

            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    private function activatePackage($transaction)
    {
        $transaction->update(['status' => 'success']);
        
        $user = $transaction->user;
        $item = $transaction->buyable;
        $expiredAt = now()->addDays(365);
        $morphClass = $item->getMorphClass();

        // Tambahkan ke tabel pivot akses
        \Illuminate\Support\Facades\DB::table('user_study_package')->updateOrInsert(
            [
                'user_id' => $user->id,
                'accessible_id' => $item->id,
                'accessible_type' => $morphClass,
            ],
            [
                'expired_at' => $expiredAt,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
