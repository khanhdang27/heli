<?php

namespace App\Models;

use App\Models\PostTag;
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
        return $this->belongsTo(PostTag::class,'tag_id');
    }
}
