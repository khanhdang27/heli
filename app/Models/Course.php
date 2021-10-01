<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Course extends Model implements TranslatableContract
{
    const LIVE = 1;
    const RECORD = 2;
    const DOCUMENT = 3;
    use Translatable, SoftDeletes;

    const COURSE_TYPE = [
        self::LIVE => 'Live Course',
        self::RECORD => 'Record Video',
    ];

    protected $table = 'courses';
    protected $guarded = [];
    public array $translatedAttributes = ['course_name', 'course_description'];

    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'tutor_id');
    }

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
        return $this->morphMany(UserLike::class, 'likeable');
    }

    public function likebyUser()
    {
        $isLike = $this->likeable
            ->filter(function ($item) {
                return $item->user_id == Auth::user()->id;
            })
            ->first();
        return empty($isLike) ? 0 : $isLike->like_style;
    }

    public function comment()
    {
        return $this->morphMany(UserComment::class, 'commentable');
    }

    public function lecture()
    {
        return $this->hasMany(Lecture::class);
    }

    public function ratings()
    {
        return $this->morphMany(Rating::class, 'ratingable');
    }

    public function ratingsByUser()
    {
        $rate = $this->ratings
            ->filter(function ($item) {
                return $item->user_id == Auth::user()->id;
            })
            ->first();
        return empty($rate) ? 0 : $rate->rating;
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

    public function exams()
    {
        return $this->hasMany(Exams::class);
    }
}
