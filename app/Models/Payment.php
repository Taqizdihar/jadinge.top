<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    // Gabungkan semua field yang ingin di-fillable
    protected $fillable = [
        'user_id',      // dari versi HEAD
        'ad_id',        // dari versi HEAD
        'invoice',      // dari versi HEAD
        'amount',       // dari versi HEAD
        'method',       // dari versi HEAD
        'status',       // kedua versi
        'proof',        // dari versi HEAD
        'order_id',     // dari versi remote
        'proof_file',   // dari versi remote
        'payment_date', // dari versi remote
        'admin_id'      // dari versi remote
    ];

    // Cast untuk field date
    protected $casts = [
        'payment_date' => 'datetime',
    ];

    // RELATION
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function ad(): BelongsTo
    {
        return $this->belongsTo(Ad::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function verifier(): BelongsTo
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
