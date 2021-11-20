<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Examination extends Model
{
    use SoftDeletes;
    protected $table = 'exams';

    public $timestamps = true;

    protected $guarded = [];

    //Make it available in the json response
    protected $appends = ['model_name'];

    //implement the attribute
    public function getModelNameAttribute()
    {
        return 'Examination';
    }

    const BASE_SCORE_MC = 1;

    const ASSESSMENT = 1;
    const EXERCISES = 2;
    const QUIZ = 3;

    const TYPES = [
        // self::ASSESSMENT => 'Assessment',
        self::EXERCISES => 'Exercises',
        self::QUIZ => 'Quiz',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function quiz()
    {
        return $this->hasMany(Quiz::class, 'exam_id');
    }

    public function passGrade()
    {
        return $this->hasMany(PassGrade::class);
    }
}