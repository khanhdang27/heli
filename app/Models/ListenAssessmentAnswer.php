<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListenAssessmentAnswer extends Model
{
    use SoftDeletes;

    public function question()
    {
        return $this->belongsTo(ListenAssessmentQuestion::class);
    }
}
