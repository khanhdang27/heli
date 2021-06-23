<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseMembershipDiscount extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $table = 'course_membership_discounts';

    public function membershipCourses()
    {
        return $this->belongsTo(
            MembershipCourse::class, 
            'membership_course_id',
            'id',
        );
    }

    public function courseDiscounts()
    {
        return $this->belongsTo(
            CourseDiscount::class, 
            'course_discount_id',
            'id',
        );
    }

    public function getPrice()
    {
        return $this->membershipCourses->price_value;
    }
    

    public function getDiscount()
    {
        if ($this->courseDiscounts()) {

            return $this->courseDiscounts->discount_value;
        }

        return 0;
    }

    public function getPriceDiscount()
    {
        return $this->getPrice() - ($this->getPrice() * $this->getDiscount()/100);
    }
}
