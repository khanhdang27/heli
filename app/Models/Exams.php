<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exams extends Model
{
    use SoftDeletes;
    protected $table = 'exams';

    public $timestamps = true;

    protected $guarded = [];

    const ASSESSMENT = 1;
    const NORMAL = 2;
    const END = 3;

    const TYPES = [
        self::ASSESSMENT => 'Assessment',
        self::NORMAL => 'Normal',
        self::END => 'End',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function quiz()
    {
        return $this->hasMany(Quiz::class);
    }

    public function passGrade()
    {
        return $this->hasMany(PassGrade::class);
    }
}
