<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use App\Utilities\MapFromData;

class TutorTeachSubject extends Model
{

    use MapFromData;

    protected $table = 'tutor_teach_subject';

    public $timestamps = TRUE;

    protected $guarded = [];

    /**
     * get user type tutor
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getUser()
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function getTutor()
    {
        return $this->belongsTo(Tutor::class, 'id');
    }
    public function getSubject()
    {
        return $this->belongsTo(Subject::class, 'id');
    }
}
