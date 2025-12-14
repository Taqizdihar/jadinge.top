<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model {
    protected $fillable = [
        'user_id', 'package_id', 'total_price', 
        'content_file', 'content_type', 'content_duration', 
        'status', 'rejection_note'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function package(): BelongsTo {
        return $this->belongsTo(Package::class);
    }

    public function items(): HasMany {
        return $this->hasMany(OrderItem::class);
    }

    public function payment(): HasOne {
        return $this->hasOne(Payment::class);
    }
}
