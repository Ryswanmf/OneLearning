<?php

namespace App\Http\Controllers;

use App\Models\SnbpMajor;
use Illuminate\Http\Request;

class SnbpAnalysisController extends Controller
{
    public function index()
    {
        $universities = SnbpMajor::select('university_name')->distinct()->where('is_active', true)->get();
        return view('landing.produk.snbp', compact('universities'));
    }

    public function getMajors(Request $request)
    {
        $majors = SnbpMajor::where('university_name', $request->university)
            ->where('is_active', true)
            ->get();
        return response()->json($majors);
    }

    public function analyze(Request $request)
    {
        $request->validate([
            'major_id' => 'required|exists:snbp_majors,id',
            'grade' => 'required|numeric|min:0|max:100',
        ]);

        $major = SnbpMajor::findOrFail($request->major_id);
        $userGrade = $request->grade;

        // Logika perhitungan peluang (Simulasi)
        // Probabilitas dasar = (Nilai User / Passing Grade Major) * 100
        // Disesuaikan dengan kapasitas dan peminat
        $baseChance = ($userGrade / $major->passing_grade) * 100;
        
        // Faktor persaingan (Applicants vs Capacity)
        $competitionRatio = $major->capacity / ($major->applicants > 0 ? $major->applicants : 1);
        
        $finalChance = $baseChance * (0.8 + ($competitionRatio * 0.2));
        
        // Batasi antara 5% - 99%
        $finalChance = max(5, min(99, round($finalChance)));

        return response()->json([
            'success' => true,
            'chance' => $finalChance,
            'major' => $major,
            'status' => $this->getStatusLabel($finalChance)
        ]);
    }

    private function getStatusLabel($chance)
    {
        if ($chance >= 80) return 'Sangat Tinggi';
        if ($chance >= 60) return 'Tinggi';
        if ($chance >= 40) return 'Cukup (Beresiko)';
        return 'Rendah';
    }
}
