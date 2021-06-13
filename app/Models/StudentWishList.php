<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentWishList extends Model
{
    use SoftDeletes;

    protected $table = 'student_wish_list';

    public $timestamps = TRUE;

    protected $guarded = [];
}
