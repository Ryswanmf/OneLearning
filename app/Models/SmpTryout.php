<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SmpTryout extends Model
{
    protected $fillable = [
        'name', 'slug', 'subject', 'question_count', 'duration_minutes', 'status'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($tryout) {
            if (empty($tryout->slug)) {
                $tryout->slug = Str::slug($tryout->name);
            }
        });
    }
}
