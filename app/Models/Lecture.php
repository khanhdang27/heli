<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecture extends Model
{
    use SoftDeletes;

    protected $table = 'lectures';

    public $timestamps = true;

    protected $guarded = [];

    const LEVEL_5_0 = 1;
    const LEVEL_5_5 = 2;
    const LEVEL_6_0 = 3;
    const LEVEL_6_5 = 4;


    const LEVELS = [
        self::LEVEL_5_0 => 'Level 5.0',
        self::LEVEL_5_5 => 'Level 5.5',
        self::LEVEL_6_0 => 'Level 6.0',
        self::LEVEL_6_5 => 'Level 6.5'
    ];

    //Make it available in the json response
    protected $appends = ['model_name'];

    //implement the attribute
    public function getModelNameAttribute()
    {
        return 'Lecture';
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }
}
