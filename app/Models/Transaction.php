<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'reference_id', 'user_id', 'buyable_id', 'buyable_type',
        'amount', 'payment_method', 'proof_of_payment', 
        'status', 'snap_token', 'admin_note'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function buyable()
    {
        return $this->morphTo();
    }
}
