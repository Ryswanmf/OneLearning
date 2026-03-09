<?php

namespace Database\Seeders;

use App\Models\StudyPackage;
use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        $packages = StudyPackage::all();
        
        foreach ($packages as $package) {
            $questions = [];
            
            if (str_contains($package->slug, 'sd')) {
                $questions = $this->getSdQuestions();
            } elseif (str_contains($package->slug, 'smp')) {
                $questions = $this->getSmpQuestions();
            } elseif (str_contains($package->slug, 'sma')) {
                $questions = $this->getSmaQuestions();
            } elseif (str_contains($package->slug, 'utbk') || str_contains($package->slug, 'alumni')) {
                $questions = $this->getUtbkQuestions();
            }

            foreach ($questions as $q) {
                // Check if question already exists for this package to avoid duplicates
                $exists = $package->questions()->where('question_text', $q['question_text'])->exists();
                if (!$exists) {
                    $package->questions()->create($q);
                }
            }
        }
    }

    private function getSdQuestions(): array
    {
        return [
            [
                'question_text' => 'Berapakah hasil dari 15 x 4 + 20?',
                'option_a' => '60', 'option_b' => '70', 'option_c' => '80', 'option_d' => '90', 'option_e' => '100',
                'correct_answer' => 'c', 'topic' => 'Matematika Dasar', 'order' => 1
            ],
            [
                'question_text' => 'Planet yang dikenal sebagai planet merah adalah...',
                'option_a' => 'Venus', 'option_b' => 'Mars', 'option_c' => 'Jupiter', 'option_d' => 'Saturnus', 'option_e' => 'Merkurius',
                'correct_answer' => 'b', 'topic' => 'IPA', 'order' => 2
            ],
        ];
    }

    private function getSmpQuestions(): array
    {
        return [
            [
                'question_text' => 'Jika x + 5 = 12, maka nilai x adalah...',
                'option_a' => '5', 'option_b' => '6', 'option_c' => '7', 'option_d' => '8', 'option_e' => '9',
                'correct_answer' => 'c', 'topic' => 'Aljabar', 'order' => 1
            ],
            [
                'question_text' => 'Zat yang berfungsi sebagai penghasil energi utama bagi tubuh adalah...',
                'option_a' => 'Protein', 'option_b' => 'Lemak', 'option_c' => 'Vitamin', 'option_d' => 'Karbohidrat', 'option_e' => 'Mineral',
                'correct_answer' => 'd', 'topic' => 'Biologi', 'order' => 2
            ],
        ];
    }

    private function getSmaQuestions(): array
    {
        return [
            [
                'question_text' => 'Turunan pertama dari f(x) = 3x^2 + 5x adalah...',
                'option_a' => '3x + 5', 'option_b' => '6x + 5', 'option_c' => '6x', 'option_d' => 'x^2 + 5', 'option_e' => '3x + 2',
                'correct_answer' => 'b', 'topic' => 'Kalkulus', 'order' => 1
            ],
            [
                'question_text' => 'Organisme yang mampu membuat makanannya sendiri disebut...',
                'option_a' => 'Heterotrof', 'option_b' => 'Saprofit', 'option_c' => 'Autotrof', 'option_d' => 'Parasit', 'option_e' => 'Detritivor',
                'correct_answer' => 'c', 'topic' => 'Biologi SMA', 'order' => 2
            ],
        ];
    }

    private function getUtbkQuestions(): array
    {
        return [
            [
                'question_text' => 'Penalaran Umum: Jika semua bunga adalah tanaman, dan mawar adalah bunga, maka...',
                'option_a' => 'Semua tanaman adalah mawar', 'option_b' => 'Mawar bukan tanaman', 'option_c' => 'Mawar adalah tanaman', 'option_d' => 'Tanaman bukan bunga', 'option_e' => 'Tidak ada kesimpulan',
                'correct_answer' => 'c', 'topic' => 'Penalaran Umum', 'order' => 1
            ],
            [
                'question_text' => 'Pengetahuan Kuantitatif: 1, 4, 9, 16, ... Kelanjutan deret tersebut adalah...',
                'option_a' => '20', 'option_b' => '25', 'option_c' => '30', 'option_d' => '35', 'option_e' => '40',
                'correct_answer' => 'b', 'topic' => 'Pengetahuan Kuantitatif', 'order' => 2
            ],
        ];
    }
}
