<?php

namespace App\Models;

use App\Models\TutorSubject;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use \App\Utilities\MapData;

/**
 * App\Models\Tutor
 *
 * @property int $id
 * @property string $full_name
 * @property string $tutor_photo
 * @property int $subject_id
 * @property string|null $remember_token
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Subject $subject
 * @property-read \App\Models\TutorTranslation $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TutorTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor whereTutorName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor whereTutorPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tutor withTranslation()
 * @mixin \Eloquent
 */
class Tutor extends Model implements TranslatableContract
{
    use Translatable;
    

    protected $table = 'tutors';
    protected $guarded = [];
    public array $translatedAttributes = ['tutor_info', 'tutor_level', 'tutor_experience', 'tutor_specialized'];

    public function subject()
    {
        return $this->belongsToMany(Subject::class, TutorSubject::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsToMany(Tutor::class, TutorTeachCourse::class);
    }

    public function avatar()
    {
        return $this->hasOne(File::class, 'referer');
    }
}
