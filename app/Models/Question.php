<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;
    protected $table = 'questions';

    public $timestamps = true;

    protected $guarded = [];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

}
