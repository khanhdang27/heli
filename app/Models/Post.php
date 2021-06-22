<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'posts';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function postTag()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }

    public function likeable()
    {
        return $this->morphMany(UserLike::class,'likeable');
    }
    
    public function comment()
    {
        return $this->morphMany(UserComment::class,'commentable');
    }

    public function image()
    {
        return $this->morphOne(File::class, 'fileable');
    }
}
