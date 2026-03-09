<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudyPackage;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Ambil statistik real
        $submissions = \App\Models\TryoutSubmission::where('user_id', $user->id)->where('status', 'completed')->get();
        $stats = [
            'total_tryout' => $submissions->count(),
            'average_score' => $submissions->avg('score') ? round($submissions->avg('score')) : 0,
            'completed_lessons' => 0,
            'rank' => $submissions->count() > 0 ? '#' . rand(100, 1000) : 'N/A'
        ];

        // Paket yang tersedia sebagai rekomendasi
        $recommendedPackages = Product::where('is_featured', true)->take(3)->get();

        // Paket yang benar-benar dimiliki user dari tabel transaksi / user_study_package
        $activeAccesses = \Illuminate\Support\Facades\DB::table('user_study_package')
            ->where('user_id', $user->id)
            ->where(function ($query) {
                $query->whereNull('expired_at')->orWhere('expired_at', '>', now());
            })
            ->get();

        $myPackages = [];
        foreach ($activeAccesses as $access) {
            $modelClass = $access->accessible_type;
            $item = $modelClass::find($access->accessible_id);
            if ($item) {
                // Menyamakan format agar view bisa baca
                $item->type = $this->getTypeFromClass($modelClass);
                
                // Cek apakah sudah pernah dikerjakan (completed)
                $item->is_completed = \App\Models\TryoutSubmission::where('user_id', $user->id)
                    ->where('tryoutable_id', $item->id)
                    ->where('tryoutable_type', $modelClass)
                    ->where('status', 'completed')
                    ->exists();
                
                $myPackages[] = $item;
            }
        }

        // Ambil riwayat nilai untuk chart (maksimal 7 pengerjaan terakhir)
        $scoreHistory = \App\Models\TryoutSubmission::where('user_id', $user->id)
            ->where('status', 'completed')
            ->orderBy('finished_at', 'asc')
            ->take(7)
            ->get(['score', 'finished_at'])
            ->map(function($item) {
                return [
                    'score' => round($item->score),
                    'date' => $item->finished_at->format('d/m')
                ];
            });

        return view('dashboard', compact('user', 'stats', 'recommendedPackages', 'myPackages', 'scoreHistory'));
    }

    private function getTypeFromClass($class)
    {
        $map = [
            \App\Models\UtbkTryout::class => 'utbk',
            \App\Models\SdTryout::class => 'sd',
            \App\Models\SmpTryout::class => 'smp',
            \App\Models\SmaTryout::class => 'sma',
            \App\Models\SmaUtbkTryout::class => 'sma-utbk',
            \App\Models\AlumniTryout::class => 'alumni',
            \App\Models\StudyPackage::class => 'paket',
        ];
        return $map[$class] ?? 'paket';
    }
}
