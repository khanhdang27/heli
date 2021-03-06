<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    use SoftDeletes;

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $table = 'discounts';
    protected $guarded = [];
    protected $filterable = [];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
