<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MembershipCourse extends Model
{
    use SoftDeletes;

    protected $table = 'membership_course';

    public $timestamps = TRUE;

    protected $guarded = [];
}
