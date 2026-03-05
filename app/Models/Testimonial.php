<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name', 'target', 'photo', 'content', 'rating', 'is_featured'
    ];
}
