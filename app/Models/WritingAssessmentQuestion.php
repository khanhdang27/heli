<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WritingAssessmentQuestion extends Model
{
    use SoftDeletes;

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answer()
    {
        return $this->hasMany(WritingAssessmentAnswer::class);
    }
}
