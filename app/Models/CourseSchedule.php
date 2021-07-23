<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseSchedule extends Model
{
    use SoftDeletes;

    protected $table = 'course_schedules';

    public $timestamps = TRUE;

    protected $guarded = [];
    
    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }

    public function studySession()
    {
        return $this->belongsTo(StudySession::class);
    }

    public function room()
    {
        return $this->belongsTo(RoomLiveCourse::class);
    }
}
