<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserLike extends Model
{
    static $POST = 1;
    static $COURSE = 2;
    static $BLOG = 3;
    use SoftDeletes;
    protected $table = 'user_likes';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
//    public function post(){
//        return $this->morphTo(Post::class);
//    }
//    public function course(){
//        return $this->morphTo(Course::class);
//    }
    public function userLikeable()
    {
        return $this->morphTo();
    }

}
