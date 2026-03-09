<?php

namespace App\Http\Controllers;

use App\Models\StudyPackage;
use App\Models\UtbkTryout;
use App\Models\SdTryout;
use App\Models\SmpTryout;
use App\Models\SmaTryout;
use App\Models\SmaUtbkTryout;
use App\Models\AlumniTryout;
use Illuminate\Http\Request;

class AdminBankSoalController extends Controller
{
    public function index()
    {
        $data = [
            'Paket Belajar' => [
                'type' => 'paket',
                'items' => StudyPackage::all()
            ],
            'Tryout UTBK' => [
                'type' => 'utbk',
                'items' => UtbkTryout::all()
            ],
            'Tryout SD' => [
                'type' => 'sd',
                'items' => SdTryout::all()
            ],
            'Tryout SMP' => [
                'type' => 'smp',
                'items' => SmpTryout::all()
            ],
            'Tryout SMA 10-11' => [
                'type' => 'sma',
                'items' => SmaTryout::all()
            ],
            'Tryout SMA 12 & UTBK' => [
                'type' => 'sma-utbk',
                'items' => SmaUtbkTryout::all()
            ],
            'Tryout Alumni' => [
                'type' => 'alumni',
                'items' => AlumniTryout::all()
            ],
        ];

        return view('admin.bank_soal.index', compact('data'));
    }
}
