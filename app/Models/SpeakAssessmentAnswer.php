<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpeakAssessmentAnswer extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $guarded = [];

    use SoftDeletes;

    public function question()
    {
        return $this->belongsTo(SpeakAssessmentQuestion::class);
    }
}
