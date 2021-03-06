<?php

namespace App\Models;

use \App\Utilities\MapData;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\Subject
 *
 * @property int $id
 * @property string $subject_name
 * @property string|null $subject_color_background
 * @property string|null $subject_color_text
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Subject newModelQuery()
 * @method static Builder|Subject newQuery()
 * @method static Builder|Subject query()
 * @method static Builder|Subject whereCreatedAt($value)
 * @method static Builder|Subject whereId($value)
 * @method static Builder|Subject whereStatus($value)
 * @method static Builder|Subject whereSubjectColor($value)
 * @method static Builder|Subject whereSubjectNameCn($value)
 * @method static Builder|Subject whereSubjectNameEn($value)
 * @method static Builder|Subject whereSubjectNameSc($value)
 * @method static Builder|Subject whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Subject extends Model implements TranslatableContract
{
    use Translatable, SoftDeletes;

    protected $table = 'subjects';
    protected $guarded = [];
    public $translatedAttributes = ['subject_name'];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'certificate_id');
    }
    public function course () {
        return $this->hasMany(Course::class);
    }
    public function tutor()
    {
        return $this->belongsToMany(Tutor::class, 'tutor_teach_subject');
    }
}
