<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudySession extends Model
{
    use SoftDeletes;

    protected $table = 'study_sessions';

    public $timestamps = TRUE;

    protected $guarded = [];

    public function rooms()
    {
        return $this->hasMany(RoomLiveCourse::class);
    }
}
