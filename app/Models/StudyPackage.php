<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class StudyPackage extends Model
{
    protected $fillable = [
        'title', 'slug', 'category', 'price', 'description', 
        'is_featured', 'package_count', 'duration'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(fn ($package) => $package->slug = $package->slug ?? Str::slug($package->title));
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
