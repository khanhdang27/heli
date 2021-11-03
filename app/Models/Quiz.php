<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use SoftDeletes;
    protected $table = 'quizzes';

    const SET_1 = 1;
    const SET_2 = 2;
    const SET_3 = 3;
    const SET_4 = 4;

    const SET_LIST = [
        self::SET_1 => 'Set 1',
        self::SET_2 => 'Set 2',
        self::SET_3 => 'Set 3',
        self::SET_4 => 'Set 4'
    ];

    public $timestamps = true;

    protected $guarded = [];

    public function exams()
    {
        return $this->belongsTo(Examination::class, 'exam_id');
    }

    public function question()
    {
        return $this->hasMany(Question::class);
    }

    public function passage()
    {
        return $this->hasOne(Passage::class);
    }
}
