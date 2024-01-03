<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class ExamResultDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_id',
        'option_id',
    ];
    public function examResult(): BelongsTo
    {
        return $this->belongsTo(ExamResult::class);
    }
    public function option(): BelongsTo
    {
        return $this->belongsTo(Option::class);
    }
}
