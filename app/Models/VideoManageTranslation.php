<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\VideoManageTranslation
 *
 * @property int $id
 * @property string $course_video_name
 * @property string $course_video_description
 * @property int $course_video_id
 * @property string $locale
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManageTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManageTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManageTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManageTranslation whereVideoManageDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManageTranslation whereVideoManageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManageTranslation whereVideoManageName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManageTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManageTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManageTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoManageTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class VideoManageTranslation extends Model
{
    protected $guarded = [];
    protected $table = 'course_video_translations';
}
