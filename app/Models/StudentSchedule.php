<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentSchedule extends Model
{
    use SoftDeletes;

    protected $table = 'student_schedule';

    public $timestamps = TRUE;

    protected $guarded = [];
}
