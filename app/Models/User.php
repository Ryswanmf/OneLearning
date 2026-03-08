<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role'];
    protected $hidden = ['password', 'remember_token'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    // Cek apakah user memiliki akses ke suatu model
    public function hasAccessTo($model)
    {
        $morphClass = $model->getMorphClass();
        
        // Cek di tabel user_study_package (Akses yang sudah aktif)
        $hasPackage = \Illuminate\Support\Facades\DB::table('user_study_package')
            ->where('user_id', $this->id)
            ->where('accessible_id', $model->id)
            ->where('accessible_type', $morphClass)
            ->where(function ($query) {
                $query->whereNull('expired_at')->orWhere('expired_at', '>', now());
            })
            ->exists();

        if ($hasPackage) return true;

        // Cek di tabel transactions (Jika pembayaran sudah sukses tapi belum tercatat di user_study_package)
        return \App\Models\Transaction::where('user_id', $this->id)
            ->where('buyable_id', $model->id)
            ->where('buyable_type', $morphClass)
            ->where('status', 'success')
            ->exists();
    }

    public function accesses()
    {
        return $this->hasMany(Transaction::class)->where('status', 'success');
    }
}
