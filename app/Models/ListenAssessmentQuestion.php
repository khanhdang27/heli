<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListenAssessmentQuestion extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    protected $guarded = [];

    const PART_1 = 1;
    const PART_2 = 2;
    const PART = [
        self::PART_1 => 'Part 1',
        self::PART_2 => 'Part 2'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    // public function answers()
    // {
    //     return $this->hasMany(ListenAssessmentAnswer::class, 'l_a_question_id');
    // }

    public function answers()
    {
        return $this->morphMany(MCAnswerItem::class, 'answerItemable');
    }

    public function findAnswerById($id)
    {
        return $this->answers->where('id', $id)->first();
    }
}