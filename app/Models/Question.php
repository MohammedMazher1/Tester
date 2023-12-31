<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'exam_id'
    ];
    public function exam(): BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }
    public function options(): HasMany
    {
        return $this->hasMany(Option::class);
    }
}
