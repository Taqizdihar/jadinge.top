<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Totem extends Model {
    use SoftDeletes;

    protected $fillable = [
        'name', 'location_area', 'orientation', 
        'status', 'price_per_hour', 'loop_duration_seconds'
    ];

    public function packages(): BelongsToMany {
        return $this->belongsToMany(Package::class, 'package_totem');
    }

    public function orderItems(): HasMany {
        return $this->hasMany(OrderItem::class);
    }
}
