<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Program extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'trainer_id'
    ];
    public function trainer(): BelongsTo
    {
        return $this->belongsTo(Trainer::class);
    }
    public function exams(): HasMany
    {
        return $this->hasMany(Exam::class);
    }
}
