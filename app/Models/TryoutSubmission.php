<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TryoutSubmission extends Model
{
    protected $fillable = [
        'user_id', 'tryoutable_id', 'tryoutable_type', 
        'answers', 'score', 'started_at', 'finished_at', 'status'
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tryoutable()
    {
        return $this->morphTo();
    }
}
