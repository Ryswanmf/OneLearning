<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UtbkTryout extends Model
{
    protected $fillable = [
        'name', 'slug', 'category', 'question_count', 
        'duration_minutes', 'price', 'status'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(fn ($item) => $item->slug = $item->slug ?? Str::slug($item->name));
    }

    public function questions()
    {
        return $this->morphMany(Question::class, 'questionable');
    }
}
