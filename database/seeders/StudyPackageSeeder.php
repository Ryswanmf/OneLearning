<?php

namespace Database\Seeders;

use App\Models\StudyPackage;
use App\Models\SdTryout;
use App\Models\SmpTryout;
use App\Models\SmaTryout;
use App\Models\SmaUtbkTryout;
use App\Models\AlumniTryout;
use Illuminate\Database\Seeder;

class StudyPackageSeeder extends Seeder
{
    public function run(): void
    {
        // SD Package
        $sdTryouts = SdTryout::all()->pluck('name')->take(3)->implode("\n");
        StudyPackage::updateOrCreate(
            ['name' => 'All-in-One SD 4-6'],
            [
                'price' => 50000,
                'duration' => '1 Tahun',
                'description' => 'Akses lengkap seluruh simulasi SD',
                'features' => $sdTryouts . "\nSistem Penilaian IRT\nRanking Nasional",
                'is_popular' => false
            ]
        );

        // SMP Package
        $smpTryouts = SmpTryout::all()->pluck('name')->take(3)->implode("\n");
        StudyPackage::updateOrCreate(
            ['name' => 'Juara SMP 7-9'],
            [
                'price' => 75000,
                'duration' => '1 Tahun',
                'description' => 'Persiapan masuk SMA favorit',
                'features' => $smpTryouts . "\nSistem Penilaian IRT\nRanking Nasional",
                'is_popular' => true
            ]
        );

        // SMA Package
        $smaTryouts = SmaTryout::all()->pluck('name')->take(3)->implode("\n");
        StudyPackage::updateOrCreate(
            ['name' => 'Sukses SMA 10-11'],
            [
                'price' => 100000,
                'duration' => '1 Tahun',
                'description' => 'Kuasai materi raport & ujian',
                'features' => $smaTryouts . "\nSistem Penilaian IRT\nRanking Nasional",
                'is_popular' => false
            ]
        );

        // UTBK Package
        $utbkTryouts = SmaUtbkTryout::all()->pluck('name')->take(3)->implode("\n");
        StudyPackage::updateOrCreate(
            ['name' => 'Mastery UTBK-SNBT'],
            [
                'price' => 150000,
                'duration' => '1 Tahun',
                'description' => 'Target lolos PTN impian',
                'features' => $utbkTryouts . "\nAnalisis IRT Akurat\nRanking Nasional Real-time",
                'is_popular' => true
            ]
        );

        // Alumni Package
        $alumniTryouts = AlumniTryout::all()->pluck('name')->take(3)->implode("\n");
        StudyPackage::updateOrCreate(
            ['name' => 'Ultimate Alumni Pack'],
            [
                'price' => 175000,
                'duration' => '1 Tahun',
                'description' => 'Strategi gap year paling efektif',
                'features' => $alumniTryouts . "\nKonsultasi Strategi Lolos\nAnalisis IRT & Ranking",
                'is_popular' => false
            ]
        );
    }
}
