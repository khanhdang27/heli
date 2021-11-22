<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MCAnswerItem extends Model
{
    use SoftDeletes;

    protected $table = 'answer_items';

    public $timestamps = TRUE;

    protected $guarded = [];

    public function answerItemable()
    {
        return $this->morphTo();
    }
}