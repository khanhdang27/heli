<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    public static $AVATAR = 1;
    public static $UNDEFINED = 0;


    protected $table = 'file';

    public $timestamps = TRUE;

    protected $guarded = [];

    protected $hidden = ['source'];

    public function file_refer()
    {
        return $this->morphTo();
    }
}
