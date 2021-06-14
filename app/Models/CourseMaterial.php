<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Material
 *
 * @property int $id
 * @property string $material_image
 * @property string|null $material_file
 * @property int $material_price
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\MaterialTranslation $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MaterialTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial whereMaterialFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial whereMaterialImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial whereMaterialPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CourseMaterial withTranslation()
 * @mixin \Eloquent
 */
class CourseMaterial extends Model implements TranslatableContract
{
    use Translatable, SoftDeletes;

    protected $table = 'course_material';
    protected $guarded = [];
    public array $translatedAttributes = ['course_material_name', 'course_material_description', 'course_material_origin'];

}
