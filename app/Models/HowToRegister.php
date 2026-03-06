<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HowToRegister extends Model
{
    protected $fillable = ['step_number', 'title', 'description', 'image', 'is_active'];
}
