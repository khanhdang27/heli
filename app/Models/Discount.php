<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;

class Discount extends Model
{
    use Translatable, SoftDeletes;
    protected $table = 'discount';
    protected $guarded = [];
    protected $filterable = [];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
