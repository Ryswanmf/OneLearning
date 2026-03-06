<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BusinessService extends Model
{
    protected $fillable = ['title', 'slug', 'image', 'description', 'is_active'];

    protected static function boot()
    {
        parent::boot();
        static::creating(fn($item) => $item->slug = $item->slug ?? Str::slug($item->title));
    }
}
