<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    protected $hidden = [
        'password'
    ];

    // RELATION dari versi HEAD
    public function ads(): HasMany
    {
        return $this->hasMany(Ad::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function token()
    {
        return $this->hasOne(Token::class);
    }

    // RELATION tambahan dari versi remote
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function verifiedPayments(): HasMany
    {
        return $this->hasMany(Payment::class, 'admin_id');
    }

    // HELPER
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }
}
