<?php

namespace App\Http\Controllers;

use App\Models\StudyPackage;
use App\Models\Question;
use App\Models\TryoutSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TryoutEngineController extends Controller
{
    public function showInstructions(StudyPackage $paket_belajar)
    {
        $questionsCount = $paket_belajar->questions()->count();
        return view('landing.tryout.instructions', compact('paket_belajar', 'questionsCount'));
    }

    public function start(StudyPackage $paket_belajar)
    {
        $user = Auth::user();
        $submission = TryoutSubmission::firstOrCreate(
            [
                'user_id' => $user->id,
                'study_package_id' => $paket_belajar->id,
                'status' => 'ongoing'
            ],
            [
                'started_at' => now(),
                'answers' => json_encode([])
            ]
        );

        $questions = $paket_belajar->questions()->orderBy('order')->get();
        return view('landing.tryout.engine', compact('paket_belajar', 'questions', 'submission'));
    }

    public function saveAnswer(Request $request, StudyPackage $paket_belajar)
    {
        $submission = TryoutSubmission::where('user_id', Auth::id())
            ->where('study_package_id', $paket_belajar->id)
            ->where('status', 'ongoing')
            ->first();

        if (!$submission) return response()->json(['success' => false], 403);

        $answers = json_decode($submission->answers, true) ?? [];
        $answers['q' . $request->question_id] = $request->answer;
        $submission->update(['answers' => json_encode($answers)]);

        return response()->json(['success' => true]);
    }

    public function finish(StudyPackage $paket_belajar)
    {
        $submission = TryoutSubmission::where('user_id', Auth::id())
            ->where('study_package_id', $paket_belajar->id)
            ->where('status', 'ongoing')
            ->first();

        if (!$submission) return redirect()->route('dashboard');

        $userAnswers = json_decode($submission->answers, true) ?? [];
        $questions = $paket_belajar->questions;
        
        $correctCount = 0;
        foreach ($questions as $q) {
            $key = 'q' . $q->id;
            if (isset($userAnswers[$key]) && $userAnswers[$key] === $q->correct_answer) {
                $correctCount++;
            }
        }

        $score = ($questions->count() > 0) ? round(($correctCount / $questions->count()) * 1000) : 0;

        $submission->update([
            'status' => 'completed',
            'finished_at' => now(),
            'score' => $score
        ]);

        return redirect()->route('tryout.result', $paket_belajar->slug);
    }

    public function showResult(StudyPackage $paket_belajar)
    {
        $submission = TryoutSubmission::where('user_id', Auth::id())
            ->where('study_package_id', $paket_belajar->id)
            ->where('status', 'completed')
            ->latest()
            ->first();

        if (!$submission) return redirect()->route('dashboard');

        $questions = $paket_belajar->questions()->orderBy('order')->get();
        $userAnswers = json_decode($submission->answers, true) ?? [];

        // Hitung statistik ringkas
        $stats = [
            'correct' => 0,
            'wrong' => 0,
            'empty' => 0,
            'total' => $questions->count()
        ];

        foreach ($questions as $q) {
            $ans = $userAnswers['q' . $q->id] ?? null;
            if (!$ans) $stats['empty']++;
            elseif ($ans === $q->correct_answer) $stats['correct']++;
            else $stats['wrong']++;
        }

        return view('landing.tryout.result', compact('paket_belajar', 'submission', 'questions', 'userAnswers', 'stats'));
    }
}
