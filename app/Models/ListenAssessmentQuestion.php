<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListenAssessmentQuestion extends Model
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

    public function findAnswerById($id)
    {
        return $this->answers->where('id', $id)->first();
    }
}
