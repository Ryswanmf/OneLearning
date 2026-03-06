<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SnbpMajor extends Model
{
    protected $fillable = [
        'university_name', 'major_name', 'category', 'capacity', 'applicants', 'passing_grade', 'is_active'
    ];
}
