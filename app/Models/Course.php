<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * App\Models\Course
 *
 * @property int $id
 * @property string $course_price
 * @property string $course_discount
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CourseTranslation $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CourseTranslation[] $translations
 * @property-read int|null $translations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Lecture[] $videos
 * @property-read int|null $videos_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereCourseDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereCoursePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Course withTranslation()
 * @mixin \Eloquent
 */
class Course extends Model implements TranslatableContract
{
    use Translatable, SoftDeletes;


    protected $table = 'courses';
    protected $guarded = [];
    public array $translatedAttributes = ['course_name', 'course_description'];

    protected $filterable = [
        'certificate',
        'is_hot',
        'latest_discount',
        'welcome_offer',
        'course_name',
        'subject'
    ];

    public function videos()
    {
        return $this->hasMany(Lecture::class, 'course_id');
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'tutor_id');
    }

    public function certificate()
    {
        return $this->belongsTo(Certificate::class,'subject_id','id', Subject::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function courseMaterial()
    {
        return $this->hasMany(CourseMaterial::class);
    }

    public function student()
    {
        return $this->belongsToMany(User::class, 'student_courses', 'course_id', 'student_id');
    }

    public function discount()
    {
        return $this->hasMany(Discount::class);
    }
    public function userLike()
    {
        return $this->hasMany(UserLike::class,'like_ref_id');
    }
    public function comment()
    {
        return $this->hasMany(UserComment::class,'ref_id');
    }
}
