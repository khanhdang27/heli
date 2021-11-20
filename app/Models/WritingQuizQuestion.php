<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WritingQuizQuestion extends Model
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
    //     return $this->hasMany(WritingQuizAnswer::class);
    // }
    public function answers()
    {
        return $this->morphMany(MCAnswerItem::class, 'answerItemable');
    }
}