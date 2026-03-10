<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class StudyPackage extends Model
{
    protected $fillable = [
        'name', 'slug', 'price', 'duration', 'duration_minutes', 'description', 
        'features', 'is_popular', 'is_active'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(fn ($package) => $package->slug = $package->slug ?? Str::slug($package->name));
    }

    public function questions()
    {
        return $this->morphMany(Question::class, 'questionable');
    }
}
