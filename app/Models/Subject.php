<?php

namespace App\Models;

use App\Utilities\MapFromData;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
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
    use Translatable;
    use MapFromData;

    protected $table = 'subjects';
    protected $guarded = [];
    public $translatedAttributes = ['subject_name'];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'certificate_id');
    }

    /**
     * @param $className
     * @param $column
     * @param $key
     * @param null $conditions
     * @return mixed
     */
    public static function getValues($certificate_id, $get_first = false)
    {
        $optionData = self::query();
        if ($get_first){
            $certificate = Certificate::orderBy("id","ASC")->first();
            $certificate_id = $certificate->id;
        }
        $optionData = $optionData->where('certificate_id', $certificate_id);

        return $optionData->get()->pluck('subject_name', 'id')->toArray();
    }
}
