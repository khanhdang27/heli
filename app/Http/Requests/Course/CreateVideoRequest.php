<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Config;

class CreateVideoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'course_video_name:en' => 'required',
            'course_video_name:cn' => 'required',
            'course_video_name:sc' => 'required',
            'course_video_description:en' => 'required',
            'course_video_description:cn' => 'required',
            'course_video_description:sc' => 'required',
            'course_video_file' => 'file|mimes:' . strtolower(implode(',', Config::get('filesystems.video_format')))
        ];
    }
}
