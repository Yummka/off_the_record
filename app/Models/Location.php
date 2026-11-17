<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    protected $fillable = [
        'name',
        'type',
        'address',
        'description',
        'map_x',
        'map_y',
    ];

    // Расследования, в которых встречается это место
    public function investigations(): BelongsToMany
    {
        return $this->belongsToMany(
            Investigation::class,
            'investigation_location'
        )->withPivot('notes', 'discovered_at');
    }

    // Улики, найденные в этом месте
    public function evidence(): HasMany
    {
        return $this->hasMany(Evidence::class);
    }
}