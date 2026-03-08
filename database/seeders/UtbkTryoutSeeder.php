<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UtbkTryout;
use Illuminate\Support\Str;

class UtbkTryoutSeeder extends Seeder
{
    public function run(): void
    {
        $tryouts = [
            [
                'name' => 'Tryout Akbar UTBK 2024 - Jilid I',
                'category' => 'TPS & Literasi',
                'question_count' => 155,
                'duration_minutes' => 195,
                'price' => 0,
                'status' => 'published',
            ],
            [
                'name' => 'Tryout Akbar UTBK 2024 - Jilid II',
                'category' => 'TPS & Literasi',
                'question_count' => 155,
                'duration_minutes' => 195,
                'price' => 25000,
                'status' => 'published',
            ],
            [
                'name' => 'Simulasi SNBT Spesialis Penalaran Matematika',
                'category' => 'Spesialis',
                'question_count' => 20,
                'duration_minutes' => 30,
                'price' => 15000,
                'status' => 'published',
            ],
            [
                'name' => 'Tryout Mandiri Premium UI / ITB / UGM',
                'category' => 'Premium',
                'question_count' => 100,
                'duration_minutes' => 120,
                'price' => 49000,
                'status' => 'published',
            ],
        ];

        foreach ($tryouts as $tryout) {
            UtbkTryout::updateOrCreate(
                ['slug' => Str::slug($tryout['name'])],
                $tryout
            );
        }
    }
}
