<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;

class TutorTeachSubject extends Model
{
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

    public function getSubject()
    {
        return $this->belongsTo(Subject::class, 'id');
    }
}
