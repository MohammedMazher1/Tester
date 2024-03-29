<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date_of_preTest',
        'date_of_postTest',
        'trainer_id'
    ];
    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
    public function examResult(): HasMany
    {
        return $this->hasMany(ExamResult::class);
    }
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
