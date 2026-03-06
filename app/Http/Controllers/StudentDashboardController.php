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
        
        // Mock data untuk statistik (nanti dihubungkan ke tabel nilai)
        $stats = [
            'total_tryout' => 0,
            'average_score' => 0,
            'completed_lessons' => 0,
            'rank' => 'N/A'
        ];

        // Paket yang tersedia sebagai rekomendasi
        $recommendedPackages = Product::where('is_featured', true)->take(3)->get();

        // Paket yang dimiliki user (sementara semua paket untuk demo premium feel)
        $myPackages = Product::latest()->take(2)->get();

        return view('dashboard', compact('user', 'stats', 'recommendedPackages', 'myPackages'));
    }
}
