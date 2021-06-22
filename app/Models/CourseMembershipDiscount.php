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
    
}
