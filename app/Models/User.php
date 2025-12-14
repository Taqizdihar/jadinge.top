<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model {
    protected $fillable = [
        'name', 'email', 'username', 'password'
    ];

    protected $hidden = ['password'];

    public function orders(): HasMany {
        return $this->hasMany(Order::class);
    }

    public function verifiedPayments(): HasMany {
        return $this->hasMany(Payment::class, 'admin_id');
    }
    
    public function isAdmin(): bool {
        return $this->role === 'admin';
    }
} //
