<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExamResult extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_id',
        'trainee_id',
        'exam_status'
    ];
    public function trainee(): BelongsTo
    {
        return $this->belongsTo(Trainee::class);
    }
    public function exam(): BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }
    public function examResiltDetails(): HasMany
    {
        return $this->hasMany(ExamResultDetails::class);
    }

}
