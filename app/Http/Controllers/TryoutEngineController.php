<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\TryoutSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TryoutEngineController extends Controller
{
    private function getModel($type)
    {
        $map = [
            'utbk' => \App\Models\UtbkTryout::class,
            'sd' => \App\Models\SdTryout::class,
            'smp' => \App\Models\SmpTryout::class,
            'sma' => \App\Models\SmaTryout::class,
            'sma-utbk' => \App\Models\SmaUtbkTryout::class,
            'alumni' => \App\Models\AlumniTryout::class,
            'paket' => \App\Models\StudyPackage::class,
        ];
        return $map[$type] ?? null;
    }

    private function getTryout($type, $id)
    {
        $modelClass = $this->getModel($type);
        if (!$modelClass) abort(404);
        return $modelClass::where('id', $id)->orWhere('slug', $id)->firstOrFail();
    }

    // Pengecekan Akses
    private function checkAccess($tryout, $type)
    {
        $user = Auth::user();
        if ($tryout->price > 0 && !$user->hasAccessTo($tryout)) {
            return false;
        }
        return true;
    }

    public function showInstructions($type, $id)
    {
        $tryout = $this->getTryout($type, $id);
        
        if (!$this->checkAccess($tryout, $type)) {
            return redirect()->route('order.checkout', ['type' => $type, 'id' => $id])
                             ->with('error', 'Silakan lakukan pembayaran untuk mengakses paket tryout ini.');
        }

        $questionsCount = $tryout->questions()->count();
        return view('landing.tryout.instructions', [
            'paket_belajar' => $tryout,
            'type' => $type,
            'id' => $id,
            'questionsCount' => $questionsCount
        ]);
    }

    public function start($type, $id)
    {
        $tryout = $this->getTryout($type, $id);
        
        if (!$this->checkAccess($tryout, $type)) {
            return redirect()->route('order.checkout', ['type' => $type, 'id' => $id]);
        }

        $user = Auth::user();
        $submission = TryoutSubmission::firstOrCreate(
            ['user_id' => $user->id, 'tryoutable_id' => $tryout->id, 'tryoutable_type' => get_class($tryout), 'status' => 'ongoing'],
            ['started_at' => now(), 'answers' => []]
        );
        $questions = $tryout->questions()->orderBy('order')->get();
        return view('landing.tryout.engine', [
            'paket_belajar' => $tryout, 'type' => $type, 'id' => $id, 'questions' => $questions, 'submission' => $submission
        ]);
    }

    public function saveAnswer(Request $request, $type, $id)
    {
        $tryout = $this->getTryout($type, $id);
        $submission = TryoutSubmission::where('user_id', Auth::id())->where('tryoutable_id', $tryout->id)->where('tryoutable_type', get_class($tryout))->where('status', 'ongoing')->first();
        if (!$submission) return response()->json(['success' => false], 403);
        
        $answers = $submission->answers ?? [];
        $answers['q' . $request->question_id] = $request->answer;
        
        $submission->update(['answers' => $answers]);
        return response()->json(['success' => true]);
    }

    public function finish($type, $id)
    {
        $tryout = $this->getTryout($type, $id);
        $submission = TryoutSubmission::where('user_id', Auth::id())->where('tryoutable_id', $tryout->id)->where('tryoutable_type', get_class($tryout))->where('status', 'ongoing')->first();
        if (!$submission) return redirect()->route('dashboard');
        
        $userAnswers = $submission->answers ?? [];
        $questions = $tryout->questions;
        $correctCount = 0;
        
        // Analisis Per Topik
        $topicAnalysis = [];

        foreach ($questions as $q) {
            $topic = $q->topic ?? 'Umum';
            if (!isset($topicAnalysis[$topic])) {
                $topicAnalysis[$topic] = ['correct' => 0, 'total' => 0];
            }
            $topicAnalysis[$topic]['total']++;

            $key = 'q' . $q->id;
            if (isset($userAnswers[$key]) && strtolower($userAnswers[$key]) === strtolower($q->correct_answer)) {
                $correctCount++;
                $topicAnalysis[$topic]['correct']++;
            }
        }

        $score = ($questions->count() > 0) ? round(($correctCount / $questions->count()) * 1000) : 0;
        
        $submission->update([
            'status' => 'completed', 
            'finished_at' => now(), 
            'score' => $score,
            'score_metadata' => [
                'correct_count' => $correctCount,
                'total_questions' => $questions->count(),
                'topic_analysis' => $topicAnalysis
            ]
        ]);

        return redirect()->route('tryout.result', [$type, $id]);
    }

    public function showResult($type, $id)
    {
        $tryout = $this->getTryout($type, $id);
        $submission = TryoutSubmission::where('user_id', Auth::id())->where('tryoutable_id', $tryout->id)->where('tryoutable_type', get_class($tryout))->where('status', 'completed')->latest()->first();
        if (!$submission) return redirect()->route('dashboard');
        
        $questions = $tryout->questions()->orderBy('order')->get();
        $userAnswers = $submission->answers ?? [];
        $stats = ['correct' => 0, 'wrong' => 0, 'empty' => 0, 'total' => $questions->count()];
        
        // Jika belum ada metadata (tryout lama), hitung manual
        $topicAnalysis = $submission->score_metadata['topic_analysis'] ?? [];
        
        foreach ($questions as $q) {
            $ans = $userAnswers['q' . $q->id] ?? null;
            if (!$ans) $stats['empty']++;
            elseif (strtolower($ans) === strtolower($q->correct_answer)) $stats['correct']++;
            else $stats['wrong']++;

            // Fallback analisis topik untuk tryout lama
            if (empty($topicAnalysis)) {
                $topic = $q->topic ?? 'Umum';
                if (!isset($topicAnalysis[$topic])) $topicAnalysis[$topic] = ['correct' => 0, 'total' => 0];
                $topicAnalysis[$topic]['total']++;
                if ($ans && strtolower($ans) === strtolower($q->correct_answer)) $topicAnalysis[$topic]['correct']++;
            }
        }

        return view('landing.tryout.result', [
            'paket_belajar' => $tryout, 'submission' => $submission, 'questions' => $questions, 
            'userAnswers' => $userAnswers, 'stats' => $stats, 'type' => $type, 'id' => $id,
            'topicAnalysis' => $topicAnalysis
        ]);
    }

    public function showCertificate($type, $id)
    {
        $tryout = $this->getTryout($type, $id);
        $submission = TryoutSubmission::where('user_id', Auth::id())
            ->where('tryoutable_id', $tryout->id)
            ->where('tryoutable_type', get_class($tryout))
            ->where('status', 'completed')
            ->latest()
            ->firstOrFail();

        return view('landing.tryout.certificate', compact('tryout', 'submission'));
    }
}
