<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use SoftDeletes;
    protected $table = 'settings';
    protected $guarded = [];

    public static function getObject()
    {
        $setting = Setting::query()->get();

        $_object = new \stdClass();

        foreach ($setting as $key => $value) {
            $_object->{$value->key} = $value->value;
        }
        return $_object;
    }
}
