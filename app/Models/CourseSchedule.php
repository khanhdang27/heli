<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseSchedule extends Model
{
    use SoftDeletes;

    protected $table = 'course_schedule';

    public $timestamps = TRUE;

    protected $guarded = [];
}
