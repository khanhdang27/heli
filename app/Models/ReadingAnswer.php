<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReadingAnswer extends Model
{
    use SoftDeletes;

    public function question()
    {
        return $this->belongsTo(ReadingQuestion::class);
    }
}
