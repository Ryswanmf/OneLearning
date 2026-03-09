<?php

namespace Database\Seeders;

use App\Models\StudyPackage;
use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        $package = StudyPackage::where('slug', 'all-in-one-sd-4-6')->first();
        
        if ($package) {
            $questions = [
                [
                    'question_text' => 'Hasil dari 125 + 75 adalah...',
                    'option_a' => '150',
                    'option_b' => '175',
                    'option_c' => '200',
                    'option_d' => '225',
                    'option_e' => '250',
                    'correct_answer' => 'c',
                    'order' => 1
                ],
                [
                    'question_text' => 'Hewan yang memakan tumbuhan disebut...',
                    'option_a' => 'Karnivora',
                    'option_b' => 'Herbivora',
                    'option_c' => 'Omnivora',
                    'option_d' => 'Insektivora',
                    'option_e' => 'Mamalia',
                    'correct_answer' => 'b',
                    'order' => 2
                ],
                [
                    'question_text' => 'Ibukota negara Indonesia adalah...',
                    'option_a' => 'Bandung',
                    'option_b' => 'Surabaya',
                    'option_c' => 'Medan',
                    'option_d' => 'Jakarta',
                    'option_e' => 'Semarang',
                    'correct_answer' => 'd',
                    'order' => 3
                ]
            ];

            foreach ($questions as $q) {
                $package->questions()->create($q);
            }
        }
    }
}
