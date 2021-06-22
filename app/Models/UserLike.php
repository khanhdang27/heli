<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserLike extends Model
{
    use SoftDeletes;
    protected $table = 'user_likes';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function likeable()
    {
        return $this->morphTo();
    }

}
