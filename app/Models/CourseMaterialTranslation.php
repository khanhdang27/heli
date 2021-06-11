<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\MaterialTranslation
 *
 * @property int $id
 * @property string $course_material_name
 * @property string $course_material_description
 * @property string $course_material_origin
 * @property int $course_material_id
 * @property string $locale
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterialTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterialTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterialTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterialTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterialTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterialTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterialTranslation whereMaterialDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterialTranslation whereMaterialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterialTranslation whereMaterialName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterialTranslation whereMaterialOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterialTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CourseMaterialTranslation extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $table = 'course_material_translations';
}
