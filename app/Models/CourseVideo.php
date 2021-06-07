<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableInterface;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\VideoManage
 *
 * @property int $id
 * @property int $course_id
 * @property string $course_video_file
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\VideoManageTranslation $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\VideoManageTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage whereVideoManageFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManage withTranslation()
 * @mixin \Eloquent
 */
class VideoManage extends Model
{

    protected $guarded = [];
    protected $table = 'course_video';
}
