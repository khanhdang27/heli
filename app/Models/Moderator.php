<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Moderator extends Model
{
    use SoftDeletes;
    protected $table = 'moderators';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
