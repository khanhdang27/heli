<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WritingAssessmentQuestion extends Model
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
        return $this->hasMany(WritingAssessmentAnswer::class, 'w_a_question_id');
    }
}
