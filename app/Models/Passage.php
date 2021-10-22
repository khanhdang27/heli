<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Passage extends Model
{
    use SoftDeletes;

    protected $table = 'passage';

    public $timestamps = true;

    protected $guarded = [];

    public function quiz()
    {
        return $this->belongsTo(PassGrade::class);
    }
}
