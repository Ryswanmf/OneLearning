<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SnbpMajor;

class SnbpMajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $majors = [
            // UNIVERSITAS INDONESIA (UI) - SAINTEK
            ['university_name' => 'Universitas Indonesia', 'major_name' => 'Pendidikan Dokter', 'category' => 'SAINTEK', 'capacity' => 54, 'applicants' => 2134, 'passing_grade' => 87.5],
            ['university_name' => 'Universitas Indonesia', 'major_name' => 'Ilmu Komputer', 'category' => 'SAINTEK', 'capacity' => 45, 'applicants' => 1890, 'passing_grade' => 85.2],
            ['university_name' => 'Universitas Indonesia', 'major_name' => 'Sistem Informasi', 'category' => 'SAINTEK', 'capacity' => 45, 'applicants' => 1765, 'passing_grade' => 84.8],
            ['university_name' => 'Universitas Indonesia', 'major_name' => 'Teknik Industri', 'category' => 'SAINTEK', 'capacity' => 36, 'applicants' => 1540, 'passing_grade' => 83.5],
            ['university_name' => 'Universitas Indonesia', 'major_name' => 'Farmasi', 'category' => 'SAINTEK', 'capacity' => 36, 'applicants' => 1200, 'passing_grade' => 81.0],
            // UNIVERSITAS INDONESIA (UI) - SOSHUM
            ['university_name' => 'Universitas Indonesia', 'major_name' => 'Ilmu Hukum', 'category' => 'SOSHUM', 'capacity' => 81, 'applicants' => 2890, 'passing_grade' => 84.5],
            ['university_name' => 'Universitas Indonesia', 'major_name' => 'Ilmu Komunikasi', 'category' => 'SOSHUM', 'capacity' => 45, 'applicants' => 2500, 'passing_grade' => 85.0],
            ['university_name' => 'Universitas Indonesia', 'major_name' => 'Manajemen', 'category' => 'SOSHUM', 'capacity' => 54, 'applicants' => 2670, 'passing_grade' => 86.2],
            ['university_name' => 'Universitas Indonesia', 'major_name' => 'Akuntansi', 'category' => 'SOSHUM', 'capacity' => 54, 'applicants' => 2450, 'passing_grade' => 85.5],
            ['university_name' => 'Universitas Indonesia', 'major_name' => 'Hubungan Internasional', 'category' => 'SOSHUM', 'capacity' => 36, 'applicants' => 2100, 'passing_grade' => 84.8],

            // UNIVERSITAS GADJAH MADA (UGM) - SAINTEK
            ['university_name' => 'Universitas Gadjah Mada', 'major_name' => 'Kedokteran', 'category' => 'SAINTEK', 'capacity' => 52, 'applicants' => 2500, 'passing_grade' => 86.8],
            ['university_name' => 'Universitas Gadjah Mada', 'major_name' => 'Teknologi Informasi', 'category' => 'SAINTEK', 'capacity' => 40, 'applicants' => 1800, 'passing_grade' => 84.0],
            ['university_name' => 'Universitas Gadjah Mada', 'major_name' => 'Teknik Sipil', 'category' => 'SAINTEK', 'capacity' => 45, 'applicants' => 1600, 'passing_grade' => 82.5],
            ['university_name' => 'Universitas Gadjah Mada', 'major_name' => 'Arsitektur', 'category' => 'SAINTEK', 'capacity' => 45, 'applicants' => 1500, 'passing_grade' => 81.8],
            // UNIVERSITAS GADJAH MADA (UGM) - SOSHUM
            ['university_name' => 'Universitas Gadjah Mada', 'major_name' => 'Psikologi', 'category' => 'SOSHUM', 'capacity' => 67, 'applicants' => 3100, 'passing_grade' => 85.8],
            ['university_name' => 'Universitas Gadjah Mada', 'major_name' => 'Hukum', 'category' => 'SOSHUM', 'capacity' => 99, 'applicants' => 2900, 'passing_grade' => 84.0],
            ['university_name' => 'Universitas Gadjah Mada', 'major_name' => 'Manajemen', 'category' => 'SOSHUM', 'capacity' => 45, 'applicants' => 2800, 'passing_grade' => 85.5],
            ['university_name' => 'Universitas Gadjah Mada', 'major_name' => 'Ilmu Komunikasi', 'category' => 'SOSHUM', 'capacity' => 27, 'applicants' => 2200, 'passing_grade' => 84.5],

            // INSTITUT TEKNOLOGI BANDUNG (ITB)
            ['university_name' => 'Institut Teknologi Bandung', 'major_name' => 'Sekolah Teknik Elektro dan Informatika (STEI)', 'category' => 'SAINTEK', 'capacity' => 165, 'applicants' => 3800, 'passing_grade' => 88.0],
            ['university_name' => 'Institut Teknologi Bandung', 'major_name' => 'Fakultas Teknik Pertambangan dan Lingkungan (FTTM)', 'category' => 'SAINTEK', 'capacity' => 125, 'applicants' => 2500, 'passing_grade' => 85.5],
            ['university_name' => 'Institut Teknologi Bandung', 'major_name' => 'Fakultas Teknologi Industri (FTI)', 'category' => 'SAINTEK', 'capacity' => 140, 'applicants' => 2800, 'passing_grade' => 86.0],
            ['university_name' => 'Institut Teknologi Bandung', 'major_name' => 'Sekolah Bisnis dan Manajemen (SBM)', 'category' => 'SOSHUM', 'capacity' => 84, 'applicants' => 3200, 'passing_grade' => 87.5],
            ['university_name' => 'Institut Teknologi Bandung', 'major_name' => 'Fakultas Seni Rupa dan Desain (FSRD)', 'category' => 'SOSHUM', 'capacity' => 110, 'applicants' => 2100, 'passing_grade' => 83.5],

            // UNIVERSITAS PADJADJARAN (UNPAD)
            ['university_name' => 'Universitas Padjadjaran', 'major_name' => 'Pendidikan Dokter', 'category' => 'SAINTEK', 'capacity' => 75, 'applicants' => 3100, 'passing_grade' => 85.0],
            ['university_name' => 'Universitas Padjadjaran', 'major_name' => 'Teknik Informatika', 'category' => 'SAINTEK', 'capacity' => 30, 'applicants' => 1800, 'passing_grade' => 82.5],
            ['university_name' => 'Universitas Padjadjaran', 'major_name' => 'Ilmu Komunikasi', 'category' => 'SOSHUM', 'capacity' => 40, 'applicants' => 2900, 'passing_grade' => 84.0],
            ['university_name' => 'Universitas Padjadjaran', 'major_name' => 'Manajemen', 'category' => 'SOSHUM', 'capacity' => 36, 'applicants' => 2600, 'passing_grade' => 83.5],
            ['university_name' => 'Universitas Padjadjaran', 'major_name' => 'Ilmu Hukum', 'category' => 'SOSHUM', 'capacity' => 150, 'applicants' => 3500, 'passing_grade' => 82.0],

            // UNIVERSITAS BRAWIJAYA (UB)
            ['university_name' => 'Universitas Brawijaya', 'major_name' => 'Kedokteran', 'category' => 'SAINTEK', 'capacity' => 83, 'applicants' => 2800, 'passing_grade' => 84.5],
            ['university_name' => 'Universitas Brawijaya', 'major_name' => 'Teknik Informatika', 'category' => 'SAINTEK', 'capacity' => 60, 'applicants' => 2100, 'passing_grade' => 81.5],
            ['university_name' => 'Universitas Brawijaya', 'major_name' => 'Ilmu Hukum', 'category' => 'SOSHUM', 'capacity' => 180, 'applicants' => 3200, 'passing_grade' => 81.0],
            ['university_name' => 'Universitas Brawijaya', 'major_name' => 'Administrasi Bisnis', 'category' => 'SOSHUM', 'capacity' => 110, 'applicants' => 2500, 'passing_grade' => 80.5],
            
            // INSTITUT TEKNOLOGI SEPULUH NOPEMBER (ITS)
            ['university_name' => 'Institut Teknologi Sepuluh Nopember', 'major_name' => 'Teknik Informatika', 'category' => 'SAINTEK', 'capacity' => 60, 'applicants' => 2200, 'passing_grade' => 84.8],
            ['university_name' => 'Institut Teknologi Sepuluh Nopember', 'major_name' => 'Sistem Informasi', 'category' => 'SAINTEK', 'capacity' => 45, 'applicants' => 1900, 'passing_grade' => 83.5],
            ['university_name' => 'Institut Teknologi Sepuluh Nopember', 'major_name' => 'Teknik Industri', 'category' => 'SAINTEK', 'capacity' => 45, 'applicants' => 1700, 'passing_grade' => 82.0],

            // INSTITUT PERTANIAN BOGOR (IPB)
            ['university_name' => 'Institut Pertanian Bogor', 'major_name' => 'Ilmu Komputer', 'category' => 'SAINTEK', 'capacity' => 45, 'applicants' => 1600, 'passing_grade' => 82.5],
            ['university_name' => 'Institut Pertanian Bogor', 'major_name' => 'Statistika dan Sains Data', 'category' => 'SAINTEK', 'capacity' => 30, 'applicants' => 1200, 'passing_grade' => 81.0],
            ['university_name' => 'Institut Pertanian Bogor', 'major_name' => 'Bisnis', 'category' => 'SOSHUM', 'capacity' => 60, 'applicants' => 1500, 'passing_grade' => 80.0],
        ];

        foreach ($majors as $major) {
            SnbpMajor::create(array_merge($major, [
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
