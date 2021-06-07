<?php

namespace App\Models;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    protected $table = 'post_tags';
    protected $guarded = [];

    public function Post()
    {
        return $this->hasMany(Post::class);
    }
}
