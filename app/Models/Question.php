<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'study_package_id', 'question_text', 'question_image',
        'option_a', 'option_b', 'option_c', 'option_d', 'option_e',
        'correct_answer', 'explanation', 'order'
    ];

    public function studyPackage()
    {
        return $this->belongsTo(StudyPackage::class);
    }
}
