<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WritingQuizAnswer extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(WritingQuizQuestion::class);
    }
}
