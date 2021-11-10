<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentSchedule extends Model
{
    use SoftDeletes;

    protected $table = 'student_schedules';

    public $timestamps = true;

    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

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
