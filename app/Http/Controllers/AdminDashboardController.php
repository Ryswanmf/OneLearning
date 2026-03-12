<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use App\Models\UtbkTryout;
use App\Models\SdTryout;
use App\Models\SmpTryout;
use App\Models\SmaTryout;
use App\Models\SmaUtbkTryout;
use App\Models\AlumniTryout;
use App\Models\StudyPackage;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_students' => User::where('role', 'user')->count(),
            'total_packages' => $this->getTotalPackages(),
            'monthly_revenue' => Transaction::where('status', 'success')
                                ->whereMonth('created_at', now()->month)
                                ->sum('amount'),
            'total_revenue' => Transaction::where('status', 'success')->sum('amount'),
        ];

        $recent_registrations = User::where('role', 'user')
                                ->latest()
                                ->take(5)
                                ->get();

        return view('admin.index', compact('stats', 'recent_registrations'));
    }

    private function getTotalPackages()
    {
        return UtbkTryout::count() + 
               SdTryout::count() + 
               SmpTryout::count() + 
               SmaTryout::count() + 
               SmaUtbkTryout::count() + 
               AlumniTryout::count() +
               StudyPackage::count();
    }
}
