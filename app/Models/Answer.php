<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use SoftDeletes;
    protected $table = 'answers';

    public $timestamps = true;

    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
