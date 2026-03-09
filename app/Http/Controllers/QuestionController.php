<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\StudyPackage;
use App\Models\UtbkTryout;
use App\Models\SdTryout;
use App\Models\SmpTryout;
use App\Models\SmaTryout;
use App\Models\SmaUtbkTryout;
use App\Models\AlumniTryout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Imports\QuestionsImport;
use Maatwebsite\Excel\Facades\Excel;

class QuestionController extends Controller
{
    private function getModel($type, $id)
    {
        $map = [
            'paket' => StudyPackage::class,
            'utbk' => UtbkTryout::class,
            'sd' => SdTryout::class,
            'smp' => SmpTryout::class,
            'sma' => SmaTryout::class,
            'sma-utbk' => SmaUtbkTryout::class,
            'alumni' => AlumniTryout::class,
        ];

        if (!isset($map[$type])) abort(404);

        $model = $map[$type];
        // Handle both ID and Slug
        if (is_numeric($id)) {
            return $model::findOrFail($id);
        }
        return $model::where('slug', $id)->firstOrFail();
    }

    public function index($type, $id)
    {
        $owner = $this->getModel($type, $id);
        $questions = $owner->questions()->orderBy('order')->get();
        return view('admin.questions.index', compact('owner', 'questions', 'type', 'id'));
    }

    public function create($type, $id)
    {
        $owner = $this->getModel($type, $id);
        return view('admin.questions.create', compact('owner', 'type', 'id'));
    }

    public function import(Request $request, $type, $id)
    {
        $owner = $this->getModel($type, $id);
        
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls,csv|max:5120'
        ]);

        try {
            Excel::import(new QuestionsImport($owner->id, $owner->getMorphClass()), $request->file('excel_file'));
            return redirect()->route('admin.questions.index', [$type, $id])
                             ->with('success', 'Ratusan soal berhasil diimpor dari Excel!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal mengimpor file: ' . $e->getMessage());
        }
    }

    public function store(Request $request, $type, $id)
    {
        $owner = $this->getModel($type, $id);

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

        $owner->questions()->create($validated);

        return redirect()->route('admin.questions.index', [$type, $id])
                         ->with('success', 'Soal berhasil ditambahkan.');
    }

    public function edit($type, $id, Question $question)
    {
        $owner = $this->getModel($type, $id);
        return view('admin.questions.edit', compact('owner', 'question', 'type', 'id'));
    }

    public function update(Request $request, $type, $id, Question $question)
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

        return redirect()->route('admin.questions.index', [$type, $id])
                         ->with('success', 'Soal berhasil diperbarui.');
    }

    public function destroy($type, $id, Question $question)
    {
        if ($question->question_image) {
            Storage::disk('public')->delete($question->question_image);
        }
        $question->delete();
        return redirect()->route('admin.questions.index', [$type, $id])
                         ->with('success', 'Soal berhasil dihapus.');
    }
}
