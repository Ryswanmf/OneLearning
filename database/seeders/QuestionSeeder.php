<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\UtbkTryout;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        // Isi Jilid I
        $utbk1 = UtbkTryout::where('slug', 'tryout-akbar-utbk-2024-jilid-i')->first();
        if ($utbk1 && $utbk1->questions()->count() == 0) {
            $this->createSample($utbk1);
        }

        // Isi Jilid II
        $utbk2 = UtbkTryout::where('slug', 'tryout-akbar-utbk-2024-jilid-ii')->first();
        if ($utbk2 && $utbk2->questions()->count() == 0) {
            $this->createSample($utbk2);
        }
    }

    private function createSample($model)
    {
        $questions = [
            [
                'question_text' => 'Berapakah hasil dari 15% dari 200?',
                'option_a' => '20', 'option_b' => '25', 'option_c' => '30', 'option_d' => '35', 'option_e' => '40',
                'correct_answer' => 'c', 'explanation' => '15/100 * 200 = 30.', 'order' => 1
            ],
            [
                'question_text' => 'Antonim dari kata "Pramuria" adalah...',
                'option_a' => 'Wanita', 'option_b' => 'Pelayan', 'option_c' => 'Tuan Rumah', 'option_d' => 'Pramupintu', 'option_e' => 'Pramuniaga',
                'correct_answer' => 'c', 'explanation' => 'Pramuria adalah pelayan hiburan, lawan katanya berkaitan dengan pemilik/tuan rumah.', 'order' => 2
            ]
        ];
        foreach ($questions as $q) {
            $model->questions()->create($q);
        }
    }
}
