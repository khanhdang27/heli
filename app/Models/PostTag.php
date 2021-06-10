<?php

namespace App\Models;

use App\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostTag extends Model
{
    use SoftDeletes;
    protected $table = 'post_tags';
    protected $guarded = [];

    public function Post()
    {
        return $this->hasMany(Post::class);
    }
}
