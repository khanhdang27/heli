<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Subject
 *
 * @property int $id
 * @property string $subject_name
 * @property string|null $subject_color_background
 * @property string|null $subject_color_text
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject whereSubjectColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject whereSubjectNameCn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject whereSubjectNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject whereSubjectNameSc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Subject whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Subject extends Model implements TranslatableContract
{
    use Translatable;

    protected $table = 'subjects';
    protected $guarded = [];
    public $translatedAttributes = ['subject_name'];


    public function getName()
    {
        $subjectName = Subject::all();
        $options = $subjectName->pluck('subject_name', 'id')->toArray();
        return $options;
    }
}



