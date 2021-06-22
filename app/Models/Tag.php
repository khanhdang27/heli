<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Tag extends Model
{

    public static $POST = 1;
    public static $BLOG = 2;

    use SoftDeletes;
    protected $table = 'tags';
    protected $guarded = [];
}
