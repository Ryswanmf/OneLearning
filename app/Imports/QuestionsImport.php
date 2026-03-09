<?php

namespace App\Imports;

use App\Models\Question;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QuestionsImport implements ToModel, WithHeadingRow
{
    private $questionableId;
    private $questionableType;

    public function __construct($questionableId, $questionableType)
    {
        $this->questionableId = $questionableId;
        $this->questionableType = $questionableType;
    }

    public function model(array $row)
    {
        // Pastikan baris memiliki pertanyaan
        if (!isset($row['pertanyaan']) || empty($row['pertanyaan'])) {
            return null;
        }

        return new Question([
            'questionable_id'   => $this->questionableId,
            'questionable_type' => $this->questionableType,
            'question_text'     => $row['pertanyaan'],
            'topic'             => $row['topik'] ?? 'Umum',
            'option_a'          => $row['opsi_a'] ?? '',
            'option_b'          => $row['opsi_b'] ?? '',
            'option_c'          => $row['opsi_c'] ?? '',
            'option_d'          => $row['opsi_d'] ?? '',
            'option_e'          => $row['opsi_e'] ?? '',
            'correct_answer'    => strtolower($row['kunci_jawaban'] ?? 'a'),
            'explanation'       => $row['pembahasan'] ?? '',
            'order'             => $row['urutan'] ?? 0,
        ]);
    }
}
