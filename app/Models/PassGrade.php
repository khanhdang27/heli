<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PassGrade extends Model
{
    use SoftDeletes;
    protected $table = 'pass_grades';

    public $timestamps = true;

    protected $guarded = [];

    public function exam()
    {
        return $this->belongsTo(Exams::class);
    }
}
