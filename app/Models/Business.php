<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Business extends Model
{
    protected $fillable = [
        'title', 'slug', 'category', 'image', 'description', 'is_active'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($business) {
            if (empty($business->slug)) {
                $business->slug = Str::slug($business->title);
            }
        });
    }
}
