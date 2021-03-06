<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TutorTeachCourse extends Model
{
    use SoftDeletes;

    protected $table = 'lecture';

    public $timestamps = TRUE;

    protected $guarded = [];
}
