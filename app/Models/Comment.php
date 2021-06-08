<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\User;
use App\Post;

class Comment extends Model
{
    use SoftDeletes;
    protected $table = 'comments';
    protected $guarded = [];


    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function post() {
        return $this->belongsTo(Post::class);
    }
}
