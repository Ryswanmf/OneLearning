<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\StudyPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QuestionController extends Controller
{
    public function index(StudyPackage $paket_belajar)
    {
        $questions = $paket_belajar->questions()->orderBy('order')->get();
        return view('admin.paket_belajar.questions.index', compact('paket_belajar', 'questions'));
    }

    public function create(StudyPackage $paket_belajar)
    {
        return view('admin.paket_belajar.questions.create', compact('paket_belajar'));
    }

    public function store(Request $request, StudyPackage $paket_belajar)
    {
        $validated = $request->validate([
            'question_text' => 'required|string',
            'question_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'option_e' => 'required|string',
            'correct_answer' => 'required|in:a,b,c,d,e',
            'explanation' => 'nullable|string',
            'order' => 'required|integer',
        ]);

        if ($request->hasFile('question_image')) {
            $validated['question_image'] = $request->file('question_image')->store('questions', 'public');
        }

        $paket_belajar->questions()->create($validated);

        return redirect()->route('admin.paket-belajar.questions.index', $paket_belajar->slug)
                         ->with('success', 'Soal berhasil ditambahkan.');
    }

    public function edit(StudyPackage $paket_belajar, Question $question)
    {
        return view('admin.paket_belajar.questions.edit', compact('paket_belajar', 'question'));
    }

    public function update(Request $request, StudyPackage $paket_belajar, Question $question)
    {
        $validated = $request->validate([
            'question_text' => 'required|string',
            'question_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'option_e' => 'required|string',
            'correct_answer' => 'required|in:a,b,c,d,e',
            'explanation' => 'nullable|string',
            'order' => 'required|integer',
        ]);

        if ($request->hasFile('question_image')) {
            if ($question->question_image) {
                Storage::disk('public')->delete($question->question_image);
            }
            $validated['question_image'] = $request->file('question_image')->store('questions', 'public');
        }

        $question->update($validated);

        return redirect()->route('admin.paket-belajar.questions.index', $paket_belajar->slug)
                         ->with('success', 'Soal berhasil diperbarui.');
    }

    public function destroy(StudyPackage $paket_belajar, Question $question)
    {
        if ($question->question_image) {
            Storage::disk('public')->delete($question->question_image);
        }
        $question->delete();
        return redirect()->route('admin.paket-belajar.questions.index', $paket_belajar->slug)
                         ->with('success', 'Soal berhasil dihapus.');
    }
}
