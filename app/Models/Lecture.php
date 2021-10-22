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
