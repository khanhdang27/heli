<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Tag extends Model
{
    use SoftDeletes;

    const POST = 1;
    const BLOG = 2;

    const TAG_TYPES = [
        self::POST => 'Forum hashtag',
        self::BLOG => 'Blog hashtag'
    ];

    protected $table = 'tags';
    protected $guarded = [];
}
