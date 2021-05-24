<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Certificate extends Model
{
    protected $table = 'certificates';
    protected $guarded = [];

    public function subject()
    {
        return $this->hasMany(Subject::class, 'subject_id');
    }
}
