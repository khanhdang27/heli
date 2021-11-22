<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Utilities\MapData;

class TutorTeachSubject extends Model
{
    use SoftDeletes;

    protected $table = 'tutor_teach_subject';

    public $timestamps = true;

    protected $guarded = [];

    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
