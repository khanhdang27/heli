<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class CreateCourseRequest extends FormRequest
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
            'course_name:en' => 'required',
            'course_name:cn' => 'required',
            'course_name:sc' => 'required',
            'subject_id' => 'required',
            'tutor_id' => 'required',
            'type' => 'required',
            'course_description:en' => 'required',
            'course_description:cn' => 'required',
            'course_description:sc' => 'required',
            'course_overview' => 'required',
            'level' => 'required',
            'type_part' => 'required',
            'course_price' => 'required|integer|min:4',
        ];
    }
}
