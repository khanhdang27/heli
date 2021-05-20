<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TutorTranslation
 *
 * @property int $id
 * @property int $tutor_id
 * @property string $locale
 * @property string $tutor_info
 * @property string $tutor_level
 * @property string $tutor_specialized
 * @property string $tutor_experience
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TutorTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TutorTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TutorTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TutorTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TutorTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TutorTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TutorTranslation whereTutorExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TutorTranslation whereTutorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TutorTranslation whereTutorInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TutorTranslation whereTutorLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TutorTranslation whereTutorSpecialized($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TutorTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TutorTranslation extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'tutor_translations';
}
