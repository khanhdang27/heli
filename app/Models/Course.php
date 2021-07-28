<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Course extends Model implements TranslatableContract
{
    const LIVE = 1;
    const RECORD = 2;
    const DOCUMENT = 3;
    use Translatable, SoftDeletes;

    protected $table = 'courses';
    protected $guarded = [];
    public array $translatedAttributes = ['course_name', 'course_description'];

    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'tutor_id');
    }

    // public function certificate()
    // {
    //     return $this->belongsTo(Subject::class,'subject_id','id', Certificate::class);
    // }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function courseMaterial()
    {
        return $this->hasMany(CourseMaterial::class);
    }

    public function student()
    {
        return $this->belongsToMany(User::class, 'student_courses', 'course_id', 'student_id');
    }

    public function discount()
    {
        return $this->hasMany(Discount::class);
    }

    public function likeable()
    {
        return $this->morphMany(UserLike::class,'likeable');
    }

    public function comment()
    {
        return $this->morphMany(UserComment::class,'commentable');
    }

    public function lecture()
    {
        return $this->hasMany(Lecture::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'ratingable_id');
    }
    
    public function rooms()
    {
        return $this->hasMany(RoomLiveCourse::class);
    }

    public function schedule()
    {
        return $this->hasMany(CourseSchedule::class);
    }

    public function examinations()
    {
        return $this->hasMany(Examination::class, 'course_id');
    }
}
