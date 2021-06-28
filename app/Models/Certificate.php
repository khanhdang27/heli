<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Certificate extends Model
{
    use SoftDeletes;
    protected $table = 'certificates';
    protected $guarded = [];

    public function subject()
    {
        return $this->hasMany(Subject::class);
    }
}
