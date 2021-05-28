<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use \App\Utilities\MapData;

class TutorTeachSubject extends Model
{

    use MapData;

    protected $table = 'tutor_teach_subject';

    public $timestamps = TRUE;

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
