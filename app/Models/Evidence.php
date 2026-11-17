<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evidence extends Model
{
    protected $fillable = [
        'investigation_id',
        'location_id',
        'person_id',
        'title',
        'type',
        'description',
        'notes',
        'file_path',
    ];

    // Расследование, которому принадлежит улика
    public function investigation(): BelongsTo
    {
        return $this->belongsTo(Investigation::class);
    }

    // Место обнаружения
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    // Персонаж, с которым связана улика
    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}