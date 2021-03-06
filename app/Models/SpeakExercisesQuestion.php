<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpeakExercisesQuestion extends Model
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
        return $this->morphMany(MCAnswerItem::class, 'answerItemable');
    }
}
