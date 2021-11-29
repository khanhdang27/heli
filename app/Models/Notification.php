<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use SoftDeletes;
    protected $table = 'notifications';
    protected $guarded = [];



    public function createNotify($user, $title, $content, $route)
    {
        $this->user_id = $user;
        $this->title = $title;
        $this->content = $content;
        $this->route = $route;
    }

    public function saveNotify()
    {
        return $this->save();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
