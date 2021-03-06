<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CourseDiscount extends Model
{
    use SoftDeletes;
    protected $table = 'course_discounts';
    protected $guarded = [];
    protected $filterable = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }
}
