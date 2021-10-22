<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListenAssessmentQuestion extends Model
{
    use SoftDeletes;

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answers()
    {
        return $this->hasMany(ListenAssessmentAnswer::class);
    }
}
