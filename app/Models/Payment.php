<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model {
    protected $fillable = [
        'order_id', 'proof_file', 'payment_date', 
        'status', 'admin_id'
    ];

    protected $casts = [
        'payment_date' => 'datetime',
    ];

    public function order(): BelongsTo {
        return $this->belongsTo(Order::class);
    }

    public function verifier(): BelongsTo {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
