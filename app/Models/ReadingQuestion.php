<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReadingQuestion extends Model
{
    use SoftDeletes;

    protected $table = 'reading_questions';

    public $timestamps = true;
    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answers()
    {
        return $this->hasMany(ReadingAnswer::class);
    }

    public function findAnswerById($id)
    {
        return $this->answers->where('id', $id)->first();
    }
}
