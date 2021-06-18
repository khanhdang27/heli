<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;


class CourseDiscount extends Model
{
    use Translatable, SoftDeletes;
    protected $table = 'course_discount';
    protected $guarded = [];
    protected $filterable = [];

}
