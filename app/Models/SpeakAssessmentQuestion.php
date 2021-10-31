<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\SpeakAssessmentAnswer;

class SpeakAssessmentQuestion extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answers()
    {
        return $this->hasMany(SpeakAssessmentAnswer::class, 's_a_question_id');
    }
}
