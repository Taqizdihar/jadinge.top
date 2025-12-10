<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model {
    use SoftDeletes;

    protected $fillable = [
        'name', 'duration_seconds', 'price', 'description'
    ];

    public function totems(): BelongsToMany {
        return $this->belongsToMany(Totem::class, 'package_totem');
    }

    public function orders(): HasMany {
        return $this->hasMany(Order::class);
    }
}
