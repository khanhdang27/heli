<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use SoftDeletes;
    protected $table = 'quizzes';

    public $timestamps = true;

    protected $guarded = [];

    public function exams()
    {
        return $this->belongsTo(Examination::class);
    }

    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
