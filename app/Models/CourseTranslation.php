<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\CourseTranslation
 *
 * @property int $id
 * @property int $course_id
 * @property string $course_name
 * @property string $course_description
 * @property string $locale
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseTranslation whereCourseDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseTranslation whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseTranslation whereCourseName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CourseTranslation extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    protected $table = 'course_translations';

    public $timestamps = TRUE;
}
