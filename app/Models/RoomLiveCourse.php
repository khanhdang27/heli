<?php

namespace App\Models;

use App\Models\StudySession;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomLiveCourse extends Model
{
    use SoftDeletes;

    protected $table = 'room_live_courses';

    protected $guarded = [];

    public function course()
    {
        return $this->hasOne(Course::class);
    }

    public function studySession()
    {
        return $this->belongsTo(StudySession::class);
    }
}
