<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentLectureCourse extends Model
{
    use SoftDeletes;

    protected $table = 'student_lecture_course';

    public $timestamps = TRUE;

    protected $guarded = [];
}

