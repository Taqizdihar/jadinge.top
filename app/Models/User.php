<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    // RELATION
    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function token()
    {
        return $this->hasOne(Token::class);
    }

    // HELPER
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
