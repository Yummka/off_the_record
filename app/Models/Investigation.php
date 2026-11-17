<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Investigation extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',
    ];

    // Владелец расследования
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Персонажи расследования
    public function people(): HasMany
    {
        return $this->hasMany(Person::class);
    }

    // Улики расследования
    public function evidence(): HasMany
    {
        return $this->hasMany(Evidence::class);
    }

    // Допросы и показания
    public function interrogations(): HasMany
    {
        return $this->hasMany(Interrogation::class);
    }

    // Места, связанные с расследованием
    public function locations(): BelongsToMany
    {
        return $this->belongsToMany(
            Location::class,
            'investigation_location'
        )->withPivot('notes', 'discovered_at');
    }
}