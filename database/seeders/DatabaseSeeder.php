<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            SettingSeeder::class,
            TermSeeder::class,
            PrivacyPolicySeeder::class,
            FaqSeeder::class,
            AboutSeeder::class,
            HowToRegisterSeeder::class,
            TestimonialSeeder::class,
            BlogSeeder::class,
            StudyPackageSeeder::class,
            SnbpMajorSeeder::class,
            QuestionSeeder::class,
            SdMathQuestionsSeeder::class,
            SdIpaQuestionsSeeder::class,
            SdAnQuestionsSeeder::class,
            SmpEnglishQuestionsSeeder::class,
            SmpMathIpaQuestionsSeeder::class,
            SmpUsQuestionsSeeder::class,
            SmaPhysicsQuestionsSeeder::class,
            SmaBioChemQuestionsSeeder::class,
            SmaPskkQuestionsSeeder::class,
            Sma12TpsQuestionsSeeder::class,
            Sma12SoshumSaintekQuestionsSeeder::class,
            Sma12MasteryQuestionsSeeder::class,
            AlumniRestartQuestionsSeeder::class,
            BusinessServiceSeeder::class,
            FutureEducatorSeeder::class,
        ]);
    }
}
