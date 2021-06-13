<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudySession extends Model
{
    use SoftDeletes;

    protected $table = 'study_session';

    public $timestamps = TRUE;

    protected $guarded = [];
}
