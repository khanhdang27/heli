<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Examination extends Model
{
    use SoftDeletes;
    protected $table = 'examinations';
    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }

    public function submitExams()
    {
        return $this->hasMany(SubmitExamination::class);
    }
}
