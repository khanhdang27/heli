<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpeakQuizAnswer extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(SpeakQuizQuestion::class);
    }
}
