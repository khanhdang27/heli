<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\User;
use App\Models\Post;

class UserComment extends Model
{   use SoftDeletes;
    static $POST=1;
    static $COURSE=2;

    protected $table = 'comments';
    protected $guarded = [];


    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function post() {
        return $this->belongsTo(Post::class);
    }
    public function likeable()
    {
        return $this->morphMany(UserLike::class, 'likeable');
    }
    public function commentable()
    {
        return $this->morphTo();
    }
    public function image()
    {
        return $this->morphOne(File::class, 'fileable')->latest();
    }
}
