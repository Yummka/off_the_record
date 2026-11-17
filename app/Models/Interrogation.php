<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Interrogation extends Model
{
    protected $fillable = [
        'investigation_id',
        'person_id',
        'interrogated_at',
        'title',
        'content',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'interrogated_at' => 'datetime',
        ];
    }

    // Расследование, к которому относится допрос
    public function investigation(): BelongsTo
    {
        return $this->belongsTo(Investigation::class);
    }

    // Человек, который давал показания
    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}