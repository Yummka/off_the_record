<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Person extends Model
{
    protected $fillable = [
        'investigation_id',
        'name',
        'role',
        'age',
        'description',
        'notes',
    ];

    public function investigation(): BelongsTo
    {
        return $this->belongsTo(Investigation::class);
    }

    public function evidence(): HasMany
    {
        return $this->hasMany(Evidence::class);
    }

    public function interrogations(): HasMany
    {
        return $this->hasMany(Interrogation::class);
    }
}