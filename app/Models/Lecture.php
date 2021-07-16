<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecture extends Model
{
    use SoftDeletes;

    protected $table = 'lectures';

    public $timestamps = TRUE;

    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
