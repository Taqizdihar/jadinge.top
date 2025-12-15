<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Token extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total',
        'used'
    ];

    // RELATION
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // HELPER
    public function getRemainingAttribute()
    {
        return $this->total - $this->used;
    }
}
