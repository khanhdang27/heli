<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpeakQuizQuestion extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answer()
    {
        return $this->hasMany(SpeakQuizAnswer::class);
    }
}
