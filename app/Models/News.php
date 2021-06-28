<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table= 'news';

    protected $guarded = [];

    public $timestamps = TRUE;

    public function file_ref(){
        return $this->morphOne(File::class, 'fileable');
    }
}
