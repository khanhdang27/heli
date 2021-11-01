<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WritingAssessmentAnswer extends Model
{
    use SoftDeletes;

    public $timestamps = true;
    protected $guarded = [];


    public function question()
    {
        return $this->belongsTo(WritingAssessmentQuestion::class);
    }
}
