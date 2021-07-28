<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubmitExamination extends Model
{
    use SoftDeletes;
    protected $table = 'submit_examinations';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }
    public function examination()
    {
        return $this->belongsTo(Examination::class, 'examination_id');
    }
}
