<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material whereMaterialFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material whereMaterialImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material whereMaterialPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Material withTranslation()
 * @mixin \Eloquent
 */
class CourseMaterial extends Model implements TranslatableContract
{
    use Translatable;
    protected $guarded = [];
    protected $table = 'course_material';
    public $translatedAttributes = ['material_name', 'material_description', 'material_origin'];

    public function documents()
    {
        return $this->morphToMany(File::class, 'file_refer');
    }
}
