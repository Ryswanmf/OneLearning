<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminTransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['user', 'buyable'])->latest()->paginate(10);
        return view('admin.transactions.index', compact('transactions'));
    }

    public function show(Transaction $transaction)
    {
        return view('admin.transactions.show', compact('transaction'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'status' => 'required|in:pending,success,failed',
            'admin_note' => 'nullable|string'
        ]);

        $oldStatus = $transaction->status;
        $newStatus = $request->status;

        $transaction->update([
            'status' => $newStatus,
            'admin_note' => $request->admin_note ?? $transaction->admin_note
        ]);

        // Jika transaksi disetujui (Success), tambahkan akses paket ke user
        if ($newStatus === 'success' && $oldStatus !== 'success') {
            $user = $transaction->user;
            $item = $transaction->buyable;
            $expiredAt = now()->addDays(365);
            $morphClass = $item->getMorphClass();

            \Illuminate\Support\Facades\DB::table('user_study_package')->updateOrInsert(
                ['user_id' => $user->id, 'accessible_id' => $item->id, 'accessible_type' => $morphClass],
                ['expired_at' => $expiredAt, 'created_at' => now(), 'updated_at' => now()]
            );
        }

        return redirect()->route('admin.transactions.index')->with('success', 'Status transaksi berhasil diperbarui.');
    }
}
