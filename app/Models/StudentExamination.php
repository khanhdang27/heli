<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentExamination extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $guarded = [];

    const ANSWER_MC = 1;
    const ANSWER_TEXT = 2;
    const ANSWER_VIDEO = 3;

    const BASE_SCORE_PASS = 5;

    public function student()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function exam()
    {
        return $this->belongsTo(Examination::class, 'exam_id');
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
